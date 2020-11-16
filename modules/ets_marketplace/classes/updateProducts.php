<?php
/**
 * These classes add import and update from external data sources.
 */

if (!defined('_PS_VERSION_'))
	exit;


class UpdateProducts
{
    private $seller;
    private $products_data;
    private $exist_product, $product_seller;
    protected static $instance;
    public $_errors= array();

    public function __construct($seller = null, $products_data = null)
    {
        #parent::__construct($seller,$products_data);
        $this->context = Context::getContext();
        $this->seller = $seller;
        $this->products_data = $products_data;
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new UpdateProducts();

            $this->context = Context::getContext();
            $this->seller = $seller;
            $this->products_data = $products_data;
        }
        return self::$instance;
    }

    public function go()
    {
        // Fields matching
        $col_name = 'Name';
        $col_link_rewrite = 'Link rewrite';
        $col_image = 'Image';
        $col_quantity = 'Quantity';
        $col_price = 'Price';
        $col_category = 'Categories';
        $col_default_category = 'Default category';
        $col_combination = 'Combinations';
        $col_description = 'Description';
        $col_description_short = 'Summary';
        $col_specific_price = 'Specific price';

        $context = Context::getContext();

        foreach ($this->products_data as $product_data) {

            #file_put_contents('log.txt',$product_data[$col_name]."\r\n", FILE_APPEND);

            $exist_products = Product::searchByName($context->language->id, $product_data[$col_name], $context);

            $this->product_seller = (int)Db::getInstance()->getValue('SELECT id_customer FROM `'._DB_PREFIX_.'ets_mp_seller_product` WHERE id_product = "'.(int)$exist_products[0]["id_product"].'"');

            $this->exist_product = $exist_products[0];

            if ($this->exist_product && $this->product_seller==(int)$this->seller->id_customer) {
                $result = $this->updateProduct($product_data,$col_name,$col_link_rewrite,$col_image,$col_quantity,$col_price,$col_category,$col_default_category,$col_combination,$col_description,$col_description_short,$col_specific_price);
            }
            else {
                $result = $this->addProduct($product_data,$col_name,$col_link_rewrite,$col_image,$col_quantity,$col_price,$col_category,$col_default_category,$col_combination,$col_description,$col_description_short,$col_specific_price);
            }

            if ($result["error"]!='') return $result;

        }

        return 1;
    }


    public function updateProduct($data,$col_name,$col_link_rewrite,$col_image,$col_quantity,$col_price,$col_category,$col_default_category,$col_combination,$col_description,$col_description_short,$col_specific_price)
    {

        #if(!isset($data[$col_name]) or !$data[$col_name] or !Validate::isCatalogName($data[$col_name])) $error=1;
        #if(!isset($data[$col_link_rewrite]) or !$data[$col_link_rewrite] or !Validate::isLinkRewrite($data[$col_link_rewrite])) $error=1;

        $context = Context::getContext();
        $product = new Product($this->exist_product['id_product'], null, $context->language->id, $this->seller->id_shop, $context);

        $languages = Language::getLanguages(false);
        foreach($languages as $language)
        {
            $product->name = $data[$col_name];

            if(Db::getInstance()->getValue('SELECT id_product FROM `'._DB_PREFIX_.'product_lang` WHERE link_rewrite="'.pSQL($data[$col_link_rewrite]).'"'))
            {
                $maxId = Db::getInstance()->getValue('SELECT MAX(id_product) FROM `'._DB_PREFIX_.'product`');
                $data[$col_link_rewrite] .= '-'.($maxId+1);
            }
            $product->link_rewrite = $data[$col_link_rewrite];

            $product->description = $data[$col_description];

            $product->description_short = $data[$col_description_short];
        }

        $product->id_category_default = (int)$data[$col_default_category];

        $product->price = (isset($data[$col_price])) ? $data[$col_price] : 0;

        $quantity= (isset($data[$col_quantity])) ? (int)$data[$col_quantity] : 0;

        $combinations = Tools::jsonDecode(preg_replace('/[\x00-\x1F\x80-\xFF]/', '',$data[$col_combination]),true);
        if($combinations && is_array($combinations))
        {
            foreach($combinations as $combination)
            {
                $attributes = $combination['attributes'];
            }
        }

        $images = explode(',',$data[$col_image]);

        $specific_prices = (isset($data[$col_specific_price])) ? Tools::jsonDecode($data[$col_specific_price],true) : "";


        if($this->seller->vacation_mode && $this->seller->vacation_type=='disable_product')
            $product->active=0;
        else
        {
            if($this->seller->auto_enabled_product=='yes')
                $product->active=1;
            elseif($this->seller->auto_enabled_product=='no')
                $product->active=0;
            elseif(Configuration::get('ETS_MP_SELLER_PRODUCT_APPROVE_REQUIRED'))
                $product->active=0;
            else
                $product->active=1;
        }


        if ($this->_errors)
        {
            return ["error"=>$this->_errors];
        }

        $res = $product->update();

        StockAvailable::setQuantity($product->id, 0, $quantity);

        return $res;
    }

    public function addProduct($data,$col_name,$col_link_rewrite,$col_image,$col_quantity,$col_price,$col_category,$col_default_category,$col_combination,$col_description,$col_description_short,$col_specific_price)
    {
        #file_put_contents('cronjob_log.txt',"\r\n"."-add new product: ".$data[$col_name]."\r\n", FILE_APPEND);

        #if(!isset($data[$col_name]) or !$data[$col_name] or !Validate::isCatalogName($data[$col_name])) $error=1;
        #if(!isset($data[$col_link_rewrite]) or !$data[$col_link_rewrite] or !Validate::isLinkRewrite($data[$col_link_rewrite])) $error=1;

        $product = new Product();

        $languages = Language::getLanguages(false);
        foreach($languages as $language)
        {
            $product->name[$language['id_lang']] = $data[$col_name];

            if(Db::getInstance()->getValue('SELECT id_product FROM `'._DB_PREFIX_.'product_lang` WHERE link_rewrite="'.pSQL($data[$col_link_rewrite]).'"'))
            {
                $maxId = Db::getInstance()->getValue('SELECT MAX(id_product) FROM `'._DB_PREFIX_.'product`');
                $data[$col_link_rewrite] .= '-'.($maxId+1);
            }
            $product->link_rewrite[$language['id_lang']] = $data[$col_link_rewrite];

            $product->description[$language['id_lang']] = $data[$col_description];

            $product->description_short[$language['id_lang']] = $data[$col_description_short];
        }

        $product->id_category_default = (int)$data[$col_default_category];

        $product->price = (isset($data[$col_price])) ? $data[$col_price] : 0;

        $quantity = (isset($data[$col_quantity])) ? (int)$data[$col_quantity] : 0;

        $combinations = Tools::jsonDecode(preg_replace('/[\x00-\x1F\x80-\xFF]/', '',$data[$col_combination]),true);
        if($combinations && is_array($combinations))
        {
            foreach($combinations as $combination)
            {
                $attributes = $combination['attributes'];
            }
        }

        $images = explode(',',$data[$col_image]);

        $specific_prices = (isset($data[$col_specific_price])) ? Tools::jsonDecode($data[$col_specific_price],true) : "";


        if($this->seller->vacation_mode && $this->seller->vacation_type=='disable_product')
            $product->active=0;
        else
        {
            if($this->seller->auto_enabled_product=='yes')
                $product->active=1;
            elseif($this->seller->auto_enabled_product=='no')
                $product->active=0;
            elseif(Configuration::get('ETS_MP_SELLER_PRODUCT_APPROVE_REQUIRED'))
                $product->active=0;
            else
                $product->active=1;
        }

        // if($this->_errors)
        // {
        //     return ["error"=>"Error in product data"];
        // }

        // Attach new product to selletr
        if ($this->exist_product and (int)$this->product_seller!=(int)$this->seller->id_customer)
        {
            Db::getInstance()->execute('INSERT INTO `'._DB_PREFIX_.'ets_mp_seller_product`(id_customer,id_product,approved,active) VALUES("'.(int)$this->seller->id_customer.'","'.(int)$this->exist_product['id_product'].'","'.(int)$product->active.'","'.(int)$product->active.'")');
        }

        // Add new product to main catalog
        if (!$this->exist_product)
        {
            $product->add();
            Db::getInstance()->execute('INSERT INTO `'._DB_PREFIX_.'ets_mp_seller_product`(id_customer,id_product,approved,active) VALUES("'.(int)$this->seller->id_customer.'","'.(int)$product->id.'","'.(int)$product->active.'","'.(int)$product->active.'")');
            StockAvailable::setQuantity($product->id, 0, $quantity);
            if($data[$col_category])
            {
               $categories = explode(',',$data[$col_category]);
               foreach($categories as $id_category)
               {
                    if(!Db::getInstance()->getRow('SELECT * FROM `'._DB_PREFIX_.'category_product` WHERE id_category="'.(int)$id_category.'" AND id_product="'.(int)$product->id.'"'))
                        Db::getInstance()->execute('INSERT INTO `'._DB_PREFIX_.'category_product`(id_category,id_product) VALUES("'.(int)$id_category.'","'.(int)$product->id.'")');
               }
               if(!in_array($product->id_category_default,$categories))
               {
                    if(!Db::getInstance()->getRow('SELECT * FROM `'._DB_PREFIX_.'category_product` WHERE id_category="'.(int)$product->id_category_default.'" AND id_product="'.(int)$product->id.'"'))
                        Db::getInstance()->execute('INSERT INTO `'._DB_PREFIX_.'category_product`(id_category,id_product) VALUES("'.(int)$product->id_category_default.'","'.(int)$product->id.'")');
               }
            }
            if(isset($data[$col_image]) && $data[$col_image])
            {
                $images = explode(',',$data[$col_image]);
                if($images)
                {
                    $cover= false;
                    foreach($images as $image)
                    {
                        $image_class = new Image();
                        if(!$cover)
                        {
                            $image_class->cover=1;
                            $cover=1;
                        }
                        $image_class->id_product = $product->id;
                        if($image_class->add())
                        {
                            if(!$this->copyImg($product->id,$image_class->id,$image))
                                $image_class->delete();
                        }
                    }
                }
            }
            if(isset($data[$col_specific_price]) && $data[$col_specific_price] && $specific_prices = Tools::jsonDecode(preg_replace('/[\x00-\x1F\x80-\xFF]/', '',$data[$col_specific_price]),true))
            {
                if(is_array($specific_prices))
                {
                    foreach($specific_prices as $specific_price)
                    {
                        $errors_specific_prices = array();
                        if(!Validate::isNegativePrice($specific_price['price']))
                            $errors_specific_prices[] = $this->module->l('Price of specific price in row','import').' '.$row.' '.$this->module->l('is not valid','import');
                        if(!Validate::isUnsignedInt($specific_price['from_quantity']))
                            $errors_specific_prices[] = $this->module->l('From quantity of specific price in row','import').' '.$row.' '.$this->module->l('is not valid','import');
                        if(!Validate::isPrice(($specific_price['reduction'])))
                            $errors_specific_prices[] = $this->module->l('Reduction of specific price in row','import').' '.$row.' '. $this->module->l('is not valid','import');
                        if(!Validate::isBool($specific_price['reduction_tax']))
                            $errors_specific_prices[] = $this->module->l('Reduction tax of specific price in row','import').' '.$row.' '.$this->module->l('is not valid','import');
                        if(!Validate::isReductionType($specific_price['reduction_type']))
                            $errors_specific_prices[] = $this->module->l('Reduction type of specific price in row','import').' '.$row.' '. $this->module->l('is not valid','import');
                        if(!Validate::isDateFormat($specific_price['from']))
                            $errors_specific_prices[] = $this->module->l('From of specific price in row','import').' '.$row.' '.$this->module->l('is not valid','import');
                        if(!Validate::isDateFormat($specific_price['to']))
                            $errors_specific_prices[] = $this->module->l('To of specific price in row','import').' '.$row.' '.$this->module->l('is not valid','import');
                        if(!Validate::isUnsignedId($specific_price['id_currency']))
                            $errors_specific_prices[] = $this->module->l('ID currency of specific price in row','import').' '.$row.' '.$this->module->l('is not valid','import');
                        if(!Validate::isUnsignedInt($specific_price['id_group']))
                            $errors_specific_prices[] = $this->module->l('ID group of specific price in row','import').' '.$row.' '.$this->module->l('is not valid','import');
                        if(!Validate::isUnsignedInt($specific_price['id_customer']))
                            $errors_specific_prices[] = $this->module->l('ID customer of specific price in row','import').' '.$row.' '.$this->module->l('is not valid','import');
                        if(!Validate::isUnsignedInt($specific_price['id_country']))
                            $errors_specific_prices[] = $this->module->l('ID country of specific price in row','import').' '.$row.' '.$this->module->l('is not valid','import');
                        if(!$errors_specific_prices)
                        {
                            $specificPrice = new SpecificPrice();
                            $specificPrice->id_shop_group=0;
                            $specificPrice->id_shop=0;
                            $specificPrice->id_cart=0;
                            $specificPrice->id_attribute_product =0;
                            $specificPrice->id_product= $product->id;
                            $specificPrice->id_specific_price_rule=0;
                            $specificPrice->id_group = (int)$specific_price['id_group'];
                            $specificPrice->id_country = (int)$specific_price['id_country'];
                            $specificPrice->id_currency = (int)$specific_price['id_currency'];
                            $specificPrice->id_customer = (int)$specific_price['id_customer'];
                            $specificPrice->price = (float)$specific_price['price'];
                            $specificPrice->from_quantity = (int)$specific_price['from_quantity'];
                            $specificPrice->reduction= (float)$specific_price['reduction'];
                            $specificPrice->reduction_tax = (int)$specific_price['reduction_tax'];
                            $specificPrice->reduction_type = $specific_price['reduction_type'];
                            $specificPrice->from = $specific_price['from'];
                            $specificPrice->to = $specific_price['to'];
                            $specificPrice->add();
                        }
                        else
                        {
                            $this->_errors = array_merge($this->_errors,$errors_specific_prices);
                        }
                    }
                }
            }
            if(isset($data[$col_combination]) && $data[$col_combination] && $combinations = Tools::jsonDecode(preg_replace('/[\x00-\x1F\x80-\xFF]/', '',$data[$col_combination]),true))
            {
                if($combinations)
                {
                    foreach($combinations as $combination)
                    {
                        if(is_array($combination) && isset($combination['attributes']))
                        {
                            $attributes = $combination['attributes'];
                            if($attributes && is_array($attributes))
                            {
                                $combination_class= new Combination();
                                $combination_class->quantity= isset($combination['quantity']) ? (int)$combination['quantity']:0;
                                $combination_class->price= isset($combination['price']) ? (float)$combination['price']:0;
                                if(Db::getInstance()->getRow('SELECT * FROM `'._DB_PREFIX_.'product_attribute` WHERE default_on=1 AND id_product='.(int)$product->id))
                                    $combination_class->default_on=0;
                                else
                                    $combination_class->default_on =isset($combination['default_on']) ? $combination['default_on']:0 ;
                                $combination_class->minimal_quantity=1;
                                $combination_class->id_product= $product->id;
                                if($combination_class->add())
                                {
                                    $ok=false;
                                    foreach($attributes as $attribute)
                                    {
                                        if(isset($attribute['name']) && isset($attribute['name_group']) && isset($attribute['color']))
                                        {
                                            $sql = 'SELECT a.id_attribute FROM `'._DB_PREFIX_.'attribute` a
                                            INNER JOIN `'._DB_PREFIX_.'attribute_group` ag ON (ag.id_attribute_group=a.id_attribute_group)
                                            INNER JOIN `'._DB_PREFIX_.'attribute_group_shop` ags ON(ag.id_attribute_group=ags.id_attribute_group AND ags.id_shop="'.(int)$this->context->shop->id.'")
                                            LEFT JOIN `'._DB_PREFIX_.'ets_mp_attribute_group_seller` attribute_group_seller ON (ag.id_attribute_group=attribute_group_seller.id_attribute_group)
                                            LEFT JOIN `'._DB_PREFIX_.'attribute_lang` al ON (al.id_attribute= al.id_attribute ANd id_lang="'.(int)$this->context->language->id.'")
                                            LEFT JOIN `'._DB_PREFIX_.'attribute_group_lang` agl ON (agl.id_attribute_group=ag.id_attribute_group AND agl.id_lang="'.(int)$this->context->language->id.'")
                                            WHERE attribute_group_seller.id_customer="'.(int)$this->seller->id_customer.'" AND al.name="'.pSQL($attribute['name']).'" AND a.color="'.pSQL($attribute['color']).'" AND agl.name="'.pSQL($attribute['name_group']).'"';
                                            $id_attribute = Db::getInstance()->getValue($sql);
                                            if(!$id_attribute)
                                            {
                                                $sql = 'SELECT ag.id_attribute_group FROM `'._DB_PREFIX_.'attribute_group` ag
                                                INNER JOIN `'._DB_PREFIX_.'attribute_group_shop` ags ON(ag.id_attribute_group=ags.id_attribute_group AND ags.id_shop="'.(int)$this->context->shop->id.'")
                                                LEFT JOIN `'._DB_PREFIX_.'ets_mp_attribute_group_seller` attribute_group_seller ON (ag.id_attribute_group=attribute_group_seller.id_attribute_group)
                                                LEFT JOIN `'._DB_PREFIX_.'attribute_group_lang` agl ON (agl.id_attribute_group=ag.id_attribute_group AND agl.id_lang="'.(int)$this->context->language->id.'")
                                                WHERE attribute_group_seller.id_customer="'.(int)$this->seller->id_customer.'" AND agl.name="'.pSQL($attribute['name_group']).'"';
                                                if($id_attribute_group = Db::getInstance()->getValue($sql))
                                                {
                                                    $attribute_class = new Attribute();
                                                    foreach($languages as $language)
                                                    {
                                                        $attribute_class->name[$language['id_lang']] = $attribute['name'];
                                                    }
                                                    $attribute_class->color= $attribute['color'];
                                                    $attribute_class->id_attribute_group = $id_attribute_group;
                                                    if($attribute_class->add())
                                                        $id_attribute = $attribute_class->id;
                                                }
                                                else
                                                {
                                                    $attributeGroupClass = new AttributeGroup();
                                                    foreach($languages as $language)
                                                    {
                                                        $attributeGroupClass->name[$language['id_lang']] = $attribute['name_group'];
                                                        $attributeGroupClass->public_name [$language['id_lang']] = $attribute['name_group'];
                                                    }
                                                    if($attribute['color'])
                                                    {
                                                        $attributeGroupClass->group_type='color';
                                                        $attributeGroupClass->is_color_group=1;
                                                    }
                                                    else
                                                    {
                                                        $attributeGroupClass->group_type='select';
                                                        $attributeGroupClass->is_color_group=0;
                                                    }
                                                    if($attributeGroupClass->add())
                                                    {
                                                        Db::getInstance()->execute('INSERT INTO `'._DB_PREFIX_.'ets_mp_attribute_group_seller`(id_attribute_group,id_customer) VALUES("'.(int)$attributeGroupClass->id.'","'.(int)$this->seller->id_customer.'")');
                                                        $attribute_class = new Attribute();
                                                        foreach($languages as $language)
                                                        {
                                                            $attribute_class->name[$language['id_lang']] = $attribute['name'];
                                                        }
                                                        $attribute_class->color= $attribute['color'];
                                                        $attribute_class->id_attribute_group = $attributeGroupClass->id;
                                                        if($attribute_class->add())
                                                            $id_attribute = $attribute_class->id;
                                                    }
                                                }
                                            }
                                            if($id_attribute)
                                            {
                                                $ok=true;
                                                if(!Db::getInstance()->getRow('SELECT * FROM `'._DB_PREFIX_.'product_attribute_combination` WHERE id_attribute="'.(int)$id_attribute.'" AND id_product_attribute="'.(int)$combination_class->id.'"'))
                                                {
                                                    Db::getInstance()->execute('INSERT INTO `'._DB_PREFIX_.'product_attribute_combination`(id_product_attribute,id_attribute) VALUES("'.(int)$combination_class->id.'","'.(int)$id_attribute.'")');
                                                }
                                            }
                                        }

                                    }
                                    if(!$ok)
                                        $combination_class->delete();
                                    else
                                    {
                                        StockAvailable::setQuantity((int)$product->id, (int)$combination_class->id, (int)$combination_class->quantity);
                                        if(isset($combination['specific_prices']) && $combination['specific_prices'] && $specific_prices = $combination['specific_prices'])
                                        {
                                            if(is_array($specific_prices))
                                            {
                                                foreach($specific_prices as $specific_price)
                                                {
                                                    $errors_specific_prices = array();
                                                    if(!Validate::isNegativePrice($specific_price['price']))
                                                        $errors_specific_prices[] = $this->module->l('Price of specific price of combination in row','import').' '.$row.' '.$this->module->l('is not valid','import');
                                                    if(!Validate::isUnsignedInt($specific_price['from_quantity']))
                                                        $errors_specific_prices[] = $this->module->l('From quantity of specific price of combination in row','import').' '.$row.' '.$this->module->l('is not valid','import');
                                                    if(!Validate::isPrice(($specific_price['reduction'])))
                                                        $errors_specific_prices[] = $this->module->l('Reduction of specific price of combination in row','import').' '.$row.' '. $this->module->l('is not valid','import');
                                                    if(!Validate::isBool($specific_price['reduction_tax']))
                                                        $errors_specific_prices[] = $this->module->l('Reduction tax of specific price of combination in row','import').' '.$row.' '.$this->module->l('is not valid','import');
                                                    if(!Validate::isReductionType($specific_price['reduction_type']))
                                                        $errors_specific_prices[] = $this->module->l('Reduction type of specific price of combination in row','import').' '.$row.' '. $this->module->l('is not valid','import');
                                                    if(!Validate::isDateFormat($specific_price['from']))
                                                        $errors_specific_prices[] = $this->module->l('From of specific price of combination in row','import').' '.$row.' '.$this->module->l('is not valid','import');
                                                    if(!Validate::isDateFormat($specific_price['to']))
                                                        $errors_specific_prices[] = $this->module->l('To of specific price of combination in row','import').' '.$row.' '.$this->module->l('is not valid','import');
                                                    if(!Validate::isUnsignedId($specific_price['id_currency']))
                                                        $errors_specific_prices[] = $this->module->l('ID currency of specific price of combination in row','import').' '.$row.' '.$this->module->l('is not valid','import');
                                                    if(!Validate::isUnsignedInt($specific_price['id_group']))
                                                        $errors_specific_prices[] = $this->module->l('ID group of specific price of combination in row','import').' '.$row.' '.$this->module->l('is not valid','import');
                                                    if(!Validate::isUnsignedInt($specific_price['id_customer']))
                                                        $errors_specific_prices[] = $this->module->l('ID customer of specific price of combination in row','import').' '.$row.' '.$this->module->l('is not valid','import');
                                                    if(!Validate::isUnsignedInt($specific_price['id_country']))
                                                        $errors_specific_prices[] = $this->module->l('ID country of specific price of combination in row','import').' '.$row.' '.$this->module->l('is not valid','import');
                                                    if(!$errors_specific_prices)
                                                    {
                                                        $specificPrice = new SpecificPrice();
                                                        $specificPrice->id_shop_group=0;
                                                        $specificPrice->id_shop=0;
                                                        $specificPrice->id_cart=0;
                                                        $specificPrice->id_product_attribute = $combination_class->id;
                                                        $specificPrice->id_product= $combination_class->id_product;
                                                        $specificPrice->id_specific_price_rule=0;
                                                        $specificPrice->id_group = (int)$specific_price['id_group'];
                                                        $specificPrice->id_country = (int)$specific_price['id_country'];
                                                        $specificPrice->id_currency = (int)$specific_price['id_currency'];
                                                        $specificPrice->id_customer = (int)$specific_price['id_customer'];
                                                        $specificPrice->price = (float)$specific_price['price'];
                                                        $specificPrice->from_quantity = (int)$specific_price['from_quantity'];
                                                        $specificPrice->reduction= (float)$specific_price['reduction'];
                                                        $specificPrice->reduction_tax = (int)$specific_price['reduction_tax'];
                                                        $specificPrice->reduction_type = $specific_price['reduction_type'];
                                                        $specificPrice->from = $specific_price['from'];
                                                        $specificPrice->to = $specific_price['to'];
                                                        $specificPrice->add();
                                                    }
                                                    else
                                                    {
                                                        $this->_errors = array_merge($this->_errors,$errors_specific_prices);
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }

                            }
                        }

                    }
                }
            }
            return true;
        }

        return 1;

    }

    public function copyImg($id_entity, $id_image = null, $url = '', $entity = 'products', $regenerate = true, $thumb = false)
    {
        $tmpfile = tempnam(_PS_TMP_IMG_DIR_, 'ps_import');
        $watermark_types = explode(',', Configuration::get('WATERMARK_TYPES'));
        switch ($entity) {
            default:
            case 'products':
                if (is_file(_PS_TMP_IMG_DIR_ . 'product_mini_' . (int)$id_entity . '.jpg')) {
                    @unlink(_PS_TMP_IMG_DIR_ . 'product_mini_' . (int)$id_entity . '.jpg');
                }
                if (is_file(_PS_TMP_IMG_DIR_ . 'product_mini_' . (int)$id_entity . '_' . (int)Context::getContext()->shop->id . '.jpg')) {
                    @unlink(_PS_TMP_IMG_DIR_ . 'product_mini_' . (int)$id_entity . '_' . (int)Context::getContext()->shop->id . '.jpg');
                }
                $image_obj = new Image($id_image);
                $path = $image_obj->getPathForCreation();
                break;
            case 'Category':
                $entity = 'categories';
                $path = _PS_CAT_IMG_DIR_ . (int)$id_entity;
                if (is_file(_PS_TMP_IMG_DIR_ . 'category_mini_' . (int)$id_entity . '.jpg')) {
                    @unlink(_PS_TMP_IMG_DIR_ . 'category_mini_' . (int)$id_entity . '.jpg');
                }
                if (is_file(_PS_TMP_IMG_DIR_ . 'product_mini_' . (int)$id_entity . '_' . (int)Context::getContext()->shop->id . '.jpg')) {
                    @unlink(_PS_TMP_IMG_DIR_ . 'product_mini_' . (int)$id_entity . '_' . (int)Context::getContext()->shop->id . '.jpg');
                }
                break;
            case 'Manufacturer':
                $entity = 'manufacturers';
                $path = _PS_MANU_IMG_DIR_ . (int)$id_entity;
                if (is_file(_PS_TMP_IMG_DIR_ . 'manufacturer_mini_' . (int)$id_entity . '.jpg')) {
                    @unlink(_PS_TMP_IMG_DIR_ . 'manufacturer_mini_' . (int)$id_entity . '.jpg');
                }
                if (is_file(_PS_TMP_IMG_DIR_ . 'manufacturer_mini_' . (int)$id_entity . '_' . (int)Context::getContext()->shop->id . '.jpg')) {
                    @unlink(_PS_TMP_IMG_DIR_ . 'manufacturer_mini_' . (int)$id_entity . '_' . (int)Context::getContext()->shop->id . '.jpg');
                }
                break;
            case 'Supplier':
                $entity = 'suppliers';
                $path = _PS_SUPP_IMG_DIR_ . (int)$id_entity;
                if (is_file(_PS_TMP_IMG_DIR_ . 'supplier_mini_' . (int)$id_entity . '.jpg')) {
                    @unlink(_PS_TMP_IMG_DIR_ . 'supplier_mini_' . (int)$id_entity . '.jpg');
                }
                if (is_file(_PS_TMP_IMG_DIR_ . 'supplier_mini_' . (int)$id_entity . '_' . (int)Context::getContext()->shop->id . '.jpg')) {
                    @unlink(_PS_TMP_IMG_DIR_ . 'supplier_mini_' . (int)$id_entity . '_' . (int)Context::getContext()->shop->id . '.jpg');
                }
                break;
            case 'stores':
                $path = _PS_STORE_IMG_DIR_ . (int)$id_entity;
                break;
        }
        $url = urldecode(trim($url));
        $parced_url = parse_url($url);
        if (isset($parced_url['path'])) {
            $uri = ltrim($parced_url['path'], '/');
            $parts = explode('/', $uri);
            foreach ($parts as &$part) {
                $part = rawurlencode($part);
            }
            unset($part);
            $parced_url['path'] = '/' . implode('/', $parts);
        }

        if (isset($parced_url['query'])) {
            $query_parts = array();
            parse_str($parced_url['query'], $query_parts);
            $parced_url['query'] = http_build_query($query_parts);
        }
        if (!function_exists('http_build_url')) {
            if (version_compare(_PS_VERSION_, '1.6', '<'))
                include_once(_PS_MODULE_DIR_ . 'ets_marketplace/classes/http_build_url.php');
            else
                require_once(_PS_TOOL_DIR_ . 'http_build_url/http_build_url.php');
        }
        $url = http_build_url('', $parced_url);
        $orig_tmpfile = $tmpfile;
        $context = stream_context_create(array('http' => array('header' => 'User-Agent: Mozilla compatible')));
        if (self::copy($url, $tmpfile, $context)) {
            //Evaluate the memory required to resize the image: if it's too much, you can't resize it.
            if (!ImageManager::checkImageMemoryLimit($tmpfile)) {
                @unlink($tmpfile);
                return false;
            }
            $tgt_width = $tgt_height = 0;
            $src_width = $src_height = 0;
            $error = 0;
            if (file_exists($path . '.jpg') && !$thumb)
                @unlink($path . '.jpg');
            if ($thumb)
                ImageManager::resize($tmpfile, $path . '_thumb.jpg', null, null, 'jpg', false, $error, $tgt_width, $tgt_height, 5, $src_width, $src_height);
            else
                ImageManager::resize($tmpfile, $path . '.jpg', null, null, 'jpg', false, $error, $tgt_width, $tgt_height, 5, $src_width, $src_height);
            $images_types = ImageType::getImagesTypes($entity, true);
            if ($regenerate) {
                foreach ($images_types as $image_type) {
                    if (version_compare(_PS_VERSION_, '1.7', '<'))
                        $formatted_small = ImageType::getFormatedName('small');
                    else
                        $formatted_small = ImageType::getFormattedName('small');
                    if (($thumb && $formatted_small != $image_type['name']))
                        continue;
                    //$tmpfile = self::get_best_path($image_type['width'], $image_type['height'], $path_infos);
                    if (file_exists($path . '-' . Tools::stripslashes($image_type['name']) . '.jpg'))
                        @unlink($path . '-' . Tools::stripslashes($image_type['name']) . '.jpg');

                    if (ImageManager::resize(
                        $tmpfile,
                        $path . '-' . Tools::stripslashes($image_type['name']) . '.jpg',
                        $image_type['width'],
                        $image_type['height'],
                        'jpg',
                        false,
                        $error,
                        $tgt_width,
                        $tgt_height,
                        5,
                        $src_width,
                        $src_height
                    )) {
                        if ($entity == 'products') {
                            if (is_file(_PS_TMP_IMG_DIR_ . 'product_mini_' . (int)$id_entity . '.jpg')) {
                                @unlink(_PS_TMP_IMG_DIR_ . 'product_mini_' . (int)$id_entity . '.jpg');
                            }
                            if (is_file(_PS_TMP_IMG_DIR_ . 'product_mini_' . (int)$id_entity . '_' . (int)Context::getContext()->shop->id . '.jpg')) {
                                @unlink(_PS_TMP_IMG_DIR_ . 'product_mini_' . (int)$id_entity . '_' . (int)Context::getContext()->shop->id . '.jpg');
                            }
                        }
                    }
                    if (in_array($image_type['id_image_type'], $watermark_types)) {
                        Hook::exec('actionWatermark', array('id_image' => $id_image, 'id_product' => $id_entity));
                    }
                }
            }
        } else {
            @unlink($orig_tmpfile);
            return false;
        }
        @unlink($orig_tmpfile);
        return true;
    }

    public static function copy($source, $destination, $stream_context = null)
    {
        if (is_null($stream_context) && !preg_match('/^https?:\/\//', $source)) {
            return @copy($source, $destination);
        }
        return @file_put_contents($destination, self::file_get_contents($source, false, $stream_context));
    }

    public static function file_get_contents($url, $use_include_path = false, $stream_context = null, $curl_timeout = 5)
    {
        if ($stream_context == null && preg_match('/^https?:\/\//', $url)) {
            $stream_context = @stream_context_create(array('http' => array('timeout' => $curl_timeout)));
        }
        if (function_exists('curl_init')) {
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => html_entity_decode($url),
                CURLOPT_USERAGENT => 'cURL Request',
                CURLOPT_SSL_VERIFYPEER => false,
            ));
            $content = curl_exec($curl);
            curl_close($curl);
            return $content;
        } elseif (in_array(ini_get('allow_url_fopen'), array('On', 'on', '1')) || !preg_match('/^https?:\/\//', $url)) {
            return Tools::file_get_contents($url, $use_include_path, $stream_context);
        } else {
            return false;
        }
    }

}

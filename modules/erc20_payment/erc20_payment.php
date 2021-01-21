<?php


use PrestaShop\PrestaShop\Core\Payment\PaymentOption;

if (!defined('_PS_VERSION_')) {
    exit;
}

class Erc20_Payment extends PaymentModule
{
    const FLAG_DISPLAY_PAYMENT_INVITE = 'BANK_WIRE_PAYMENT_INVITE';

    protected $_html = '';
    protected $_postErrors = array();

    public $details;
    public $owner;
    public $address;
    public $extra_mail_vars;

    public function __construct()
    {
        $this->name = 'erc20_payment';
        $this->tab = 'payments_gateways';
        $this->version = '2.1.0';
        $this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => _PS_VERSION_);
        $this->author = 'MyDigital';
        $this->controllers = array('payment', 'validation');
        $this->is_eu_compatible = 1;

        $this->currencies = true;
        $this->currencies_mode = 'checkbox';

        $config = Configuration::getMultiple(array('BANK_WIRE_DETAILS', 'BANK_WIRE_OWNER', 'BANK_WIRE_ADDRESS', 'BANK_WIRE_RESERVATION_DAYS'));
        if (!empty($config['BANK_WIRE_OWNER'])) {
            $this->owner = $config['BANK_WIRE_OWNER'];
        }
        if (!empty($config['BANK_WIRE_DETAILS'])) {
            $this->details = $config['BANK_WIRE_DETAILS'];
        }
        if (!empty($config['BANK_WIRE_ADDRESS'])) {
            $this->address = $config['BANK_WIRE_ADDRESS'];
        }
        if (!empty($config['BANK_WIRE_RESERVATION_DAYS'])) {
            $this->reservation_days = $config['BANK_WIRE_RESERVATION_DAYS'];
        }

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->trans('crypto token payment', array(), 'Modules.Erc20payment.Admin');
        $this->description = $this->trans('Accept payments via ERC-20 tokens.', array(), 'Modules.Erc20payment.Admin');
        $this->confirmUninstall = $this->trans('Are you sure about removing these details?', array(), 'Modules.Erc20payment.Admin');
        if (!isset($this->owner) || !isset($this->details) || !isset($this->address)) {
            $this->warning = $this->trans('Account owner and account details must be configured before using this module.', array(), 'Modules.Erc20payment.Admin');
        }
        if (!count(Currency::checkPaymentCurrencies($this->id))) {
            $this->warning = $this->trans('No currency has been set for this module.', array(), 'Modules.Erc20payment.Admin');
        }

        $this->extra_mail_vars = array(
                                        '{bankwire_owner}' => Configuration::get('BANK_WIRE_OWNER'),
                                        '{bankwire_details}' => nl2br(Configuration::get('BANK_WIRE_DETAILS')),
                                        '{bankwire_address}' => nl2br(Configuration::get('BANK_WIRE_ADDRESS')),
                                        );
    }

    public function install()
    {
        Configuration::updateValue(self::FLAG_DISPLAY_PAYMENT_INVITE, true);
        if (!parent::install() || !$this->registerHook('paymentReturn') || !$this->registerHook('paymentOptions')) {
            return false;
        }
        return true;
    }

    public function uninstall()
    {
        $languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            if (!Configuration::deleteByName('BANK_WIRE_CUSTOM_TEXT', $lang['id_lang'])) {
                return false;
            }
        }

        if (!Configuration::deleteByName('BANK_WIRE_DETAILS')
                || !Configuration::deleteByName('BANK_WIRE_OWNER')
                || !Configuration::deleteByName('BANK_WIRE_ADDRESS')
                || !Configuration::deleteByName('BANK_WIRE_RESERVATION_DAYS')
                || !Configuration::deleteByName(self::FLAG_DISPLAY_PAYMENT_INVITE)
                || !parent::uninstall()) {
            return false;
        }
        return true;
    }

    protected function _postValidation()
    {
        if (Tools::isSubmit('btnSubmit')) {
            Configuration::updateValue(self::FLAG_DISPLAY_PAYMENT_INVITE,
                Tools::getValue(self::FLAG_DISPLAY_PAYMENT_INVITE));

            if (!Tools::getValue('BANK_WIRE_DETAILS')) {
                $this->_postErrors[] = $this->trans('Account details are required.', array(), 'Modules.Erc20payment.Admin');
            } elseif (!Tools::getValue('BANK_WIRE_OWNER')) {
                $this->_postErrors[] = $this->trans('Account owner is required.', array(), "Modules.Erc20payment.Admin");
            }
        }
    }

    protected function _postProcess()
    {
        if (Tools::isSubmit('btnSubmit')) {
            Configuration::updateValue('BANK_WIRE_DETAILS', Tools::getValue('BANK_WIRE_DETAILS'));
            Configuration::updateValue('BANK_WIRE_OWNER', Tools::getValue('BANK_WIRE_OWNER'));
            Configuration::updateValue('BANK_WIRE_ADDRESS', Tools::getValue('BANK_WIRE_ADDRESS'));

            $custom_text = array();
            $languages = Language::getLanguages(false);
            foreach ($languages as $lang) {
                if (Tools::getIsset('BANK_WIRE_CUSTOM_TEXT_'.$lang['id_lang'])) {
                    $custom_text[$lang['id_lang']] = Tools::getValue('BANK_WIRE_CUSTOM_TEXT_'.$lang['id_lang']);
                }
            }
            Configuration::updateValue('BANK_WIRE_RESERVATION_DAYS', Tools::getValue('BANK_WIRE_RESERVATION_DAYS'));
            Configuration::updateValue('BANK_WIRE_CUSTOM_TEXT', $custom_text);
        }
        $this->_html .= $this->displayConfirmation($this->trans('Settings updated', array(), 'Admin.Global'));
    }

    protected function _displayBankWire()
    {
        return $this->display(__FILE__, 'infos.tpl');
    }

    public function getContent()
    {
        if (Tools::isSubmit('btnSubmit')) {
            $this->_postValidation();
            if (!count($this->_postErrors)) {
                $this->_postProcess();
            } else {
                foreach ($this->_postErrors as $err) {
                    $this->_html .= $this->displayError($err);
                }
            }
        } else {
            $this->_html .= '<br />';
        }

        $this->_html .= $this->_displayBankWire();
        $this->_html .= $this->renderForm();

        return $this->_html;
    }

    public function hookPaymentOptions($params)
    {
        if (!$this->active) {
            return [];
        }

        if (!$this->checkCurrency($params['cart'])) {
            return [];
        }

        $this->smarty->assign(
            $this->getTemplateVarInfos()
        );

        $newOption = new PaymentOption();
        $newOption->setModuleName($this->name)
                ->setCallToActionText($this->trans('Pay with crypto tokens', array(), 'Modules.Erc20payment.Shop'))
                ->setAction($this->context->link->getModuleLink($this->name, 'validation', array(), true))
                ->setAdditionalInformation($this->fetch('module:erc20_payment/views/templates/hook/erc20_payment_intro.tpl'));
        $payment_options = [
            $newOption,
        ];

        return $payment_options;
    }

    public function hookPaymentReturn($params)
    {
        if (!$this->active || !Configuration::get(self::FLAG_DISPLAY_PAYMENT_INVITE)) {
            return;
        }

        $state = $params['order']->getCurrentState();
        if (
            in_array(
                $state,
                array(
                    Configuration::get('PS_OS_BANKWIRE'),
                    Configuration::get('PS_OS_OUTOFSTOCK'),
                    Configuration::get('PS_OS_OUTOFSTOCK_UNPAID'),
                )
        )) {
            $orderId = $params['order']->id;

			$wallet = $this->generatePaymentWallet($orderId);
			$this->createPaymentWalletWebHook($wallet);

            $totalToPaid = $params['order']->getOrdersTotalPaid() - $params['order']->getTotalPaid();
            $this->smarty->assign(array(
                'shop_name' => $this->context->shop->name,
                'total' => Tools::displayPrice(
                    $totalToPaid,
                    new Currency($params['order']->id_currency),
                    false
                ),
                'amount_erc20' => ($totalToPaid / 0.16).' PCH',
                'wallet' => $wallet,
                'status' => 'ok',
                'reference' => $params['order']->reference,
                'contact_url' => $this->context->link->getPageLink('contact', true)
            ));
        } else {
            $this->smarty->assign(
                array(
                    'status' => 'failed',
                    'contact_url' => $this->context->link->getPageLink('contact', true),
                )
            );
        }

        return $this->fetch('module:erc20_payment/views/templates/hook/payment_return.tpl');
    }

    public function checkCurrency($cart)
    {
        $currency_order = new Currency($cart->id_currency);
        $currencies_module = $this->getCurrency($cart->id_currency);

        if (is_array($currencies_module)) {
            foreach ($currencies_module as $currency_module) {
                if ($currency_order->id == $currency_module['id_currency']) {
                    return true;
                }
            }
        }
        return false;
    }

    public function renderForm()
    {
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->trans('Account details', array(), 'Modules.Erc20payment.Admin'),
                    'icon' => 'icon-envelope'
                ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'label' => $this->trans('Account owner', array(), 'Modules.Erc20payment.Admin'),
                        'name' => 'BANK_WIRE_OWNER',
                        'required' => true
                    ),
                    array(
                        'type' => 'textarea',
                        'label' => $this->trans('Account details', array(), 'Modules.Erc20payment.Admin'),
                        'name' => 'BANK_WIRE_DETAILS',
                        'desc' => $this->trans('Such as bank branch, IBAN number, BIC, etc.', array(), 'Modules.Erc20payment.Admin'),
                        'required' => true
                    ),
                    array(
                        'type' => 'textarea',
                        'label' => $this->trans('Bank address', array(), 'Modules.Erc20payment.Admin'),
                        'name' => 'BANK_WIRE_ADDRESS',
                        'required' => true
                    ),
                ),
                'submit' => array(
                    'title' => $this->trans('Save', array(), 'Admin.Actions'),
                )
            ),
        );
        $fields_form_customization = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->trans('Customization', array(), 'Modules.Erc20payment.Admin'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'label' => $this->trans('Reservation period', array(), 'Modules.Erc20payment.Admin'),
                        'desc' => $this->trans('Number of days the items remain reserved', array(), 'Modules.Erc20payment.Admin'),
                        'name' => 'BANK_WIRE_RESERVATION_DAYS',
                    ),
                    array(
                        'type' => 'textarea',
                        'label' => $this->trans('Information to the customer', array(), 'Modules.Erc20payment.Admin'),
                        'name' => 'BANK_WIRE_CUSTOM_TEXT',
                        'desc' => $this->trans('Information on the bank transfer (processing time, starting of the shipping...)', array(), 'Modules.Erc20payment.Admin'),
                        'lang' => true
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->trans('Display the invitation to pay in the order confirmation page', array(), 'Modules.Erc20payment.Admin'),
                        'name' => self::FLAG_DISPLAY_PAYMENT_INVITE,
                        'is_bool' => true,
                        'hint' => $this->trans('Your country\'s legislation may require you to send the invitation to pay by email only. Disabling the option will hide the invitation on the confirmation page.', array(), 'Modules.Erc20payment.Admin'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->trans('Enabled', array(), 'Admin.Global'),
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->trans('Disabled', array(), 'Admin.Global'),
                            )
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->trans('Save', array(), 'Admin.Actions'),
                )
            ),
        );

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? : 0;
        $this->fields_form = array();
        $helper->id = (int)Tools::getValue('id_carrier');
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'btnSubmit';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='
            .$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );

        return $helper->generateForm(array($fields_form, $fields_form_customization));
    }

    public function getConfigFieldsValues()
    {
        $custom_text = array();
        $languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            $custom_text[$lang['id_lang']] = Tools::getValue(
                'BANK_WIRE_CUSTOM_TEXT_'.$lang['id_lang'],
                Configuration::get('BANK_WIRE_CUSTOM_TEXT', $lang['id_lang'])
            );
        }

        return array(
            'BANK_WIRE_DETAILS' => Tools::getValue('BANK_WIRE_DETAILS', Configuration::get('BANK_WIRE_DETAILS')),
            'BANK_WIRE_OWNER' => Tools::getValue('BANK_WIRE_OWNER', Configuration::get('BANK_WIRE_OWNER')),
            'BANK_WIRE_ADDRESS' => Tools::getValue('BANK_WIRE_ADDRESS', Configuration::get('BANK_WIRE_ADDRESS')),
            'BANK_WIRE_RESERVATION_DAYS' => Tools::getValue('BANK_WIRE_RESERVATION_DAYS', Configuration::get('BANK_WIRE_RESERVATION_DAYS')),
            'BANK_WIRE_CUSTOM_TEXT' => $custom_text,
            self::FLAG_DISPLAY_PAYMENT_INVITE => Tools::getValue(self::FLAG_DISPLAY_PAYMENT_INVITE,
                Configuration::get(self::FLAG_DISPLAY_PAYMENT_INVITE))
        );
    }

    public function getTemplateVarInfos()
    {
        $cart = $this->context->cart;
        $total = sprintf(
            $this->trans('%1$s (tax incl.)', array(), 'Modules.Erc20payment.Shop'),
            Tools::displayPrice($cart->getOrderTotal(true, Cart::BOTH))
        );

         $bankwireOwner = $this->owner;
        if (!$bankwireOwner) {
            $bankwireOwner = '___________';
        }

        $bankwireDetails = Tools::nl2br($this->details);
        if (!$bankwireDetails) {
            $bankwireDetails = '___________';
        }

        $bankwireAddress = Tools::nl2br($this->address);
        if (!$bankwireAddress) {
            $bankwireAddress = '___________';
        }

        $bankwireReservationDays = Configuration::get('BANK_WIRE_RESERVATION_DAYS');
        if (false === $bankwireReservationDays) {
            $bankwireReservationDays = 7;
        }

        $bankwireCustomText = Tools::nl2br(Configuration::get('BANK_WIRE_CUSTOM_TEXT', $this->context->language->id));
        if (false === $bankwireCustomText) {
            $bankwireCustomText = '';
        }

        return array(
            'total' => $total,
            'bankwireDetails' => $bankwireDetails,
            'bankwireAddress' => $bankwireAddress,
            'bankwireOwner' => $bankwireOwner,
            'bankwireReservationDays' => (int)$bankwireReservationDays,
            'bankwireCustomText' => $bankwireCustomText,
        );
    }

    public function generatePaymentWallet($orderId) {
		$postfields = array (
				 'token' => '9216e5ed002b4e83a3e8bb54cfd17daf'
				 );

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://api.blockcypher.com/v1/eth/main/addrs');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
		$new_wallet = json_decode((curl_exec($ch)), true);

        $this->savePaymentWallet($orderId, $new_wallet['private'], $new_wallet['public'], $new_wallet['address']);

		return $new_wallet['address'];
	}

    public function createPaymentWalletWebHook($address) {
		$postfields = array (

				 'event' => 'confirmed-tx',
				 'address' => $address,
				 'url' => 'https://test.etpshopping.com/index.php?fc=module&module=erc20_payment&controller=erc20payment&erc20_payment_wallet='.$address
				 );

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://api.blockcypher.com/v1/eth/main/hooks?token=9216e5ed002b4e83a3e8bb54cfd17daf');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postfields));
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
		$new_web_hook = json_decode((curl_exec($ch)), true);
	}

    public function savePaymentWallet($orderId, $private, $public, $address) {
        Db::getInstance()->insert('erc20_payment', array(
        	'order_id'  => pSQL($orderId),
            'private'		   => pSQL($private),
            'public'           => pSQL($public),
            'address'		   => pSQL($address)
        ));
    }


}

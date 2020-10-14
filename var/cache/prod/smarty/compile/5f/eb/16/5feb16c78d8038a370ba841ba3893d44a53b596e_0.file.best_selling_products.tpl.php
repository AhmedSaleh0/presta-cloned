<?php
/* Smarty version 3.1.33, created on 2020-10-14 16:19:41
  from '/opt/bitnami/apache/htdocs/modules/ets_marketplace/views/templates/hook/dashboard/best_selling_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8708fd9f8de8_18286093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5feb16c78d8038a370ba841ba3893d44a53b596e' => 
    array (
      0 => '/opt/bitnami/apache/htdocs/modules/ets_marketplace/views/templates/hook/dashboard/best_selling_products.tpl',
      1 => 1602685098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8708fd9f8de8_18286093 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table">
    <thead>
        <tr>
            <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
            <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product name','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
            <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
            <th class="text-center"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sold quantity','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Seller name','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
            <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Added date','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Action','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                <tr>
                    <td class="text-center"><?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</td>
                    <td class="text-center"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['price'],'html','UTF-8' ));?>
</td>
                    <td class="text-center"><?php echo intval($_smarty_tpl->tpl_vars['product']->value['quantity_sale']);?>
</td>
                    <td class="seller_name">
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['id_customer_seller']) {?>
                            <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->getLinkCustomerAdmin($_smarty_tpl->tpl_vars['product']->value['id_customer_seller']),'html','UTF-8' ));?>
&viewseller=1&id_seller=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_seller']);?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['seller_name'],'html','UTF-8' ));?>
</a>
                        <?php } else { ?>
                            <span class="row_deleted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Seller deleted','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                        <?php }?>
                    </td> 
                    <td class="text-center">
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['active']) {?>
                            <i class="fa fa-check" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
"></i>
                        <?php } else { ?>
                            <i class="fa fa-remove" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disabled','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
"></i>
                        <?php }?> 
                    </td>
                    <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['product']->value['date_add'],'full'=>1),$_smarty_tpl ) );?>
</td>
                    <td>
                        <a class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['link'],'html','UTF-8' ));?>
">
                            <i class="icon-search-plus fa fa-search-plus"></i>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                        </a>
                    </td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php } else { ?>
        <tr>
            <td colspan="100%" class="text-center no_data"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No data','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</td>
        </tr>
        <?php }?>
    </tbody>
</table><?php }
}

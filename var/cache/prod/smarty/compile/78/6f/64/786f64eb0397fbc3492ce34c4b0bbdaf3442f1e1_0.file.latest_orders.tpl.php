<?php
/* Smarty version 3.1.33, created on 2020-10-14 16:19:41
  from '/opt/bitnami/apache/htdocs/modules/ets_marketplace/views/templates/hook/dashboard/latest_orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8708fd8ad243_39341275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '786f64eb0397fbc3492ce34c4b0bbdaf3442f1e1' => 
    array (
      0 => '/opt/bitnami/apache/htdocs/modules/ets_marketplace/views/templates/hook/dashboard/latest_orders.tpl',
      1 => 1602685098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8708fd8ad243_39341275 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table">
    <thead>
        <tr>
            <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order reference','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
            <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total price (tax incl)','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Seller name','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop name','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
            <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Seller commissions','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
            <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Admin earned','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
            <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
            <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
            <th class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Action','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
        </tr>
    </thead>
    <tbody>
    <?php if ($_smarty_tpl->tpl_vars['latest_orders']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latest_orders']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
            <tr>
                <td class="text-center"><?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
</td>
                <td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['reference'],'html','UTF-8' ));?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['order']->value['customer_name'];?>
</td>
                <td class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value['total_paid_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['order']->value['id_currency']),$_smarty_tpl ) );?>
</td>
                <td class="seller_name">
                    <?php if ($_smarty_tpl->tpl_vars['order']->value['id_customer_seller']) {?>
                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->getLinkCustomerAdmin($_smarty_tpl->tpl_vars['order']->value['id_customer_seller']),'html','UTF-8' ));?>
&viewseller=1&id_seller=<?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_seller']);?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['seller_name'],'html','UTF-8' ));?>
</a>
                    <?php } else { ?>
                        <span class="row_deleted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Seller deleted','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                    <?php }?>
                </td>
                <td class="shop_name">
                    <?php if ($_smarty_tpl->tpl_vars['order']->value['id_seller']) {?>
                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->getShopLink(array('id_seller'=>$_smarty_tpl->tpl_vars['order']->value['id_seller'])),'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['shop_name'],'html','UTF-8' ));?>
</a>
                    <?php } else { ?>
                        <span class="deleted_shop row_deleted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop deleted','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                    <?php }?>
                </td>
                <td class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value['total_commission']),$_smarty_tpl ) );?>
</td>
                <td class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value['admin_earned']),$_smarty_tpl ) );?>
</td>
                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['order']->value['current_state'];?>
</td>
                <td class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['order']->value['date_add'],'full'=>1),$_smarty_tpl ) );?>
</td>
                <td class="text-right">
                    <a class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders'),'html','UTF-8' ));?>
&id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
&vieworder">
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

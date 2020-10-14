<?php
/* Smarty version 3.1.33, created on 2020-10-14 16:19:41
  from '/opt/bitnami/apache/htdocs/modules/ets_marketplace/views/templates/hook/dashboard/latest_seller_commissions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8708fd8e4409_60250934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46ba9bb35fafe5e610d6bb054318e4acc294dbb9' => 
    array (
      0 => '/opt/bitnami/apache/htdocs/modules/ets_marketplace/views/templates/hook/dashboard/latest_seller_commissions.tpl',
      1 => 1602685098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8708fd8e4409_60250934 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table">
<thead>
    <tr>
        <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Seller name','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>    
        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop name','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
        <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order ID','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product name','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
        <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product price','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
        <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product quantity','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
        <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Commission','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Action','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
    </tr>
</thead>
<tbody>
    <?php if ($_smarty_tpl->tpl_vars['latest_seller_commissions']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latest_seller_commissions']->value, 'commission');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['commission']->value) {
?>
            <tr>
                <td class="text-center"> <?php echo intval($_smarty_tpl->tpl_vars['commission']->value['id_seller_commission']);?>
</td>
                <td class="seller_name">
                    <?php if ($_smarty_tpl->tpl_vars['commission']->value['id_customer_seller']) {?>
                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->getLinkCustomerAdmin($_smarty_tpl->tpl_vars['commission']->value['id_customer_seller']),'html','UTF-8' ));?>
&viewseller=1&id_seller=<?php echo intval($_smarty_tpl->tpl_vars['commission']->value['id_seller']);?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['commission']->value['seller_name'],'html','UTF-8' ));?>
</a>
                    <?php } else { ?>
                        <span class="row_deleted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Seller deleted','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                    <?php }?>
                </td>
                <td class="shop_name">
                    <?php if ($_smarty_tpl->tpl_vars['commission']->value['id_seller']) {?>
                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->getShopLink(array('id_seller'=>$_smarty_tpl->tpl_vars['commission']->value['id_seller'])),'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['commission']->value['shop_name'],'html','UTF-8' ));?>
</a>
                    <?php } else { ?>
                        <span class="deleted_shop row_deleted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop deleted','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                    <?php }?>
                </td>
                <td class="text-center"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['commission']->value['id_order'],'html','UTF-8' ));?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['commission']->value['product_name'];?>
</td>
                <td class="text-center"><?php if ($_smarty_tpl->tpl_vars['commission']->value['price_tax_incl'] != 0) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['commission']->value['price_tax_incl']),$_smarty_tpl ) );
}?></td>
                <td class="text-center"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['commission']->value['quantity'],'html','UTF-8' ));?>
</td>
                <td class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['commission']->value['commission']),$_smarty_tpl ) );?>
</td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['commission']->value['status'] == -1) {?>
                        <span class="ets_mp_status pending"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pending','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['commission']->value['status'] == 0) {?>
                        <span class="ets_mp_status canceled"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Canceled','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['commission']->value['status'] == 1) {?>
                        <span class="ets_mp_status approved"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Approved','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                    <?php }?>
                </td>
                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['commission']->value['date_add'],'full'=>1),$_smarty_tpl ) );?>
</td>
                <td>
                    <a class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminMarketPlaceSellers'),'html','UTF-8' ));?>
&viewseller=1&id_seller=<?php echo intval($_smarty_tpl->tpl_vars['commission']->value['id_seller']);?>
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
            <td colspan="100%" class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No data','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</td>
        </tr>
    <?php }?>
</tbody>
</table><?php }
}

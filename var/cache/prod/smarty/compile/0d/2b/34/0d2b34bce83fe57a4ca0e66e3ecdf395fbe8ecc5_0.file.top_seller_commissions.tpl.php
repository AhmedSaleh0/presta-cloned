<?php
/* Smarty version 3.1.33, created on 2020-10-14 16:19:41
  from '/opt/bitnami/apache/htdocs/modules/ets_marketplace/views/templates/hook/dashboard/top_seller_commissions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8708fda3eab4_51986780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d2b34bce83fe57a4ca0e66e3ecdf395fbe8ecc5' => 
    array (
      0 => '/opt/bitnami/apache/htdocs/modules/ets_marketplace/views/templates/hook/dashboard/top_seller_commissions.tpl',
      1 => 1602685098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8708fda3eab4_51986780 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table">
    <thead>
        <tr>
            <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Seller name','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Seller email','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop name','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop description','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
            <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total commission','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Action','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($_smarty_tpl->tpl_vars['sellers']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sellers']->value, 'seller');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['seller']->value) {
?>
                <tr>
                    <td class="text-center"><?php echo intval($_smarty_tpl->tpl_vars['seller']->value['id_seller']);?>
</td>
                    <td><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminMarketPlaceSellers'),'html','UTF-8' ));?>
&viewseller=1&id_seller=<?php echo intval($_smarty_tpl->tpl_vars['seller']->value['id_seller']);?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['seller']->value['seller_name'],'html','UTF-8' ));?>
</a></td>
                    <td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['seller']->value['seller_email'],'html','UTF-8' ));?>
</td>
                    <td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['seller']->value['shop_name'],'html','UTF-8' ));?>
</td>
                    <td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags($_smarty_tpl->tpl_vars['seller']->value['shop_description']),120,'...' )),'html','UTF-8' ));?>
</td>
                    <td class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['seller']->value['total_commission'])),$_smarty_tpl ) );?>
</td>
                    <td>
                        <a class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminMarketPlaceSellers'),'html','UTF-8' ));?>
&viewseller=1&id_seller=<?php echo intval($_smarty_tpl->tpl_vars['seller']->value['id_seller']);?>
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

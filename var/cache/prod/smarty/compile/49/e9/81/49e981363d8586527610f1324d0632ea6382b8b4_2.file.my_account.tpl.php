<?php
/* Smarty version 3.1.33, created on 2020-10-14 16:25:34
  from '/opt/bitnami/apache/htdocs/modules/ets_marketplace/views/templates/hook/my_account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f870a5e417aa5_08229703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49e981363d8586527610f1324d0632ea6382b8b4' => 
    array (
      0 => '/opt/bitnami/apache/htdocs/modules/ets_marketplace/views/templates/hook/my_account.tpl',
      1 => 1602685098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f870a5e417aa5_08229703 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['require_registration']->value || ($_smarty_tpl->tpl_vars['registration']->value && $_smarty_tpl->tpl_vars['registration']->value->active == 1) || $_smarty_tpl->tpl_vars['seller']->value) {?> 
    <li class="ets_ws_accountlink col-lg-4 col-md-6 col-sm-6 col-xs-12">
    	<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('ets_marketplace','myseller'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            <span class="link-item">
                <?php if ($_smarty_tpl->tpl_vars['seller']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My seller account','mod'=>'ets_marketplace'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My seller account','mod'=>'ets_marketplace'),$_smarty_tpl ) );
}?>
            </span>
    	</a>
    </li>
<?php } else { ?>
    <li class="ets_ws_accountlink col-lg-4 col-md-6 col-sm-6 col-xs-12">
    	<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('ets_marketplace','registration'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" >
            <span class="link-item">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Become a Seller','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

            </span>
    	</a>
    </li>
<?php }
}
}

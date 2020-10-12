<?php
/* Smarty version 3.1.33, created on 2020-10-09 16:31:22
  from '/opt/bitnami/apache/htdocs/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f80743a486132_64342375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c65baca96db8fb91bda1fc85dfd1360f99b4fa29' => 
    array (
      0 => '/opt/bitnami/apache/htdocs/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1602250846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f80743a486132_64342375 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}

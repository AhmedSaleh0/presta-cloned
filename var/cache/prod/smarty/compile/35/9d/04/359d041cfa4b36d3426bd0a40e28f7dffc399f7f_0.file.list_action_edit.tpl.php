<?php
/* Smarty version 3.1.33, created on 2020-10-12 17:11:46
  from '/opt/bitnami/apache/htdocs/admin178i9wzcy/themes/default/template/helpers/list/list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f84723208b4d1_62979770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '359d041cfa4b36d3426bd0a40e28f7dffc399f7f' => 
    array (
      0 => '/opt/bitnami/apache/htdocs/admin178i9wzcy/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1602250852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f84723208b4d1_62979770 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}

<?php
/* Smarty version 3.1.33, created on 2020-10-09 15:53:08
  from '/opt/bitnami/apache/htdocs/admin178i9wzcy/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f806b44687392_88087717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5964ab9b2f731f8125b146756eee0ec92414356' => 
    array (
      0 => '/opt/bitnami/apache/htdocs/admin178i9wzcy/themes/default/template/content.tpl',
      1 => 1602250852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f806b44687392_88087717 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}

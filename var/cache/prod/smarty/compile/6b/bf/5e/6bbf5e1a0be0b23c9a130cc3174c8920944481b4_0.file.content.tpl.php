<?php
/* Smarty version 3.1.33, created on 2020-10-14 16:20:20
  from '/opt/bitnami/apache/htdocs/admin178i9wzcy/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8709243129c4_96576063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bbf5e1a0be0b23c9a130cc3174c8920944481b4' => 
    array (
      0 => '/opt/bitnami/apache/htdocs/admin178i9wzcy/themes/new-theme/template/content.tpl',
      1 => 1602250852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8709243129c4_96576063 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}

<?php
/* Smarty version 3.1.33, created on 2020-10-09 15:53:56
  from '/opt/bitnami/apache/htdocs/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f806b74e06247_95932635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d3cc36f5c5745eb6ef6a74f46e586de50670afb' => 
    array (
      0 => '/opt/bitnami/apache/htdocs/themes/classic/templates/index.tpl',
      1 => 1602250846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f806b74e06247_95932635 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12748553935f806b74dffc92_49347122', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_5253077845f806b74e00727_22973215 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_228212615f806b74e020e7_41021617 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_6078693745f806b74e01677_60905988 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_228212615f806b74e020e7_41021617', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_12748553935f806b74dffc92_49347122 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_12748553935f806b74dffc92_49347122',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_5253077845f806b74e00727_22973215',
  ),
  'page_content' => 
  array (
    0 => 'Block_6078693745f806b74e01677_60905988',
  ),
  'hook_home' => 
  array (
    0 => 'Block_228212615f806b74e020e7_41021617',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5253077845f806b74e00727_22973215', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6078693745f806b74e01677_60905988', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}

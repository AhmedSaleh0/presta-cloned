<?php
/* Smarty version 3.1.33, created on 2020-10-10 19:26:21
  from '/opt/bitnami/apache/htdocs/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f81eebde87c92_66445322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96e66612fb15fc9d68fb11da43f9e916020249dd' => 
    array (
      0 => '/opt/bitnami/apache/htdocs/themes/classic/templates/page.tpl',
      1 => 1602250846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f81eebde87c92_66445322 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15950867695f81eebde7d7d3_26227513', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_14383209025f81eebde7ef10_64014793 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_13614775105f81eebde7e128_91597757 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14383209025f81eebde7ef10_64014793', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_9085644275f81eebde83570_86500824 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_3835740665f81eebde845d2_84623558 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_9997838975f81eebde82c34_73681018 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9085644275f81eebde83570_86500824', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3835740665f81eebde845d2_84623558', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_16671244125f81eebde86518_89459631 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_5491396205f81eebde85c39_61096618 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16671244125f81eebde86518_89459631', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_15950867695f81eebde7d7d3_26227513 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15950867695f81eebde7d7d3_26227513',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_13614775105f81eebde7e128_91597757',
  ),
  'page_title' => 
  array (
    0 => 'Block_14383209025f81eebde7ef10_64014793',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_9997838975f81eebde82c34_73681018',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_9085644275f81eebde83570_86500824',
  ),
  'page_content' => 
  array (
    0 => 'Block_3835740665f81eebde845d2_84623558',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_5491396205f81eebde85c39_61096618',
  ),
  'page_footer' => 
  array (
    0 => 'Block_16671244125f81eebde86518_89459631',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13614775105f81eebde7e128_91597757', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9997838975f81eebde82c34_73681018', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5491396205f81eebde85c39_61096618', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}

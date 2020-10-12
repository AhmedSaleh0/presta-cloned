<?php
/* Smarty version 3.1.33, created on 2020-10-09 15:51:46
  from '/opt/bitnami/apache/htdocs/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f806af2b8ba61_63433853',
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
function content_5f806af2b8ba61_63433853 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_355853595f806af2b81732_28034058', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_20222430575f806af2b82e00_40156598 extends Smarty_Internal_Block
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
class Block_4315472925f806af2b82185_41052035 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20222430575f806af2b82e00_40156598', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_7597436785f806af2b87934_82122422 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_9311123035f806af2b885e8_45826711 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_14303375385f806af2b86fc0_80898581 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7597436785f806af2b87934_82122422', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9311123035f806af2b885e8_45826711', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_4777681175f806af2b8a2d5_80805933 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_15616345545f806af2b89a17_79722300 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4777681175f806af2b8a2d5_80805933', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_355853595f806af2b81732_28034058 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_355853595f806af2b81732_28034058',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_4315472925f806af2b82185_41052035',
  ),
  'page_title' => 
  array (
    0 => 'Block_20222430575f806af2b82e00_40156598',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_14303375385f806af2b86fc0_80898581',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_7597436785f806af2b87934_82122422',
  ),
  'page_content' => 
  array (
    0 => 'Block_9311123035f806af2b885e8_45826711',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_15616345545f806af2b89a17_79722300',
  ),
  'page_footer' => 
  array (
    0 => 'Block_4777681175f806af2b8a2d5_80805933',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4315472925f806af2b82185_41052035', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14303375385f806af2b86fc0_80898581', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15616345545f806af2b89a17_79722300', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}

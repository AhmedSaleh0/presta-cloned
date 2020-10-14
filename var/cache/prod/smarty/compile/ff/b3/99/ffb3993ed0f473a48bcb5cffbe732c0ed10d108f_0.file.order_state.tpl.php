<?php
/* Smarty version 3.1.33, created on 2020-10-14 16:21:05
  from '/opt/bitnami/apache/htdocs/modules/ets_marketplace/views/templates/hook/order_state.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f870951bb7163_92488938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffb3993ed0f473a48bcb5cffbe732c0ed10d108f' => 
    array (
      0 => '/opt/bitnami/apache/htdocs/modules/ets_marketplace/views/templates/hook/order_state.tpl',
      1 => 1602685098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f870951bb7163_92488938 (Smarty_Internal_Template $_smarty_tpl) {
?><span class="label label-pill bright" style="background-color:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['orderState']->value['color'],'html','UTF-8' ));?>
 ;color:<?php if (Tools::getBrightness($_smarty_tpl->tpl_vars['orderState']->value['color']) < 128) {?>white<?php } else { ?>#383838<?php }?>"> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['orderState']->value['name'],'html','UTF-8' ));?>
 </span><?php }
}

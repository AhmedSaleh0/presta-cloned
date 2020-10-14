<?php
/* Smarty version 3.1.33, created on 2020-10-14 16:19:41
  from '/opt/bitnami/apache/htdocs/modules/ets_marketplace/views/templates/hook/sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8708fd2c3148_52610649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70e9c3bcfc06d4569d32b9a6f5bb15b00c339689' => 
    array (
      0 => '/opt/bitnami/apache/htdocs/modules/ets_marketplace/views/templates/hook/sidebar.tpl',
      1 => 1602685098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8708fd2c3148_52610649 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="etsmp-left-panel etsmp-sidebar-menu col-lg-12">
    <div class="list-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sidebars']->value, 'sidebar', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['sidebar']->value) {
?>
            <div class="list-tab<?php if (isset($_smarty_tpl->tpl_vars['sidebar']->value['subs']) && $_smarty_tpl->tpl_vars['sidebar']->value['subs']) {?> has_sub<?php }?>" id="tab-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sidebar']->value['controller'],'html','UTF-8' ));?>
">
                <a class="list-group-item<?php if ($_smarty_tpl->tpl_vars['control']->value == $_smarty_tpl->tpl_vars['key']->value || (isset($_smarty_tpl->tpl_vars['sidebar']->value['controller']) && ($_smarty_tpl->tpl_vars['sidebar']->value['controller'] == $_smarty_tpl->tpl_vars['controller']->value || (isset($_smarty_tpl->tpl_vars['sidebar']->value['subs']) && isset($_smarty_tpl->tpl_vars['sidebar']->value['subs'][$_smarty_tpl->tpl_vars['controller']->value]))))) {?> active<?php }?>" href="<?php if (isset($_smarty_tpl->tpl_vars['sidebar']->value['controller']) && $_smarty_tpl->tpl_vars['sidebar']->value['controller']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink($_smarty_tpl->tpl_vars['sidebar']->value['controller']),'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mp_link_module']->value,'html','UTF-8' ));?>
&control=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));
}?>">
                    <i class="icon-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
"></i>
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sidebar']->value['title'],'html','UTF-8' ));?>

                </a>
                <?php if (isset($_smarty_tpl->tpl_vars['sidebar']->value['subs']) && $_smarty_tpl->tpl_vars['sidebar']->value['subs']) {?>
                    <div class="list-tab-subs">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sidebar']->value['subs'], 'sub');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->value) {
?>
                            <a class="list-group-item<?php if ($_smarty_tpl->tpl_vars['controller']->value == $_smarty_tpl->tpl_vars['sub']->value['icon'] || (isset($_smarty_tpl->tpl_vars['sub']->value['controller']) && $_smarty_tpl->tpl_vars['sub']->value['controller'] == $_smarty_tpl->tpl_vars['controller']->value)) {?> active<?php }?>" href="<?php if (isset($_smarty_tpl->tpl_vars['sub']->value['controller']) && $_smarty_tpl->tpl_vars['sub']->value['controller']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink($_smarty_tpl->tpl_vars['sub']->value['controller']),'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mp_link_module']->value,'html','UTF-8' ));?>
&control=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub']->value['icon'],'html','UTF-8' ));
}?>">
                                <i class="icon-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub']->value['icon'],'html','UTF-8' ));?>
"></i>
                                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub']->value['title'],'html','UTF-8' ));?>

                            </a>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php }?>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<div class="etsmp-sidebar-height"></div><?php }
}

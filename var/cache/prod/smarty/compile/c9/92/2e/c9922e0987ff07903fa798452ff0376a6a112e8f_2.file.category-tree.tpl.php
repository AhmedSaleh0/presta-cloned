<?php
/* Smarty version 3.1.33, created on 2020-10-14 16:25:33
  from '/opt/bitnami/apache/htdocs/modules/ets_marketplace/views/templates/hook/category-tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f870a5dd8cd62_28876094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9922e0987ff07903fa798452ff0376a6a112e8f' => 
    array (
      0 => '/opt/bitnami/apache/htdocs/modules/ets_marketplace/views/templates/hook/category-tree.tpl',
      1 => 1602685098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f870a5dd8cd62_28876094 (Smarty_Internal_Template $_smarty_tpl) {
if (!in_array($_smarty_tpl->tpl_vars['node']->value['id_category'],$_smarty_tpl->tpl_vars['disabled_categories']->value)) {?>
<li style="list-style: none;">
    <div class="checkbox <?php if (count($_smarty_tpl->tpl_vars['node']->value['children']) > 0) {?> has-child<?php }?>">
        <span>
            <?php if ($_smarty_tpl->tpl_vars['displayInput']->value) {?>
                <input class="category" name="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
[]" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['node']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
"<?php if (in_array($_smarty_tpl->tpl_vars['node']->value['id_category'],$_smarty_tpl->tpl_vars['selected_categories']->value)) {?> checked="checked"<?php }
if (in_array($_smarty_tpl->tpl_vars['node']->value['id_category'],$_smarty_tpl->tpl_vars['disabled_categories']->value)) {?> disabled="disabled"<?php }?>  type="checkbox" />
            <?php }?>
            <span class="label"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
            <?php if (!$_smarty_tpl->tpl_vars['backend']->value) {?>
                <input class="default-category" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['node']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
" name="id_category_default" type="radio" <?php if ($_smarty_tpl->tpl_vars['node']->value['id_category'] == $_smarty_tpl->tpl_vars['id_category_default']->value) {?> checked="checked"<?php }?> <?php if (in_array($_smarty_tpl->tpl_vars['node']->value['id_category'],$_smarty_tpl->tpl_vars['disabled_categories']->value)) {?> disabled="disabled"<?php }?>/>
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['displayInput']->value) {?>
                (ID: <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['node']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
)
            <?php }?>
        </span>
    </div>
<?php }?>
    <?php if (count($_smarty_tpl->tpl_vars['node']->value['children']) > 0) {?>
        <?php if (!in_array($_smarty_tpl->tpl_vars['node']->value['id_category'],$_smarty_tpl->tpl_vars['disabled_categories']->value)) {?>  
  		    <ul class="children">
        <?php }?>
        		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node']->value['children'], 'child', false, NULL, 'categoryTreeBranch', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_categoryTreeBranch']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_categoryTreeBranch']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_categoryTreeBranch']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_categoryTreeBranch']->value['total'];
?>
                     
        			<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_categoryTreeBranch']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categoryTreeBranch']->value['last'] : null)) {?>
        				<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['branche_tpl_path_input']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0, true);
?>
        			<?php } else { ?>
        				<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['branche_tpl_path_input']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'false'), 0, true);
?>
        			<?php }?>
        		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if (!in_array($_smarty_tpl->tpl_vars['node']->value['id_category'],$_smarty_tpl->tpl_vars['disabled_categories']->value)) {?> 
    		</ul>
        <?php }?>
   	<?php }?> 
<?php if (!in_array($_smarty_tpl->tpl_vars['node']->value['id_category'],$_smarty_tpl->tpl_vars['disabled_categories']->value)) {?>  
</li>
<?php }
}
}

<?php
/* Smarty version 3.1.33, created on 2020-10-14 16:21:05
  from '/opt/bitnami/apache/htdocs/modules/ets_marketplace/views/templates/hook/list_helper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f870951e09b25_28976297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acc79a2c24e8f452fecad80107066c1f8472c947' => 
    array (
      0 => '/opt/bitnami/apache/htdocs/modules/ets_marketplace/views/templates/hook/list_helper.tpl',
      1 => 1602685098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f870951e09b25_28976297 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
var text_update_position='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Successful update','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
>
<div class="panel ets_mp-panel<?php if (isset($_smarty_tpl->tpl_vars['class']->value)) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['class']->value,'html','UTF-8' ));
}?>">
    <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>

        <?php if (isset($_smarty_tpl->tpl_vars['totalRecords']->value) && $_smarty_tpl->tpl_vars['totalRecords']->value > 0) {?><span class="badge"><?php echo intval($_smarty_tpl->tpl_vars['totalRecords']->value);?>
</span><?php }?>
        <span class="panel-heading-action">
            <?php if (isset($_smarty_tpl->tpl_vars['show_add_new']->value) && $_smarty_tpl->tpl_vars['show_add_new']->value) {?>            
                <a class="list-toolbar-btn add_new_link" href="<?php if (isset($_smarty_tpl->tpl_vars['link_new']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link_new']->value,'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));
}?>">
                    <span data-placement="top" data-html="true" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
" class="label-tooltip" data-toggle="tooltip" title="">
        				<i class="process-icon-new"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                    </span>
                </a>            
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['preview_link']->value) && $_smarty_tpl->tpl_vars['preview_link']->value) {?>            
                <a target="_blank" class="list-toolbar-btn" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['preview_link']->value,'html','UTF-8' ));?>
">
                    <span data-placement="top" data-html="true" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview ','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
 (<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value,'html','UTF-8' ));?>
)" class="label-tooltip" data-toggle="tooltip" title="">
        				<i style="margin-left: 5px;" class="icon-search-plus"></i>
                    </span>
                </a>            
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['link_export']->value) && $_smarty_tpl->tpl_vars['link_export']->value) {?>            
                <a  class="list-toolbar-btn" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link_export']->value,'html','UTF-8' ));?>
">
                    <span data-placement="top" data-html="true" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export ','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
 (<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value,'html','UTF-8' ));?>
)" class="label-tooltip" data-toggle="tooltip" title="">
        				<i style="margin-left: 5px;" class="icon icon-import fa fa-import"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                    </span>
                </a>            
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['link_import']->value) && $_smarty_tpl->tpl_vars['link_import']->value) {?>            
                <a class="list-toolbar-btn" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link_import']->value,'html','UTF-8' ));?>
">
                    <span data-placement="top" data-html="true" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import ','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
 (<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value,'html','UTF-8' ));?>
)" class="label-tooltip" data-toggle="tooltip" title="">
        				<i style="margin-left: 5px;" class="icon icon-export fa fa-export"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                    </span>
                </a>            
            <?php }?>
        </span>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['fields_list']->value) {?>
        <div class="table-responsive clearfix">
            <form method="post" action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
">
                <table class="table configuration alltab_ss<?php if (isset($_smarty_tpl->tpl_vars['has_delete_product']->value) && (Configuration::get('ETS_MP_ALLOW_SELLER_CREATE_PRODUCT') || (isset($_smarty_tpl->tpl_vars['has_edit_product']->value) && $_smarty_tpl->tpl_vars['has_edit_product']->value) || $_smarty_tpl->tpl_vars['has_delete_product']->value)) {?> allow_checkbox_product<?php }?> list-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
">
                    <thead>
                        <tr class="nodrag nodrop">
                            <?php $_smarty_tpl->_assignInScope('i', 1);?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_list']->value, 'field', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['field']->value) {
?>
                                <th class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['index']->value,'html','UTF-8' ));
if (isset($_smarty_tpl->tpl_vars['field']->value['class'])) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['class'],'html','UTF-8' ));
}?>" <?php if ($_smarty_tpl->tpl_vars['show_action']->value && !$_smarty_tpl->tpl_vars['actions']->value && count($_smarty_tpl->tpl_vars['fields_list']->value) == $_smarty_tpl->tpl_vars['i']->value) {?>colspan="2"<?php }?>>
                                    <span class="title_box">
                                        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['title'],'html','UTF-8' ));?>

                                        <?php if (isset($_smarty_tpl->tpl_vars['field']->value['sort']) && $_smarty_tpl->tpl_vars['field']->value['sort']) {?>
                                            <span class="soft">
                                            <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&sort=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['index']->value,'html','UTF-8' ));?>
&sort_type=desc<?php echo $_smarty_tpl->tpl_vars['filter_params']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['sort']->value) && $_smarty_tpl->tpl_vars['sort']->value == $_smarty_tpl->tpl_vars['index']->value && isset($_smarty_tpl->tpl_vars['sort_type']->value) && $_smarty_tpl->tpl_vars['sort_type']->value == 'desc') {?> class="active"<?php }?>><i class="icon-caret-down"></i></a>
                                            <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&sort=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['index']->value,'html','UTF-8' ));?>
&sort_type=asc<?php echo $_smarty_tpl->tpl_vars['filter_params']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['sort']->value) && $_smarty_tpl->tpl_vars['sort']->value == $_smarty_tpl->tpl_vars['index']->value && isset($_smarty_tpl->tpl_vars['sort_type']->value) && $_smarty_tpl->tpl_vars['sort_type']->value == 'asc') {?> class="active"<?php }?>><i class="icon-caret-up"></i></a>
                                            </span>
                                         <?php }?>
                                    </span>
                                </th>  
                                <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>                          
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php if ($_smarty_tpl->tpl_vars['show_action']->value && $_smarty_tpl->tpl_vars['actions']->value) {?>
                                <th style="text-align: center;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Action','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
                            <?php }?>
                        </tr>
                        <?php if ($_smarty_tpl->tpl_vars['show_toolbar']->value) {?>
                            <tr class="nodrag nodrop filter row_hover">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_list']->value, 'field', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['field']->value) {
?>
                                    <th class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['index']->value,'html','UTF-8' ));
if (isset($_smarty_tpl->tpl_vars['field']->value['class'])) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['class'],'html','UTF-8' ));
}?>">
                                        <?php if (isset($_smarty_tpl->tpl_vars['field']->value['filter']) && $_smarty_tpl->tpl_vars['field']->value['filter']) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'text') {?>
                                                <input class="filter" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['index']->value,'html','UTF-8' ));?>
" type="text" <?php if (isset($_smarty_tpl->tpl_vars['field']->value['width'])) {?>style="width: <?php echo intval($_smarty_tpl->tpl_vars['field']->value['width']);?>
px;"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['field']->value['active'])) {?>value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['active'],'html','UTF-8' ));?>
"<?php }?>/>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'select' || $_smarty_tpl->tpl_vars['field']->value['type'] == 'active') {?>
                                                <select  <?php if (isset($_smarty_tpl->tpl_vars['field']->value['width'])) {?>style="width: <?php echo intval($_smarty_tpl->tpl_vars['field']->value['width']);?>
px;"<?php }?>  name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['index']->value,'html','UTF-8' ));?>
">
                                                    <option value=""> -- </option>
                                                    <?php if (isset($_smarty_tpl->tpl_vars['field']->value['filter_list']['list']) && $_smarty_tpl->tpl_vars['field']->value['filter_list']['list']) {?>
                                                        <?php $_smarty_tpl->_assignInScope('id_option', $_smarty_tpl->tpl_vars['field']->value['filter_list']['id_option']);?>
                                                        <?php $_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['field']->value['filter_list']['value']);?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['filter_list']['list'], 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?>
                                                            <option <?php if (($_smarty_tpl->tpl_vars['field']->value['active'] !== '' && $_smarty_tpl->tpl_vars['field']->value['active'] == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['id_option']->value]) || ($_smarty_tpl->tpl_vars['field']->value['active'] == '' && $_smarty_tpl->tpl_vars['index']->value == 'has_post' && $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['id_option']->value] == 1)) {?> selected="selected"<?php }?> value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['id_option']->value],'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['value']->value],'html','UTF-8' ));?>
</option>
                                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    <?php }?>
                                                </select>                                            
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'int') {?>
                                                <label for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['index']->value,'html','UTF-8' ));?>
_min"><input type="text" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Min','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['index']->value,'html','UTF-8' ));?>
_min" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['active']['min'],'html','UTF-8' ));?>
" /></label>
                                                <label for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['index']->value,'html','UTF-8' ));?>
_max"><input type="text" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Max','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['index']->value,'html','UTF-8' ));?>
_max" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['active']['max'],'html','UTF-8' ));?>
" /></label>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'date') {?>
                                                <fieldset class="form-group"> 
                                                    <div class="input-group ets_mp_datepicker">
                                                        <input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['index']->value,'html','UTF-8' ));?>
_min" class="form-control" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['index']->value,'html','UTF-8' ));?>
_min" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['active']['min'],'html','UTF-8' ));?>
" type="text" />
                                                        <div class="input-group-append">
                                                            <div class="input-group-text">
                                                                <i class="icon icon-date"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="form-group"> 
                                                    <div class="input-group ets_mp_datepicker">
                                                        <input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['index']->value,'html','UTF-8' ));?>
_max" class="form-control" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['index']->value,'html','UTF-8' ));?>
_max" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['active']['max'],'html','UTF-8' ));?>
" type="text" />
                                                        <div class="input-group-append">
                                                            <div class="input-group-text">
                                                                <i class="icon icon-date"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            <?php }?>
                                        <?php } elseif ((($_smarty_tpl->tpl_vars['name']->value == 'mp_front_products' || $_smarty_tpl->tpl_vars['name']->value == 'mp_products') && $_smarty_tpl->tpl_vars['field']->value['type'] == 'text' && isset($_smarty_tpl->tpl_vars['index']->value) && $_smarty_tpl->tpl_vars['index']->value == 'input_box')) {?>
                                            <div class="md-checkbox">
                                                <label>
                                                  <input id="bulk_action_select_all" onclick="$('table').find('td input:checkbox').prop('checked', $(this).prop('checked')); ets_mp_updateBulkMenu();" value="" type="checkbox">
                                                  <i class="md-checkbox-control"></i>
                                                </label>
                                            </div>
                                        <?php } else { ?>
                                           <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' -- ','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                        <?php }?>
                                    </th>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php if ($_smarty_tpl->tpl_vars['show_action']->value) {?>
                                    <th class="actions">
                                        <span class="pull-right flex">
                                            <input type="hidden" name="post_filter" value="yes" />
                                            <?php if ($_smarty_tpl->tpl_vars['show_reset']->value) {?><a  class="btn btn-warning"  href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
"><i class="icon-eraser"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a> &nbsp;<?php }?>
                                            <button class="btn btn-default" name="ets_mp_submit_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
" id="ets_mp_submit_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
" type="submit">
            									<i class="icon-search"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

            								</button>
                                        </span>
                                    </th>
                                <?php }?>
                            </tr>
                        <?php }?>
                    </thead>
                    <tbody id="list-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
">
                        <?php if ($_smarty_tpl->tpl_vars['field_values']->value) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field_values']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                            <tr <?php if (isset($_smarty_tpl->tpl_vars['row']->value['read']) && !$_smarty_tpl->tpl_vars['row']->value['read']) {?>class="no-read"<?php }?> data-id="<?php echo intval($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value]);?>
">
                                <?php $_smarty_tpl->_assignInScope('i', 1);?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_list']->value, 'field', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['field']->value) {
?>                             
                                    <td class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
 <?php if (isset($_smarty_tpl->tpl_vars['sort']->value) && $_smarty_tpl->tpl_vars['sort']->value == $_smarty_tpl->tpl_vars['key']->value && isset($_smarty_tpl->tpl_vars['sort_type']->value) && $_smarty_tpl->tpl_vars['sort_type']->value == 'asc' && isset($_smarty_tpl->tpl_vars['field']->value['update_position']) && $_smarty_tpl->tpl_vars['field']->value['update_position']) {?>pointer dragHandle center<?php }
if (isset($_smarty_tpl->tpl_vars['field']->value['class'])) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['class'],'html','UTF-8' ));
}?>" <?php if ($_smarty_tpl->tpl_vars['show_action']->value && !$_smarty_tpl->tpl_vars['actions']->value && count($_smarty_tpl->tpl_vars['fields_list']->value) == $_smarty_tpl->tpl_vars['i']->value) {?>colspan="2"<?php }?> >
                                        <?php if (isset($_smarty_tpl->tpl_vars['field']->value['rating_field']) && $_smarty_tpl->tpl_vars['field']->value['rating_field']) {?>
                                            <?php if (isset($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]) && $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value] > 0) {?>
                                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? (int)$_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]+1 - (1) : 1-((int)$_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value])+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                    <div class="star star_on"></div>
                                                <?php }
}
?>
                                                <?php if ((int)$_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value] < 5) {?>
                                                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - ((int)$_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]+1) : (int)$_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]+1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = (int)$_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]+1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                        <div class="star"></div>
                                                    <?php }
}
?>
                                                <?php }?>
                                            <?php } else { ?>
                                            
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' -- ','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                            <?php }?>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] != 'active') {?>
                                            <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'date') {?>
                                                <?php if (!$_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
                                                --
                                                <?php } else { ?>
                                                    <?php if ($_smarty_tpl->tpl_vars['key']->value != 'date_from' && $_smarty_tpl->tpl_vars['key']->value != 'date_to') {?>
                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value],'full'=>1),$_smarty_tpl ) );?>

                                                    <?php } else { ?>
                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value],'full'=>0),$_smarty_tpl ) );?>

                                                    <?php }?>
                                                <?php }?>
                                            <?php } else { ?>
                                                <?php if (isset($_smarty_tpl->tpl_vars['field']->value['update_position']) && $_smarty_tpl->tpl_vars['field']->value['update_position']) {?>
                                                    <div class="dragGroup">
                                                    <span class="positions">
                                                <?php }?>
                                                <?php if (isset($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]) && $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value] !== '' && !is_array($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value])) {
if (isset($_smarty_tpl->tpl_vars['field']->value['strip_tag']) && !$_smarty_tpl->tpl_vars['field']->value['strip_tag']) {
echo $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value];
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]),120,'...' )),'html','UTF-8' ));
}
} else { ?>--<?php }?>
                                                <?php if (isset($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]) && is_array($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]) && isset($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]['image_field']) && $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]['image_field']) {?>
                                                    <a class="ets_mp_fancy" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]['img_url'],'html','UTF-8' ));?>
"><img style="<?php if (isset($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]['height']) && $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]['height']) {?>max-height: <?php echo intval($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]['height']);?>
px;<?php }
if (isset($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]['width']) && $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]['width']) {?>max-width: <?php echo intval($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]['width']);?>
px;<?php }?>" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]['img_url'],'html','UTF-8' ));?>
" /></a>
                                                <?php }?> 
                                                <?php if (isset($_smarty_tpl->tpl_vars['field']->value['update_position']) && $_smarty_tpl->tpl_vars['field']->value['update_position']) {?>
                                                    </div>
                                                    </span>
                                                <?php }?>  
                                            <?php }?>                                     
                                        <?php } else { ?>
                                            <?php if (isset($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]) && $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
                                                <?php if ($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key']->value] == -1) {?>
                                                    <?php if ((!isset($_smarty_tpl->tpl_vars['row']->value['action_edit']) || $_smarty_tpl->tpl_vars['row']->value['action_edit']) && ($_smarty_tpl->tpl_vars['name']->value != 'mp_front_products' || (isset($_smarty_tpl->tpl_vars['row']->value['approved']) && $_smarty_tpl->tpl_vars['row']->value['approved']))) {?>
                                                        <a name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&change_enabled=1&field=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" class="list-action field-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
 list-action-enable action-disabled  list-item-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" title="<?php if ($_smarty_tpl->tpl_vars['key']->value == 'reported') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to mark as reported','mod'=>'ets_marketplace'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to Enable','mod'=>'ets_marketplace'),$_smarty_tpl ) );
}?>"><i class="icon-clock-o fa fa-clock-o"></i></a>
                                                    <?php } else { ?>
                                                        <span class="list-action-enable action-disabled" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pending','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
">
                                                            <i class="icon-clock-o fa fa-clock-o"></i>
                                                        </span>
                                                    <?php }?>
                                                <?php } else { ?>
                                                    <?php if ((!isset($_smarty_tpl->tpl_vars['row']->value['action_edit']) || $_smarty_tpl->tpl_vars['row']->value['action_edit']) && ($_smarty_tpl->tpl_vars['name']->value != 'mp_front_products' || (isset($_smarty_tpl->tpl_vars['row']->value['approved']) && $_smarty_tpl->tpl_vars['row']->value['approved']))) {?>
                                                    <a name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
"  href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&change_enabled=0&field=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" class="list-action field-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
 list-action-enable action-enabled list-item-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" title="<?php if ($_smarty_tpl->tpl_vars['key']->value == 'reported') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to unreport','mod'=>'ets_marketplace'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to Disable','mod'=>'ets_marketplace'),$_smarty_tpl ) );
}?>">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                    <?php } else { ?>
                                                        <span class="list-action-enable action-enabled" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enabled','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
">
                                                            <i class="fa fa-check"></i>
                                                        </span>
                                                    <?php }?>
                                                <?php }?>
                                            <?php } else { ?>
                                                <?php if ((!isset($_smarty_tpl->tpl_vars['row']->value['action_edit']) || $_smarty_tpl->tpl_vars['row']->value['action_edit']) && ($_smarty_tpl->tpl_vars['name']->value != 'mp_front_products' || (isset($_smarty_tpl->tpl_vars['row']->value['approved']) && $_smarty_tpl->tpl_vars['row']->value['approved']))) {?>
                                                    <a name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&change_enabled=1&field=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" class="list-action field-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
 list-action-enable action-disabled  list-item-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" title="<?php if ($_smarty_tpl->tpl_vars['key']->value == 'reported') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to mark as reported','mod'=>'ets_marketplace'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to Enable','mod'=>'ets_marketplace'),$_smarty_tpl ) );
}?>">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                <?php } else { ?>
                                                    <span class="list-action-enable action-disabled" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disabled','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
">
                                                        <i class="fa fa-remove"></i>
                                                    </span>
                                                <?php }?>
                                            <?php }?> 
                                        <?php }?>
                                    </td>
                                    <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php if ($_smarty_tpl->tpl_vars['show_action']->value) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['actions']->value) {?>  
                                        <td class="text-right">                            
                                            <div class="btn-group-action">
                                                <div class="btn-group pull-right">
                                                        <?php if ($_smarty_tpl->tpl_vars['actions']->value[0] == 'view') {?>
                                                            <?php if (isset($_smarty_tpl->tpl_vars['row']->value['child_view_url']) && $_smarty_tpl->tpl_vars['row']->value['child_view_url']) {?>
                                                                <a class="btn btn-default link_view" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value['child_view_url'],'html','UTF-8' ));?>
" <?php if (isset($_smarty_tpl->tpl_vars['view_new_tab']->value) && $_smarty_tpl->tpl_vars['view_new_tab']->value) {?> target="_blank" <?php }?>><i class="icon-search-plus fa fa-search-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a>
                                                            <?php } else { ?>
                                                                <a class="btn btn-default link_edit" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&edit<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
=1&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
" ><i class="icon-pencil fa fa-pencil"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a>
                                                            <?php }?>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['actions']->value[0] == 'delete') {?>
                                                            <a onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to delete this item?','mod'=>'ets_marketplace','js'=>1),$_smarty_tpl ) );?>
');" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&del=yes"><i class="icon-trash fa fa-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['actions']->value[0] == 'reply') {?>
                                                            <a class="btn btn-default link_edit" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&reply=yes"><i class="icon-reply fa fa-reply"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reply','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['actions']->value[0] == 'dowloadpdf') {?>
                                                            <a class="ets_mp_downloadpdf" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&dowloadpdf=yes">
                                                                <i class="icon-pdf icon icon-pdf fa fa-file-pdf-o"></i>
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download pdf','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                                            </a>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['name']->value == 'ms_commissions' && isset($_smarty_tpl->tpl_vars['row']->value['status_val'])) {?>
                                                            <?php if (isset($_smarty_tpl->tpl_vars['row']->value['type']) && $_smarty_tpl->tpl_vars['row']->value['type'] == 'usage') {?>
                                                                <?php if ($_smarty_tpl->tpl_vars['row']->value['status_val'] == 1) {?>
                                                                    <a onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to refund this commission?','mod'=>'ets_marketplace','js'=>1),$_smarty_tpl ) );?>
');" class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&return<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
=1&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
"><i class="fa fa-undo icon-undo"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refund','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a>
                                                                <?php } else { ?>
                                                                    <a onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to deduct this commission?','mod'=>'ets_marketplace','js'=>1),$_smarty_tpl ) );?>
');" class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&deduct<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
=1&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
"><i class="fa fa-minus icon-minus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Deduct','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a>
                                                                <?php }?>
                                                            <?php } else { ?>
                                                                <?php if ($_smarty_tpl->tpl_vars['row']->value['status_val'] == -1 || $_smarty_tpl->tpl_vars['row']->value['status_val'] == 0) {?>
                                                                    <a onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to approve commission?','mod'=>'ets_marketplace','js'=>1),$_smarty_tpl ) );?>
');" class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&approve<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
=1&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
"><i class="fa fa-check icon-check"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Approve','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a>
                                                                <?php } else { ?>
                                                                    <a onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to cancel commission?','mod'=>'ets_marketplace','js'=>1),$_smarty_tpl ) );?>
');" class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&cancel<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
=1&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
"><i class="fa fa-times icon-times"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a>
                                                                <?php }?>
                                                            <?php }?>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['name']->value == 'ms_commissions_usage' && isset($_smarty_tpl->tpl_vars['row']->value['status_val'])) {?>
                                                            <?php if ($_smarty_tpl->tpl_vars['row']->value['status_val'] == 1) {?>
                                                                <a onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to refund this commission?','mod'=>'ets_marketplace','js'=>1),$_smarty_tpl ) );?>
');" class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&return<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
=1&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
"><i class="fa fa-undo icon-undo"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refund','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a>
                                                            <?php } else { ?>
                                                                <a onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to deduct this commission?','mod'=>'ets_marketplace','js'=>1),$_smarty_tpl ) );?>
');" class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&deduct<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
=1&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
"><i class="fa fa-minus icon-minus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Deduct','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a>
                                                            <?php }?>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['name']->value == 'ms_billings' && isset($_smarty_tpl->tpl_vars['row']->value['status'])) {?>
                                                            <?php if ($_smarty_tpl->tpl_vars['row']->value['status'] == 0 || $_smarty_tpl->tpl_vars['row']->value['status'] == -1) {?>
                                                                <a onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to paid this invoice? Please make sure this seller already sent the fee to you','mod'=>'ets_marketplace','js'=>1),$_smarty_tpl ) );?>
');" class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&purchase<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
=1&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
"><i class="fa fa-check icon-check"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set as paid','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a>
                                                            <?php } else { ?>
                                                                <a onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to cancel this invoice?','mod'=>'ets_marketplace','js'=>1),$_smarty_tpl ) );?>
');" class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&cancel<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
=1&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
"><i class="fa fa-times icon-times"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a>
                                                            <?php }?>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['name']->value == 'ets_registration') {?>
                                                            <a class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value['child_view_url'],'html','UTF-8' ));?>
"><i class="icon-search-plus fa fa-search-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a>
                                                        <?php }?>
                                                        <?php if (count($_smarty_tpl->tpl_vars['actions']->value) >= 2 && (!isset($_smarty_tpl->tpl_vars['row']->value['action_edit']) || $_smarty_tpl->tpl_vars['row']->value['action_edit'] || in_array('action',$_smarty_tpl->tpl_vars['actions']->value))) {?>
                                                            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
                                        						<i class="icon-caret-down"></i>&nbsp;
                                        					</button>
                                                            <ul class="dropdown-menu">
                                                                <?php if ($_smarty_tpl->tpl_vars['name']->value == 'ets_withdraw' && isset($_smarty_tpl->tpl_vars['row']->value['change_status']) && $_smarty_tpl->tpl_vars['row']->value['change_status']) {?>
                                                                    <li><a onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to approve this withdrawal?','mod'=>'ets_marketplace','js'=>1),$_smarty_tpl ) );?>
');" class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&approve<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
=1&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
"><i class="fa fa-check icon-check"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Approve','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a></li>
                                                                    <li><a onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to decline with return commission this withdrawal?','mod'=>'ets_marketplace','js'=>1),$_smarty_tpl ) );?>
');" class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&return<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
=1&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
"><i class="fa fa-undo icon-undo"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Decline - Return commission','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a></li>
                                                                    <li><a onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to decline with deduct commission this withdrawal?','mod'=>'ets_marketplace','js'=>1),$_smarty_tpl ) );?>
');" class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&deduct<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
=1&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
"><i class="fa fa-close icon-close"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Decline - Deduct commission','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a></li>
                                                                <?php }?>
                                                                <?php if ($_smarty_tpl->tpl_vars['name']->value == 'ms_commissions' && isset($_smarty_tpl->tpl_vars['row']->value['status_val'])) {?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['status_val'] == -1) {?>
                                                                       <li><a onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to cancel this commission?','mod'=>'ets_marketplace','js'=>1),$_smarty_tpl ) );?>
');" class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&cancel<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
=1&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
"><i class="fa fa-times icon-times"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a></li>
                                                                    <?php }?>
                                                                <?php }?>
                                                                <?php if ($_smarty_tpl->tpl_vars['name']->value == 'ms_billings' && isset($_smarty_tpl->tpl_vars['row']->value['status'])) {?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['status'] == 0) {?>
                                                                        <a onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to cancel this billing?','mod'=>'ets_marketplace','js'=>1),$_smarty_tpl ) );?>
');" class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&cancel<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
=1&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
"><i class="fa fa-times icon-times"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a>
                                                                    <?php }?>
                                                                <?php }?>
                                                                <?php if ($_smarty_tpl->tpl_vars['name']->value == 'ets_registration') {?>
                                                                    <li>
                                                                        <span class="btn btn-default action_approve_registration" data-id="<?php echo intval($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value]);?>
" <?php if ($_smarty_tpl->tpl_vars['row']->value['status'] == 1) {?> style="display:none;"<?php }?>>
                                                                            <i class="fa fa-check icon-check"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Approve','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                                                        </span>
                                                                        <div class="approve_registration_form" style="display:none">
                                                                            <div class="ets_mp_close_popup" title="Close"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="form-group">
                                                                                <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</label>
                                                                                <div class="col-lg-9">
                                                                                    <span class="ets_mp_status approved"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Approve','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <input name="active_registration" value="1" type="hidden" />
                                                                            <input name="saveStatusRegistration" value="1" type="hidden" />
                                                                            <input name="id_registration" value="<?php echo intval($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value]);?>
" type="hidden" />
                                                                            <div class="panel_footer form-group">
                                                                                <div class="control-label col-lg-3"></div>
                                                                                <div class="col-lg-9">
                                                                                    <button type="submit" value="1" name="saveStatusRegistration" class="btn btn-default saveStatusRegistration">
                                                                                        <i class="icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                                                                    </button>
                                                                                </div>
                                                                            </div>           
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <span class="btn btn-default approve_registration action_decline_registration" data-id="<?php echo intval($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value]);?>
" <?php if (($_smarty_tpl->tpl_vars['row']->value['status'] == 1 && $_smarty_tpl->tpl_vars['row']->value['has_seller']) || $_smarty_tpl->tpl_vars['row']->value['status'] == 0) {?> style="display:none;"<?php }?>>
                                                                            <i class="fa fa-times icon-close"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Decline','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                                                        </span>
                                                                        <div class="approve_registration_form" style="display:none">
                                                                            <div class="ets_mp_close_popup" title="Close"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="form-group">
                                                                                <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</label>
                                                                                <div class="col-lg-9">
                                                                                    <span class="ets_mp_status declined"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Decline','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reason','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</label>
                                                                                <div class="col-lg-9">
                                                                                    <textarea name="reason"></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <input name="active_registration" value="0" type="hidden" />
                                                                            <input name="saveStatusRegistration" value="1" type="hidden" />
                                                                            <input name="id_registration" value="<?php echo intval($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value]);?>
" type="hidden" />
                                                                            <div class="panel_footer form-group">
                                                                                <div class="control-label col-lg-3"></div>
                                                                                <div class="col-lg-9">
                                                                                    <button type="submit" value="1" name="saveStatusRegistration" class="btn btn-default saveStatusRegistration">
                                                                                        <i class="icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                                                                    </button>
                                                                                </div>
                                                                            </div>           
                                                                        </div>
                                                                    </li>
                                                                    <li><a onclick="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to delete this item?','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
');" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&del=yes"><i class="fa fa-trash icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a></li>
                                                                <?php }?>
                                                                <?php if ($_smarty_tpl->tpl_vars['name']->value == 'ets_seller') {?>
                                                                    <li <?php if ($_smarty_tpl->tpl_vars['row']->value['status_val'] == 1) {?>style="display:none;"<?php }?>>
                                                                        <span class="btn btn-default approve_registration action_approve_seller" data-id="<?php echo intval($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value]);?>
">
                                                                            <i class="fa fa-check icon-check"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Activate','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                                                        </span>
                                                                        <div class="approve_registration_form" style="display:none">
                                                                            <div class="ets_mp_close_popup" title="Close"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="form-group">
                                                                                <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</label>
                                                                                <div class="col-lg-9">
                                                                                    <span class="ets_mp_status approved"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available from','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</label>
                                                                                <div class="col-lg-9">
                                                                                    <div class="row">
                                                                                        <div class="input-group col-lg-8 ets_mp_datepicker">
                                                                                            <input name="date_from" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value['date_from'],'html','UTF-8' ));?>
" class="" type="text" />
                                                                                            <span class="input-group-addon">
                                                                                                <i class="icon-calendar-empty"></i>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available to','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</label>
                                                                                <div class="col-lg-9">
                                                                                    <div class="row">
                                                                                        <div class="input-group col-lg-8 ets_mp_datepicker">
                                                                                            <input name="date_to" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value['date_to'],'html','UTF-8' ));?>
" class="" type="text" />
                                                                                            <span class="input-group-addon">
                                                                                                <i class="icon-calendar-empty"></i>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <input name="active_seller" value="1" type="hidden" />
                                                                            <input name="saveStatusSeller" value="1" type="hidden" />
                                                                            <input name="seller_id" value="<?php echo intval($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value]);?>
" type="hidden" />
                                                                            <div class="panel_footer form-group">
                                                                                <div class="control-label col-lg-3"></div>
                                                                                <div class="col-lg-9">
                                                                                    <button type="submit" value="1" name="saveStatusSeller" class="btn btn-default saveStatusSeller">
                                                                                        <i class="icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                                                                    </button>
                                                                                </div>
                                                                            </div>           
                                                                        </div>
                                                                    </li>
                                                                    <li <?php if ($_smarty_tpl->tpl_vars['row']->value['status_val'] != -1) {?> style="display:none;"<?php }?>>
                                                                        <span class="btn btn-default approve_registration action_decline_seller" data-id="<?php echo intval($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value]);?>
">
                                                                            <i class="icon icon-close"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Decline payment','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                                                        </span>
                                                                        <div class="approve_registration_form" style="display:none">
                                                                            <div class="ets_mp_close_popup" title="Close"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="form-group">
                                                                                <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</label>
                                                                                <div class="col-lg-9">
                                                                                    <span class="ets_mp_status declined"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Decline payment','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reason','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</label>
                                                                                <div class="col-lg-9">
                                                                                    <textarea name="reason"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value['reason'],'html','UTF-8' ));?>
</textarea>
                                                                                </div>
                                                                            </div>
                                                                            <input name="active_seller" value="-3" type="hidden" />
                                                                            <input name="saveStatusSeller" value="1" type="hidden" />
                                                                            <input name="seller_id" value="<?php echo intval($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value]);?>
" type="hidden" />
                                                                            <div class="panel_footer form-group">
                                                                                <div class="control-label col-lg-3"></div>
                                                                                <div class="col-lg-9">
                                                                                    <button type="submit" value="1" name="saveStatusSeller" class="btn btn-default saveStatusSeller">
                                                                                        <i class="icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                                                                    </button>
                                                                                </div>
                                                                            </div>           
                                                                        </div>
                                                                    </li>
                                                                    <li <?php if ($_smarty_tpl->tpl_vars['row']->value['status_val'] == 0) {?> style="display:none;"<?php }?>>
                                                                        <span class="btn btn-default approve_registration action_disable_seller" data-id="<?php echo intval($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value]);?>
">
                                                                            <i class="icon icon-ban"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disable','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                                                        </span>
                                                                        <div class="approve_registration_form" style="display:none">
                                                                            <div class="ets_mp_close_popup" title="Close"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</div>
                                                                            <div class="form-group">
                                                                                <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</label>
                                                                                <div class="col-lg-9">
                                                                                    <span class="ets_mp_status disabled"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disable','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reason','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</label>
                                                                                <div class="col-lg-9">
                                                                                    <textarea name="reason"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value['reason'],'html','UTF-8' ));?>
</textarea>
                                                                                </div>
                                                                            </div>
                                                                            <input name="active_seller" value="0" type="hidden" />
                                                                            <input name="saveStatusSeller" value="1" type="hidden" />
                                                                            <input name="seller_id" value="<?php echo intval($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value]);?>
" type="hidden" />
                                                                            <div class="panel_footer form-group">
                                                                                <div class="control-label col-lg-3"></div>
                                                                                <div class="col-lg-9">
                                                                                    <button type="submit" value="1" name="saveStatusSeller" class="btn btn-default saveStatusSeller">
                                                                                        <i class="icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                                                                    </button>
                                                                                </div>
                                                                            </div>           
                                                                        </div>
                                                                    </li>
                                                                <?php }?>
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['action']->value) {
?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['key']->value != 0) {?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['action']->value == 'delete' && (!isset($_smarty_tpl->tpl_vars['row']->value['view_order_url']) || (isset($_smarty_tpl->tpl_vars['row']->value['view_order_url']) && !$_smarty_tpl->tpl_vars['row']->value['view_order_url']))) {?>
                                                                            <li><a onclick="return confirm('<?php if ($_smarty_tpl->tpl_vars['name']->value == 'mp_front_products' || $_smarty_tpl->tpl_vars['name']->value == 'mp_products') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to delete this product?','mod'=>'ets_marketplace'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to delete this item?','mod'=>'ets_marketplace'),$_smarty_tpl ) );
}?>');" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&del=yes<?php if (isset($_smarty_tpl->tpl_vars['row']->value['type'])) {?>&type=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value['type'],'html','UTF-8' ));
}?>"><i class="fa fa-trash icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a></li>
                                                                        <?php }?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['action']->value == 'dowloadpdf') {?>
                                                                            <li>
                                                                                <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
&dowloadpdf=yes<?php if (isset($_smarty_tpl->tpl_vars['row']->value['type'])) {?>&type=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value['type'],'html','UTF-8' ));
}?>">
                                                                                    <i class="fa fa-pdf icon icon-pdf"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download pdf','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                                                                </a>
                                                                            </li>
                                                                        <?php }?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['action']->value == 'view') {?>
                                                                            <?php if (isset($_smarty_tpl->tpl_vars['row']->value['child_view_url']) && $_smarty_tpl->tpl_vars['row']->value['child_view_url']) {?>
                                                                                <li><a class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value['child_view_url'],'html','UTF-8' ));?>
"><i class="fa fa-search-plus icon-search-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a></li>
                                                                            <?php } else { ?>
                                                                                <li><a class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
"><i class="fa fa-pencil icon-pencil"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a></li>
                                                                            <?php }?>
                                                                        <?php }?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['action']->value == 'edit') {?>
                                                                            <li><a class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&edit<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
=1&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
"><i class="fa fa-pencil icon-pencil"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a></li>
                                                                        <?php }?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['action']->value == 'duplicate') {?>
                                                                            <li><a class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&duplicate<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
=1&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
"><i class="fa fa-copy icon-copy"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a></li>
                                                                        <?php }?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['action']->value == 'action') {?>
                                                                            <li>
                                                                                <a class="btn btn-default action-edit-inline" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&action<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'html','UTF-8' ));?>
=1&<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));?>
"><i class="fa fa-pencil icon-pencil"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Action','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a>
                                                                            </li>
                                                                        <?php }?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['action']->value == 'vieworder' && $_smarty_tpl->tpl_vars['row']->value['view_order_url']) {?>
                                                                            <li>
                                                                                <a class="btn btn-default" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['row']->value['view_order_url'],'html','UTF-8' ));?>
"><i class="icon-search fa fa-search"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View order','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a>
                                                                            </li>
                                                                        <?php }?>
                                                                    <?php }?>
                                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                            </ul>
                                                        <?php }?>
                                                </div>
                                            </div>
                                        </td>
                                    <?php }?>
                                <?php }?>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
                        <?php }?>  
                        <?php if (!$_smarty_tpl->tpl_vars['field_values']->value) {?>
                           <tr class="no-record not_items_found"> <td colspan="100%"><p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No items found','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</p></td></tr> 
                        <?php }?>                
                    </tbody>
                </table>
                <?php if (isset($_smarty_tpl->tpl_vars['has_delete_product']->value) && ((isset($_smarty_tpl->tpl_vars['is_admin']->value) && $_smarty_tpl->tpl_vars['is_admin']->value) || (Configuration::get('ETS_MP_ALLOW_SELLER_CREATE_PRODUCT') || (isset($_smarty_tpl->tpl_vars['has_edit_product']->value) && $_smarty_tpl->tpl_vars['has_edit_product']->value) || $_smarty_tpl->tpl_vars['has_delete_product']->value))) {?>
                  <div id="catalog-actions" class="col order-first">
                    <div class="row">
                        <div class="col">
                            <div class="d-inline-block hide" bulkurl="<?php if (isset($_smarty_tpl->tpl_vars['is_admin']->value) && $_smarty_tpl->tpl_vars['is_admin']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminMarketPlaceProducts'),'html','UTF-8' ));?>
&bulk_action=activate_all<?php } else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('ets_marketplace','products',array('bulk_action'=>'activate_all')),'html','UTF-8' ));
}?>" redirecturl="<?php if (isset($_smarty_tpl->tpl_vars['is_admin']->value) && $_smarty_tpl->tpl_vars['is_admin']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminMarketPlaceProducts'),'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('ets_marketplace','products',array('list'=>1)),'html','UTF-8' ));
}?>">
                                <div class="btn-group dropdown bulk-catalog">
                                    <button id="product_bulk_menu" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="true" disabled="" style="color:black;">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Bulk actions','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                        <i class="icon-caret-up"></i>
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <?php if ((isset($_smarty_tpl->tpl_vars['is_admin']->value) && $_smarty_tpl->tpl_vars['is_admin']->value) || (isset($_smarty_tpl->tpl_vars['has_edit_product']->value) && $_smarty_tpl->tpl_vars['has_edit_product']->value)) {?>
                                            <a class="dropdown-item" href="#" onclick="ets_mp_bulkProductAction(this, 'activate_all');">
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Activate selection','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                            </a>
                                            <a class="dropdown-item" href="#" onclick="ets_mp_bulkProductAction(this, 'deactivate_all');">
                                                <i class="fa fa-circle-o" aria-hidden="true"></i>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Deactivate selection','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                            </a>
                                        <?php }?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['is_admin']->value) && $_smarty_tpl->tpl_vars['is_admin']->value) || Configuration::get('ETS_MP_ALLOW_SELLER_CREATE_PRODUCT')) {?>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#" onclick="ets_mp_bulkProductAction(this, 'duplicate_all');">
                                                <i class="fa fa-clone" aria-hidden="true"></i>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate selection','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                            </a>
                                        <?php }?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['has_delete_product']->value) && $_smarty_tpl->tpl_vars['has_delete_product']->value) {?>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#" onclick="ets_mp_bulkProductAction(this, 'delete_all');">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete selection','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                            </a>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['paggination']->value) {?>
                    <div class="ets_mp_paggination" style="margin-top: 10px;">
                        <?php echo $_smarty_tpl->tpl_vars['paggination']->value;?>

                    </div>
                <?php }?>
            </form>
        </div>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['link_back_to_list']->value)) {?>
        <div class="panel-footer">
            <a id="desc-attribute-back" class="btn btn-default btn-primary" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link_back_to_list']->value,'html','UTF-8' ));?>
">
        		<i class="process-icon-back "></i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to list','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
        	</a>
        </div>
    <?php }?>
</div>


<?php }
}

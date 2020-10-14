<?php
/* Smarty version 3.1.33, created on 2020-10-14 16:20:20
  from '/opt/bitnami/apache/htdocs/modules/ets_marketplace/views/templates/hook/admin_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f870924234f03_57537817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14c5b947f7878d5bd4d8a56bf93360f606ba49df' => 
    array (
      0 => '/opt/bitnami/apache/htdocs/modules/ets_marketplace/views/templates/hook/admin_header.tpl',
      1 => 1602685098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f870924234f03_57537817 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_mp_module_dir']->value,'html','UTF-8' ));?>
views/js/order_product.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    var total_registrations = <?php echo intval($_smarty_tpl->tpl_vars['total_registrations']->value);?>
;
    var total_seller_wait_approve = <?php echo intval($_smarty_tpl->tpl_vars['total_seller_wait_approve']->value);?>
;
    $(document).ready(function(){
        if(total_registrations >0)
        {
            if($('#subtab-AdminMarketPlaceRegistrations span').length)
                $('#subtab-AdminMarketPlaceRegistrations span').append('<b class="total"> '+total_registrations+'</b>');
            else
                $('#subtab-AdminMarketPlaceRegistrations a').append('<b class="total"> '+total_registrations+'</b>');
            $('#tab-AdminMarketPlaceRegistrations a').append('<b class="total"> '+total_registrations+'</b>');
        } 
        if(total_seller_wait_approve >0)
        {
            if($('#subtab-AdminMarketPlaceSellers span').length)
                $('#subtab-AdminMarketPlaceSellers span').append('<b class="total"> '+total_seller_wait_approve+'</b>');
            else
                $('#subtab-AdminMarketPlaceSellers a').append('<b class="total"> '+total_seller_wait_approve+'</b>');
            $('#tab-AdminMarketPlaceSellers > a').append('<b class="total"> '+total_seller_wait_approve+'</b>');
        }
    });
<?php echo '</script'; ?>
><?php }
}

<?php
/* Smarty version 3.1.33, created on 2020-10-14 16:19:41
  from '/opt/bitnami/apache/htdocs/modules/ets_marketplace/views/templates/hook/admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8708fdb30da9_14790810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '446f7290d7802bf5513fe0a991cf0eda49d3d489' => 
    array (
      0 => '/opt/bitnami/apache/htdocs/modules/ets_marketplace/views/templates/hook/admin.tpl',
      1 => 1602685098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8708fdb30da9_14790810 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    var confim_delete_logo = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to delete this logo','mod'=>'ets_marketplace','js'=>1),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_mp_module_dir']->value,'html','UTF-8' ));?>
views/js/admin.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    <?php if (isset($_smarty_tpl->tpl_vars['ets_link_search_seller']->value)) {?>
        var ets_link_search_seller ='<?php echo $_smarty_tpl->tpl_vars['ets_link_search_seller']->value;?>
';
    <?php }
echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['ets_mp_sidebar']->value;?>

<div class="etsmp-left-panel col-lg-12">
    <?php if (isset($_GET['controller']) && $_GET['controller'] != 'AdminMarketPlaceDashboard') {?>
    <nav  class="breadcrumb hidden-sm-down">
      <ol>
          <li>
            <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminMarketPlaceDashboard'),'html','UTF-8' ));?>
">
                <span ><i class="icon fa-home"></i></span>
            </a>
          </li>
          <?php if ($_GET['controller'] == 'AdminMarketPlacePayments' || $_GET['controller'] == 'AdminMarketPlaceCommissionsUsage' || $_GET['controller'] == 'AdminMarketPlaceSettingsGeneral' || $_GET['controller'] == 'AdminMarketPlaceCronJob') {?>
              <li>
                <span ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Setting','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
              </li>
          <?php }?>
          <?php if ($_GET['controller'] == 'AdminMarketPlaceReport' || $_GET['controller'] == 'AdminMarketPlaceShopGroups') {?>
              <li>
                <span ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shops','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
              </li>  
          <?php }?>
          <li>
                <?php if ($_GET['controller'] == 'AdminMarketPlacePayments') {?>
                    <span ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment method','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                <?php } elseif ($_GET['controller'] == 'AdminMarketPlaceCommissionsUsage') {?>
                    <span ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Commission','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                <?php } elseif ($_GET['controller'] == 'AdminMarketPlaceCronJob') {?>
                    <span ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cronjob','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                <?php } elseif ($_GET['controller'] == 'AdminMarketPlaceOrders') {?>
                    <span ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Orders','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                <?php } elseif ($_GET['controller'] == 'AdminMarketPlaceProducts') {?>
                    <span ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                <?php } elseif ($_GET['controller'] == 'AdminMarketPlaceCommissions') {?>
                    <span ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Commissions','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                <?php } elseif ($_GET['controller'] == 'AdminMarketPlaceBillings') {?>
                    <span ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Memberships','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                <?php } elseif ($_GET['controller'] == 'AdminMarketPlaceWithdrawals') {?>
                    <span ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Withdrawals','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                <?php } elseif ($_GET['controller'] == 'AdminMarketPlaceRegistrations') {?>
                    <span ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Applications','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                <?php } elseif ($_GET['controller'] == 'AdminMarketPlaceSellers') {?>
                    <span ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shops','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                <?php } elseif ($_GET['controller'] == 'AdminMarketPlaceReport') {?>
                    <span ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reports','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                <?php } elseif ($_GET['controller'] == 'AdminMarketPlaceShopGroups') {?>
                    <span ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop groups','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                <?php } else { ?>
                    <span ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'General','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                <?php }?>
          </li>
      </ol>
    </nav>
    <?php }
if (isset($_smarty_tpl->tpl_vars['tabActive']->value)) {?>
        <div class="etsws-panel">
            <style>
                #commission_usage_form .panel-heading{
                    display:none;
                }
            </style>
            <div class="title-content">
                <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Commission','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
 </h1>
            </div>
            <div class="ets-ws-admin__subtabs">
                    <ul class="subtab-list">
                        <li class="<?php if ($_smarty_tpl->tpl_vars['tabActive']->value == 'commission_usage') {?>active<?php }?>">
                            <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminMarketPlaceCommissionsUsage'),'html','UTF-8' ));?>
" title="">
                                <i class="fa fa-cog"></i>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Usage settings','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                            </a>
                        </li>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['tabActive']->value == 'payment_settings') {?>active<?php }?>">
                            <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminMarketPlaceCommissionsUsage'),'html','UTF-8' ));?>
&tabActive=payment_settings" title="">
                                <i class="fa fa-credit-card"></i>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Withdrawal methods','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                            </a>
                        </li>
                    </ul>
            </div>
        <?php }
echo $_smarty_tpl->tpl_vars['ets_mp_body_html']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['tabActive']->value)) {?>
        </div>
    <?php }?>
</div>
<div class="clearfix"></div><?php }
}

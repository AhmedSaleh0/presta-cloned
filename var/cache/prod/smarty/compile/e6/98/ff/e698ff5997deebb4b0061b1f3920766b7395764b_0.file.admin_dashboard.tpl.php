<?php
/* Smarty version 3.1.33, created on 2020-10-14 16:19:41
  from '/opt/bitnami/apache/htdocs/modules/ets_marketplace/views/templates/hook/dashboard/admin_dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8708fdadf453_52462338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e698ff5997deebb4b0061b1f3920766b7395764b' => 
    array (
      0 => '/opt/bitnami/apache/htdocs/modules/ets_marketplace/views/templates/hook/dashboard/admin_dashboard.tpl',
      1 => 1602685098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8708fdadf453_52462338 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
var commissions_line_datasets =<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['commissions_line_datasets']->value ));?>
;
var turn_over_bar_datasets =<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['turn_over_bar_datasets']->value ));?>
;
var chart_labels=[<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chart_labels']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>'<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value,'html','UTF-8' ));?>
',<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>];
var charxlabelString = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Day','mod'=>'ets_marketplace','js'=>1),$_smarty_tpl ) );?>
';
var charylabelString = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['default_currency']->value->iso_code,'html','UTF-8' ));?>
';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_mp_module_dir']->value,'html','UTF-8' ));?>
views/js/moment.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_mp_module_dir']->value,'html','UTF-8' ));?>
views/js/daterangepicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_mp_module_dir']->value,'html','UTF-8' ));?>
views/js/dashboard.js"><?php echo '</script'; ?>
>
<div class="ets-sn-admin__content ets_mp-dashboard-page">
    <div class="ets-sn-admin__body">
        <div class="stats-box-info">
            <div class="row margin-15 ">
                <div class="col-lg-2 box-padding-col box-static box-static-turnover">
                    <div class="box-info js-type-info-stats" style="background: #f06295;">
                        <div class="box-inner turnover">
                            <div class="box-inner-top">
                                <h5 class="box-info-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Turnover','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</h5>
                                <div class="box-info-content"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['totalTurnOver']->value),$_smarty_tpl ) );?>
 </div>
                            </div>
                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total money earned from selling seller products','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
 </span>
                        </div>
                    </div>
                </div>
                                <div class="col-lg-2 box-padding-col box-static box-static-commissions">
                    <div class="box-info js-type-info-stats" style="background: #f87f6f;">
                        <div class="box-inner commissions">
                            <div class="box-inner-top">
                                <h5 class="box-info-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Seller commissions','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</h5>
                                <div class="box-info-content"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['totalSellerCommission']->value)),$_smarty_tpl ) );?>
 </div>
                            </div>
                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total commission that all sellers have earned','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
 </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 box-padding-col box-static box-static-earning">
                    <div class="box-info js-type-info-stats" style="background: #45bbe2;">
                        <div class="box-inner earning">
                            <div class="box-inner-top">
                                <h5 class="box-info-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Admin earning','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</h5>
                                <?php $_smarty_tpl->_assignInScope('totalAdminEarning', $_smarty_tpl->tpl_vars['totalSellerRevenve']->value+$_smarty_tpl->tpl_vars['totalSellerFee']->value);?>
                                <div class="box-info-content"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['totalAdminEarning']->value)),$_smarty_tpl ) );?>
 </div>
                            </div>
                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total money admin earned from seller products and Memberships fee','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
 </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 box-padding-col box-static box-static-revenve">
                    <div class="box-info js-type-info-stats" style="background: #ff546b;">
                        <div class="box-inner revenve">
                            <div class="box-inner-top">
                                <h5 class="box-info-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Revenue','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</h5>
                                <div class="box-info-content"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['totalSellerRevenve']->value)),$_smarty_tpl ) );?>
 </div>
                            </div>
                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total money admin earned from seller products','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
 </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 box-padding-col box-static box-static-fee">
                    <div class="box-info js-type-info-fee" style="background: #fbbb21;">
                        <div class="box-inner revenve">
                            <div class="box-inner-top">
                                <h5 class="box-info-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Memberships fee','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</h5>
                                <div class="box-info-content"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['totalSellerFee']->value)),$_smarty_tpl ) );?>
 </div>
                            </div>
                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total money admin earned from Memberships fee','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
 </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-item ets_mp-section-commissions">
            <div class="row margin-15 row-991">
                <div class="col-lg-4 col-xs-4 col-sm-4 plr-15">
                    <div class="stats-data-commissions">
                        <div class="stats-container">
                            <div class="stats-body">
                                <div class="box-dashboard line-chart-commissions">
                                    <div class="box-header">
                                        <h4 class="box-title">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Admin earning','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                            <i class="fa fa-question-circle">
                                                <span class="ets_tooltip" data-tooltip="top"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total money admin earned from successfully sold products of sellers and the fee which sellers paid to maintain seller accounts','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                                            </i>
                                        </h4>

                                        <div class="box-tool-dropdown">
                                            <select name="filter-time-stats-commissions">
                                                <option value="all_time"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All time','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</option>
                                                <option value="this_month" selected="selected"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This month','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</option>
                                                <option value="_month"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Month -1','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</option>
                                                <option value="this_year" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This year','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</option>
                                                <option value="time_range"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Time range','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</option>
                                            </select>
                                        </div>
                                        <div class="box-tool">
                                            <div class="box-tool-timerange box-date-ranger" style="display: none;">
                                                <input class="ajax-date-range ets_mp_date_ranger_filter" type="text" />
                                                <input class="date_from_commissions" value="" type="hidden" />
                                                <input class="date_to_commissions" value="" type="hidden" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="no_data" <?php if (!$_smarty_tpl->tpl_vars['no_data_char_commission']->value) {?>style="display:none;"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No data','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</div>
                                        <canvas id="ets_mp_stats_commision_line" <?php if ($_smarty_tpl->tpl_vars['no_data_char_commission']->value) {?>style="display:none;"<?php }?>>
                                            
                                        </canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-4 col-sm-4 plr-15">
                    <div class="stats-data-commissions">
                        <div class="stats-container">
                            <div class="stats-body">
                                <div class="box-dashboard bar-chart-turn-over">
                                    <div class="box-header">
                                        <h4 class="box-title">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Turnover & Seller commissions','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                            <i class="fa fa-question-circle">
                                                <span class="ets_tooltip" data-tooltip="top"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total money earned from selling seller products and total commission that all sellers of your website have earned','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                                            </i>
                                        </h4>

                                        <div class="box-tool-dropdown">
                                            <select name="filter-time-stats-turnover">
                                                <option value="all_time"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All time','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</option>
                                                <option value="this_month" selected="selected"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This month','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</option>
                                                <option value="_month"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Month -1','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</option>
                                                <option value="this_year"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This year','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</option>
                                                <option value="time_range"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Time range','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</option>
                                            </select>
                                        </div>
                                        <div class="box-tool">
                                            <div class="box-tool-timerange box-date-ranger" style="display: none;">
                                                <input class="ajax-date-range ets_mp_date_ranger_filter" type="text" />
                                                <input class="date_from_order" value="" type="hidden" />
                                                <input class="date_to_order" value="" type="hidden" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="no_data" <?php if (!$_smarty_tpl->tpl_vars['no_data_char_turn_over']->value) {?>style="display:none;"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No data','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</div>
                                        <canvas id="ets_mp_stats_turn-over_bar" <?php if ($_smarty_tpl->tpl_vars['no_data_char_turn_over']->value) {?>style="display:none;"<?php }?>>
                                        </canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-4 col-sm-4 plr-15">
                    <div class="stats-data-commissions">
                        <div class="stats-container">
                            <div class="stats-body">
                                <div class="box-dashboard latest-withdrawals">
                                    <div class="box-header">
                                        <h4 class="box-title">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Latest withdrawals request','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                            <i class="fa fa-question-circle">
                                                <span class="ets_tooltip" data-tooltip="top"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Latest withdrawal requests from sellers','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                                            </i>
                                        </h4>
                                    </div>
                                    <div class="box-body">
                                        <div id="ets_mp_list_withdrawals">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
                                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Seller name','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
                                                        <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Amount','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
                                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($_smarty_tpl->tpl_vars['last_withdraws']->value) {?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['last_withdraws']->value, 'withdraw');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['withdraw']->value) {
?>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <?php echo intval($_smarty_tpl->tpl_vars['withdraw']->value['id_ets_mp_withdrawal']);?>

                                                                </td>
                                                                <td class="seller_name">
                                                                    <?php if ($_smarty_tpl->tpl_vars['withdraw']->value['id_customer_seller']) {?>
                                                                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->getLinkCustomerAdmin($_smarty_tpl->tpl_vars['withdraw']->value['id_customer_seller']),'html','UTF-8' ));?>
&viewseller=1&id_seller=<?php echo intval($_smarty_tpl->tpl_vars['withdraw']->value['id_seller']);?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['withdraw']->value['seller_name'],'html','UTF-8' ));?>
</a>
                                                                    <?php } else { ?>
                                                                        <span class="row_deleted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Seller deleted','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                                                                    <?php }?>
                                                                </td>
                                                                <td class="text-center">
                                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['withdraw']->value['amount']),$_smarty_tpl ) );?>

                                                                </td>
                                                                <td >
                                                                    <?php if ($_smarty_tpl->tpl_vars['withdraw']->value['status'] == 0) {?>
                                                                        <span class="ets_mp_status pending"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pending','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                                                                    <?php }?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['withdraw']->value['status'] == -1) {?>
                                                                        <span class="ets_mp_status declined"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Declined','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                                                                    <?php }?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['withdraw']->value['status'] == 1) {?>
                                                                        <span class="ets_mp_status approved"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Approved','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                                                                    <?php }?>
                                                                </td>
                                                            </tr>
                                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    <?php } else { ?>
                                                        <tr>
                                                            <td colspan="100%" class="text-center no_data"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No data','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</td>
                                                        </tr>
                                                    <?php }?>
                                                    
                                                </tbody>
                                            </table>
                                            <?php if ($_smarty_tpl->tpl_vars['last_withdraws']->value) {?>
                                                <span class="text-center view_detail">
                                                    <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminMarketPlaceWithdrawals'),'html','UTF-8' ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a>
                                                </span>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-6 col-sm-6 plr-15">
                    <div class="stats-data-commissions">
                        <div class="stats-container">
                            <div class="stats-body">
                                <div class="box-dashboard latest-payment-billings">
                                    <div class="box-header">
                                        <h4 class="box-title">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Latest memberships','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                            <i class="fa fa-question-circle">
                                                <span class="ets_tooltip" data-tooltip="top"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Latest payment billings generated when sellers pay for Memberships fee','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                                            </i>
                                        </h4>
                                    </div>
                                    <div class="box-body">
                                        <div id="ets_mp_list_billings">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
                                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Seller name','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
                                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop name','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
                                                        <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Amount','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
                                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($_smarty_tpl->tpl_vars['last_payment_billings']->value) {?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['last_payment_billings']->value, 'billing');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['billing']->value) {
?>
                                                            <tr>
                                                                <td class="text-center"><?php echo intval($_smarty_tpl->tpl_vars['billing']->value['id_ets_mp_seller_billing']);?>
</td>
                                                                <td class="seller_name">
                                                                    <?php if ($_smarty_tpl->tpl_vars['billing']->value['id_customer_seller']) {?>
                                                                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->getLinkCustomerAdmin($_smarty_tpl->tpl_vars['billing']->value['id_customer_seller']),'html','UTF-8' ));?>
&viewseller=1&id_seller=<?php echo intval($_smarty_tpl->tpl_vars['billing']->value['id_seller']);?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['billing']->value['seller_name'],'html','UTF-8' ));?>
</a>
                                                                    <?php } else { ?>
                                                                        <span class="row_deleted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Seller deleted','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                                                                    <?php }?>
                                                                </td>
                                                                <td>
                                                                    <?php if ($_smarty_tpl->tpl_vars['billing']->value['id_seller']) {?>
                                                                        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value->getShopLink(array('id_seller'=>$_smarty_tpl->tpl_vars['billing']->value['id_seller'])),'html','UTF-8' ));?>
" target="_blank"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['billing']->value['shop_name'],'html','UTF-8' ));?>
</a>
                                                                    <?php } else { ?>
                                                                        <span class="deleted_shop row_deleted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop deleted','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                                                                    <?php }?>
                                                                </td>
                                                                <td class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['billing']->value['amount']),$_smarty_tpl ) );?>
</td>
                                                                <td>
                                                                    <?php if ($_smarty_tpl->tpl_vars['billing']->value['active'] == -1) {?>
                                                                        <span class="ets_mp_status deducted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Canceled','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                                                                    <?php }?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['billing']->value['active'] == 0) {?>
                                                                        <span class="ets_mp_status pending"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pending','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                                                                    <?php }?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['billing']->value['active'] == 1) {?>
                                                                        <span class="ets_mp_status purchased"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Paid','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                                                                    <?php }?>
                                                                </td>
                                                            </tr>
                                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    <?php } else { ?>
                                                        <tr>
                                                            <td colspan="100%" class="text-center no_data"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No data','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</td>
                                                        </tr>
                                                    <?php }?>
                                                    
                                                </tbody>
                                            </table>
                                            <?php if ($_smarty_tpl->tpl_vars['last_payment_billings']->value) {?>
                                                <span class="text-center view_detail">
                                                    <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminMarketPlaceBillings'),'html','UTF-8' ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a>
                                                </span>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-6 col-sm-6 plr-15">
                    <div class="stats-data-commissions">
                        <div class="stats-container">
                            <div class="stats-body">
                                <div class="box-dashboard going-to-expired">
                                    <div class="box-header">
                                        <h4 class="box-title">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Seller accounts are going to be expired','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                            <i class="fa fa-question-circle">
                                                <span class="ets_tooltip" data-tooltip="top"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Seller accounts need to be renewed soon','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                                            </i>
                                        </h4>
                                    </div>
                                    <div class="box-body">
                                        <div id="ets_mp_list_billings">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
                                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Seller name','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
                                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Seller email','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
                                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Expiration date','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php if ($_smarty_tpl->tpl_vars['going_tobe_expired_sellers']->value) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['going_tobe_expired_sellers']->value, 'seller');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['seller']->value) {
?>
                                                        <tr>
                                                            <td class="text-center"><?php echo intval($_smarty_tpl->tpl_vars['seller']->value['id_seller']);?>
</td>
                                                            <td><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminMarketPlaceSellers'),'html','UTF-8' ));?>
&viewseller=1&id_seller=<?php echo intval($_smarty_tpl->tpl_vars['seller']->value['id_seller']);?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['seller']->value['seller_name'],'html','UTF-8' ));?>
</a></td>
                                                            <td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['seller']->value['seller_email'],'html','UTF-8' ));?>
</td>
                                                            <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['seller']->value['date_to'],'full'=>0),$_smarty_tpl ) );?>
</td>
                                                        </tr>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php } else { ?>
                                                    <tr>
                                                        <td colspan="100%" class="text-center no_data"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No data','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</td>
                                                    </tr>
                                                <?php }?>
                                                </tbody>
                                            </table>
                                            <?php if ($_smarty_tpl->tpl_vars['going_tobe_expired_sellers']->value) {?>
                                                <span class="text-center view_detail">
                                                    <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminMarketPlaceSellers'),'html','UTF-8' ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</a>
                                                </span>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 px-10 sale_products_form" id="ets_mp_dashboards">
                <div class="panel ets_mp-position-relative js-ets_mp-dashboard">
                    <div class="panel-header">
                        <div class="box-header">
                            <h4 class="box-title">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sales, products & sellers','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                <i class="fa fa-question-circle">
                                    <span class="ets_tooltip" data-tooltip="top"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Statistics about sales, seller products and sellers','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                                </i>
                            </h4>
                        </div>
                    </div>
                    <div class="panel-bodys pt-0">
                        <ul id="nav-tab-rank" class="nav nav-pills nav-tabs" role="tablist">
                            <li class="active" role="presentation">
                                <a href="#statis_latest_orders" aria-controls="tab_statis_lates_orders" role="tab" data-toggle="tab">
                                    <i class="fa fa-latest-order"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Latest orders','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                    <i class="fa fa-question-circle">
                                        <span class="ets_tooltip" data-tooltip="top"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Latest orders from the shops of sellers','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                                    </i>
                                </a>
                            </li>
                            <li class="" role="presentation">
                                <a href="#statis_latest_seller_commissions" aria-controls="tab_latest_seller_commissions" role="tab" data-toggle="tab">
                                    <i class="fa fa-latest-seller-commissions"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Latest seller commissions','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                    <i class="fa fa-question-circle">
                                        <span class="ets_tooltip" data-tooltip="top"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Latest commissions which sellers earned by selling seller products','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                                    </i>
                                </a>
                            </li>
                            <li class="" role="presentation">
                                <a href="#statis_latest_products" aria-controls="tab_statis_latest_products" role="tab" data-toggle="tab">
                                    <i class="fa fa-lastest-products"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Latest products','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                    <i class="fa fa-question-circle">
                                        <span class="ets_tooltip" data-tooltip="top"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Latest products added by sellers','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                                    </i>
                                </a>
                            </li>
                            <li class="" role="presentation">
                                <a href="#statis_best_selling_products" aria-controls="tab_statis_best_selling_products" role="tab" data-toggle="tab">
                                    <i class="fa fa-best-selling-products"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Best selling products','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                    <i class="fa fa-question-circle">
                                        <span class="ets_tooltip" data-tooltip="top"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Best selling products from shops of sellers','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                                    </i>
                                </a>
                            </li>
                            <li class="" role="presentation">
                                <a href="#statis_top_seller" aria-controls="tab_statis_top_seller" role="tab" data-toggle="tab">
                                    <i class="fa fa-top-seller"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Top sellers','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                    <i class="fa fa-question-circle">
                                        <span class="ets_tooltip" data-tooltip="top"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sellers who have the largest number of sold products','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                                    </i>
                                </a>
                            </li>
                            <li class="" role="presentation">
                                <a href="#statis_top_seller_commission" aria-controls="tab_statis_top_seller_commission" role="tab" data-toggle="tab">
                                    <i class="fa fa-top-seller-commission"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Top seller commissions','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>

                                    <i class="fa fa-question-circle">
                                        <span class="ets_tooltip" data-tooltip="top"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sellers who earned the largest amount of commission','mod'=>'ets_marketplace'),$_smarty_tpl ) );?>
</span>
                                    </i>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="statis_latest_orders" class="tab-pane active ets_mp-content-tab" role="tabpanel">
                                <div class="sub-panel">
                                    <div class="panel-body">
                                        <?php echo $_smarty_tpl->tpl_vars['latest_orders']->value;?>

                                    </div>
                                </div>
                            </div>
                            <div id="statis_latest_seller_commissions" class="tab-pane ets_mp-content-tab" role="tabpanel">
                                <div class="sub-panel">
                                    <div class="panel-body">
                                        <?php echo $_smarty_tpl->tpl_vars['latest_seller_commissions']->value;?>

                                    </div>
                                </div>
                            </div>
                            <div id="statis_latest_products" class="tab-pane ets_mp-content-tab" role="tabpanel">
                                <div class="sub-panel">
                                    <div class="panel-body">
                                        <?php echo $_smarty_tpl->tpl_vars['latest_products']->value;?>

                                    </div>
                                </div>
                            </div>
                            <div id="statis_best_selling_products" class="tab-pane ets_mp-content-tab" role="tabpanel">
                                <div class="sub-panel">
                                    <div class="panel-body">
                                        <?php echo $_smarty_tpl->tpl_vars['best_selling_products']->value;?>

                                    </div>
                                </div>
                            </div>
                            <div id="statis_top_seller" class="tab-pane ets_mp-content-tab" role="tabpanel">
                                <div class="sub-panel">
                                    <div class="panel-body">
                                        <?php echo $_smarty_tpl->tpl_vars['top_sellers']->value;?>

                                    </div>
                                </div>
                            </div>
                            <div id="statis_top_seller_commission" class="tab-pane ets_mp-content-tab" role="tabpanel">
                                <div class="sub-panel">
                                    <div class="panel-body">
                                        <?php echo $_smarty_tpl->tpl_vars['top_seller_commissions']->value;?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}

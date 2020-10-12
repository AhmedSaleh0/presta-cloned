<?php
/* Smarty version 3.1.33, created on 2020-10-12 17:01:09
  from '/opt/bitnami/apache/htdocs/themes/classic/templates/customer/password-email.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f846fb502cee1_73711982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42a4967885654d97eaea8e974767303bba2902fd' => 
    array (
      0 => '/opt/bitnami/apache/htdocs/themes/classic/templates/customer/password-email.tpl',
      1 => 1602250846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f846fb502cee1_73711982 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20214023925f846fb500c640_30721553', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5592607035f846fb50119b5_95815012', 'page_content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5802770155f846fb502a342_63651665', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_20214023925f846fb500c640_30721553 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_20214023925f846fb500c640_30721553',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_5592607035f846fb50119b5_95815012 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_5592607035f846fb50119b5_95815012',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" class="forgotten-password" method="post">

    <ul class="ps-alert-error">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
        <li class="item">
          <i>
            <svg viewBox="0 0 24 24">
              <path fill="#fff" d="M11,15H13V17H11V15M11,7H13V13H11V7M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20Z"></path>
            </svg>
          </i>
          <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</p>
        </li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

    <header>
      <p class="send-renew-password-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please enter the email address you used to register. You will receive a temporary link to reset your password.','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</p>
    </header>

    <section class="form-fields">
      <div class="form-group center-email-fields">
        <label class="col-md-3 form-control-label required"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label>
        <div class="col-md-5 email">
          <input type="email" name="email" id="email" value="<?php if (isset($_POST['email'])) {
echo htmlspecialchars(stripslashes($_POST['email']), ENT_QUOTES, 'UTF-8');
}?>" class="form-control" required>
        </div>
        <button class="form-control-submit btn btn-primary hidden-xs-down" name="submit" type="submit">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send reset link','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

        </button>
        <button class="form-control-submit btn btn-primary hidden-sm-up" name="submit" type="submit">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

        </button>
      </div>
    </section>

  </form>
<?php
}
}
/* {/block 'page_content'} */
/* {block 'page_footer'} */
class Block_5802770155f846fb502a342_63651665 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_5802770155f846fb502a342_63651665',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" class="account-link">
    <i class="material-icons">&#xE5CB;</i>
    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to login','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
  </a>
<?php
}
}
/* {/block 'page_footer'} */
}

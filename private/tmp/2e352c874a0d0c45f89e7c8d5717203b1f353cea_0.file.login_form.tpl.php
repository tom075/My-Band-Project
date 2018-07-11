<?php
/* Smarty version 3.1.32, created on 2018-06-28 12:27:03
  from '/Users/tomfolkers/Documents/projecten/My_Band/private/views/login_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b34b7f7e2c6e0_36378563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e352c874a0d0c45f89e7c8d5717203b1f353cea' => 
    array (
      0 => '/Users/tomfolkers/Documents/projecten/My_Band/private/views/login_form.tpl',
      1 => 1530181623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b34b7f7e2c6e0_36378563 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="index.php" method="post">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <input type="submit" name="submit_login" value="GO!!!">
</form>


<?php }
}

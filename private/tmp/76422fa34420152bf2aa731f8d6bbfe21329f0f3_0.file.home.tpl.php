<?php
/* Smarty version 3.1.32, created on 2018-05-27 16:10:06
  from '/Users/tom/Documents/school/ma/bewijzenmap/periode1.4/bap/opdracht1/private/views/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0abc3eb21d82_89217824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76422fa34420152bf2aa731f8d6bbfe21329f0f3' => 
    array (
      0 => '/Users/tom/Documents/school/ma/bewijzenmap/periode1.4/bap/opdracht1/private/views/home.tpl',
      1 => 1527429728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0abc3eb21d82_89217824 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>hallo smartu</h1>

<p>de mailadressen zijn:

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mailadresses']->value, 'mail');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mail']->value) {
?>
        <li><?php echo $_smarty_tpl->tpl_vars['mail']->value;?>
</li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


</p><?php }
}

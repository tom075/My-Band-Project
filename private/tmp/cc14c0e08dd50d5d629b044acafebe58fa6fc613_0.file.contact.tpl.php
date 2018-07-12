<?php
/* Smarty version 3.1.32, created on 2018-07-12 08:57:43
  from '/Users/tomfolkers/Documents/projecten/My_Band/private/views/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b46fbe79159b9_31061872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc14c0e08dd50d5d629b044acafebe58fa6fc613' => 
    array (
      0 => '/Users/tomfolkers/Documents/projecten/My_Band/private/views/contact.tpl',
      1 => 1531378550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b46fbe79159b9_31061872 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="contact-wrapper">
<div class="contact-title">
    <h1>CONTACT</h1>
    <h2>Vraag maar raak!</h2>

</div>
<div class="contact-form">
    <form id="contact-form" action="index.php" method="post">
        <input type="text" name="contact_name" class="form-control" placeholder="Naam" required><br>
        <input type="email" name="contact_email" class="form-control" placeholder="Email" required><br>

        <textarea name="contact_message" id="text-area" class="form-control" rows="4" placeholder="Bericht" required></textarea><br>

        <button type="button" onclick="cancel()" class="form-control" id="submit">ANNULEER</button>
        <input type="submit" id="submit" name="contact_submit" class="form-control" value="VERSTUUR">

    </form>

</div>
</div><?php }
}

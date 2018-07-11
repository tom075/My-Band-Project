<?php
/* Smarty version 3.1.32, created on 2018-07-11 14:00:05
  from '/Users/tomfolkers/Documents/projecten/My_Band/private/views/upload.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b45f145436566_44357180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9376de242c75d047bc556a97739c4b275410aeeb' => 
    array (
      0 => '/Users/tomfolkers/Documents/projecten/My_Band/private/views/upload.tpl',
      1 => 1531295687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b45f145436566_44357180 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="index.php?page=admin">terug</a>

<form action="index.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="2000000000000000000">
    <label>Titel
        <input type="text" name="title" required></label><br>
    <label>Content
        <textarea name="content" cols="20" rows="10"  required></textarea></label><br>
    <label>plaatje
        <input type="file" name="userimage" required></label><br>

    <input type="submit" name="submit_upload">
</form>






<?php }
}

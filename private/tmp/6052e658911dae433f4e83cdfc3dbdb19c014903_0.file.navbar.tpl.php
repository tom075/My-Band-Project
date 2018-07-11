<?php
/* Smarty version 3.1.32, created on 2018-07-11 19:10:59
  from '/Users/tomfolkers/Documents/projecten/My_Band/private/views/navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b463a23615181_70027584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6052e658911dae433f4e83cdfc3dbdb19c014903' => 
    array (
      0 => '/Users/tomfolkers/Documents/projecten/My_Band/private/views/navbar.tpl',
      1 => 1531329057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b463a23615181_70027584 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="search">
    <form action="index.php" method="get">
        <input type="hidden" name="page" value="news">
        <input type="text" name="search" class="input" placeholder="zoeken">
        <button id="sub_button" name="submit" type="submit" class="fas fa-search"></button>

    </form>

</div>
<div class="topnav" id="myTopnav">
    <a href="" style="visibility: hidden">test</a>
    <a href="index.php?page=news">Nieuws</a>
    <a href="index.php?page=contact">Contact</a>
    <a href="index.php?page=home" >Home</a>
    <a href="javascript:void(0);" class="icon" onclick="navbar()">
        <i class="fa fa-bars"></i>
    </a>
</div>
<?php }
}

<?php
/* Smarty version 3.1.32, created on 2018-06-18 11:54:36
  from '/Users/tomfolkers/Documents/school/ma/bewijzenmap/periode1.4/bap/opdracht1/private/views/news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b279d7cc4e675_65870219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '956f5932fcc18c8f3fc0fbfece618b0605ef381f' => 
    array (
      0 => '/Users/tomfolkers/Documents/school/ma/bewijzenmap/periode1.4/bap/opdracht1/private/views/news.tpl',
      1 => 1529322833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b279d7cc4e675_65870219 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>NEWS</h1>


<div class="pagina_link"> <p> <a href="index.php?page=home">HOME</a> | <a href="index.php?page=news">NEWS</a> | <a href="index.php?page=contact">CONTACT</a> </p></div>







    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
        <div class="article">
        <h2><?php echo $_smarty_tpl->tpl_vars['article']->value[0];?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['article']->value[1];?>
</p>
        <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value[2];?>
" alt="test">
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<p>
    <?php if ($_smarty_tpl->tpl_vars['current_page']->value > 1) {?>
        <a href="index.php?page=news&pageno=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
">PREVIOUS</a>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['current_page']->value == 1) {?>
        PREVIOUS
    <?php }?>

    - <?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
 -

    <?php if ($_smarty_tpl->tpl_vars['current_page']->value < $_smarty_tpl->tpl_vars['number_of_pages']->value) {?>
        <a href="index.php?page=news&pageno=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
">NEXT</a>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['current_page']->value == $_smarty_tpl->tpl_vars['number_of_pages']->value) {?>
        NEXT
    <?php }?>
</p>
<?php }
}

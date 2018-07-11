<?php
/* Smarty version 3.1.32, created on 2018-07-06 15:48:36
  from '/Users/tomfolkers/Documents/projecten/My_Band/private/views/news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b3f73345682e6_04276407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2761d6a32a3b0e7a4dd4ac361f932abb783b4b9' => 
    array (
      0 => '/Users/tomfolkers/Documents/projecten/My_Band/private/views/news.tpl',
      1 => 1530884916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3f73345682e6_04276407 (Smarty_Internal_Template $_smarty_tpl) {
?>









<div class="wrapper">


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>

        <div class="article">
            <img class="news_image" src="<?php echo $_smarty_tpl->tpl_vars['article']->value[2];?>
" alt="test">

            <div class="content_news">
            <h2><?php echo $_smarty_tpl->tpl_vars['article']->value[0];?>
</h2>
            <p><?php echo $_smarty_tpl->tpl_vars['article']->value[1];?>
</p>
            </div>

        </div>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>


    <p>
    <div class="pagina_no">
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
    </div>
</p>
<?php }
}

<?php
/* Smarty version 3.1.32, created on 2018-07-11 09:37:00
  from '/Users/tomfolkers/Documents/projecten/My_Band/private/views/admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b45b39c832618_48278322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a0c081ce6e7ba65bcde22e4b51ddb716203cca6' => 
    array (
      0 => '/Users/tomfolkers/Documents/projecten/My_Band/private/views/admin.tpl',
      1 => 1531294620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b45b39c832618_48278322 (Smarty_Internal_Template $_smarty_tpl) {
?>


<a href="index.php?page=logout" onclick="">uitloggen</a>
<a href="index.php?page=upload" onclick="">uploaden</a>


<br>
<br>
    <table>
        <tr>
            <th>plaatje</th>
            <th>titiel</th>
            <th>content</th>
            <th>edit</th>
            <th>delete</th>

        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article_admin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article_admin']->value) {
?>

            <tr>
            <td class="admin_td"> <img class="admin_image" src="<?php echo $_smarty_tpl->tpl_vars['article_admin']->value[2];?>
" alt="test"></td>
            <td class="admin_td"><?php echo $_smarty_tpl->tpl_vars['article_admin']->value[0];?>
</td>
            <td class="admin_td"><?php echo $_smarty_tpl->tpl_vars['article_admin']->value[1];?>
</td>
            <td class="admin_td"><a href="index.php?page=edit&title=<?php echo $_smarty_tpl->tpl_vars['article_admin']->value[0];?>
&content=<?php echo $_smarty_tpl->tpl_vars['article_admin']->value[1];?>
&image=<?php echo $_smarty_tpl->tpl_vars['article_admin']->value[2];?>
">EDIT</a></td>
            <td class="admin_td"><a href="index.php?page=delete&id=<?php echo $_smarty_tpl->tpl_vars['article_admin']->value[2];?>
">DELETE</a></td>

            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>



<?php }
}

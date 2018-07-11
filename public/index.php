<?php
session_start();

require ('../private/smarty/Smarty.class.php');
require ('../private/model.php');
require ('../private/controller.php');

$smarty = new Smarty();
$smarty->setCompileDir('../private/tmp');
$smarty->setTemplateDir('../private/views');

define('ARTICLES_PER_PAGE', 3);



// TERNARY OPERATOR
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$pageno = isset($_GET['pageno']) ? $_GET['pageno'] : '1';
$search = isset($_GET['search']) ? '%' . $_GET['search'] . '%' : '%';


if (isset($_POST['submit_login'])){
    login_action();
}

if (isset($_POST['submit_upload'])){
    procces_upload_action();
}



switch ($page) {
    case 'home' : homepage_action(); break;
    case 'news' : news_action(); break;
    case 'contact' : contact_action(); break;
    case 'admin' : admin_action(); break;
    case 'logout' : logout_action(); break;
    case 'upload' : upload_action(); break;
    case 'delete' : delete_action(); break;
    case 'edit' : edit_action(); break;
    default : page_not_found_action(); break;
}







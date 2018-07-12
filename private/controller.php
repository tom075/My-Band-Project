<?php

function homepage_action() {
    page_counter();
    global  $smarty;
    $articles = get_articles();
    $smarty->assign('articles', $articles);
    $smarty->display('header.tpl');
    $smarty->display('home.tpl');
    $smarty->display('footer.tpl');

}

function page_not_found_action(){
    global  $smarty;
    $smarty->display('notfound.tpl');
}


function contact_action() {
    page_counter();
    global  $smarty;
//  MODEL


//  VIEWS

    $smarty->display('header.tpl');
    $smarty->display('contact.tpl');
    $smarty->display('footer.tpl');
}

function news_action(){
    page_counter();
    global $smarty, $pageno;
    $articles = get_some_articles();
    $number_of_pages = get_number_of_pages();
    $smarty->assign('current_page', $pageno);
    $smarty->assign('number_of_pages', $number_of_pages);
    $smarty->assign('articles',$articles);



    $smarty->display('header.tpl');
    $smarty->display('navbar.tpl');
    $smarty->display('news.tpl');
    $smarty->display('footer.tpl');
}


function admin_action(){

        global $smarty;


    if ($_SESSION['loggedin'] == 'loggedin'){
        global $smarty;
        $articles1 = get_some_articles();
        $smarty->assign('articles',$articles1);

        admin_page_counter();

        $smarty->display('header.tpl');
        $smarty->display('admin.tpl');
        $smarty->display('footer.tpl');

    }else{
        $smarty->display('login_form.tpl');

    }


}

function login_action(){
    check_login();
}

function logout_action(){
    destroy_session();
}

function upload_action(){
    global $smarty;

    $smarty->display('header.tpl');
    $smarty->display('upload.tpl');
    $smarty->display('footer.tpl');
}


function procces_upload_action(){
    upload_procces();
}
function delete_action(){
    delete_procces();
}

function edit_action(){
    global $smarty;

    $smarty->display('header.tpl');
    $smarty->display('edit.tpl');
    $smarty->display('footer.tpl');
}



function contact_send(){
    send_message();
}



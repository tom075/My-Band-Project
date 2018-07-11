<?php


function make_connection(){
    $mysqli = new mysqli('localhost', 'volnion_MyBand', '*********', 'volnion_MyBand');
    if ($mysqli->connect_errno){
        die('Connection error: ' . $mysqli->connect_errno . '<br>');
    }
    return $mysqli;
}

function get_articles() {
    $mysqli = make_connection();
    $query = "SELECT title FROM articles";
    $stmt = $mysqli->prepare($query) or die ('Error preparing 1.');
    $stmt->bind_result($title) or die ('Error binding results 1.');
    $stmt->execute() or die ('Error executing 1.');
    $results = array();
    while ($stmt->fetch()) {
        $results[] = $title;
    }
    return $results;
}

function get_some_articles(){
    global $page;

    if ($page == 'admin'){
        $mysqli = make_connection();

        $query  =    "SELECT title,content, imagelink ";
        $query .=    "FROM articles";


        $stmt = $mysqli->prepare($query) or die ('Error preparing 2.');
        $stmt->bind_result($title, $content, $imagelink) or die ('Error binding results 2.');
        $stmt->execute() or die ('Error executing 1.');
        while ($stmt->fetch()) {
            $article_admin = array();
            $article_admin[] = $title;
            $article_admin[] = $content;
            $article_admin[] = $imagelink;
            $results[] = $article_admin;
        }
        return $results;
    } else{
        global $pageno, $search;
        $mysqli = make_connection();
        $firstrow = ($pageno -1 ) * ARTICLES_PER_PAGE;
        $per_page = ARTICLES_PER_PAGE;

        $query  =    "SELECT title,content, imagelink ";
        $query .=    "FROM articles ";
        $query .=    "WHERE title LIKE ? OR ";
        $query .=    "content LIKE ? ";
        $query .=    "ORDER BY article_id ";
        $query .=    "DESC LIMIT $firstrow,$per_page";

        $stmt = $mysqli->prepare($query) or die ('Error preparing 2.');
        $stmt->bind_param('ss', $search, $search) or die ('error binding search');
        $stmt->bind_result($title, $content, $imagelink) or die ('Error binding results 2.');
        $stmt->execute() or die ('Error executing 1.');
        while ($stmt->fetch()) {
            $article = array();
            $article[] = $title;
            $article[] = nl2br($content);
            $article[] = $imagelink;
            $results[] = $article;
        }
        return $results;
    }


}

function get_number_of_pages(){

    $number_of_pages = calculate_pages() or die ('error calculating');
    return $number_of_pages;
}


function calculate_pages(){
    $mysqli = make_connection();
    $query = "SELECT title FROM articles";
    $results = $mysqli->query($query) or die ('error querying 2.');
    $rows = $results->num_rows;
    $number_of_pages = ceil($rows / ARTICLES_PER_PAGE);
    return $number_of_pages;
}

function check_login(){
   $username = $_POST['username'];
   $password = $_POST['password'];

   if ($username == 'admin' && $password == 'admin'){
       $_SESSION['loggedin'] = 'loggedin';
       ?>
       <script>window.location.replace("index.php?page=admin");</script>
   <?php   }
}

function destroy_session(){
    session_destroy();
    ?>
    <script>window.location.replace("index.php?page=home");</script>
<?php
}


function upload_procces(){
    $temp_location = $_FILES['userimage']['tmp_name'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $target_location = 'images/' . time() . $_FILES['userimage']['name'] ;


    if ($_FILES['userimage']['size']< 2000000000000){
        $result = move_uploaded_file($temp_location,$target_location);
    }else{
        echo 'Dit is wel een heel groot bestand';
    }
    if ($result){

        $mysqli = make_connection();
        $query = "INSERT INTO articles VALUES (0, ?, ?, ?)";
        $stmt = $mysqli->prepare($query) or die ('error querying 2.');
        $stmt->bind_param('sss', $title, $content, $target_location) or die ('failed binding [upload_process]');
        $stmt->execute() or die ('failed exec [upload]');

        header("location: index.php?page=admin ");

    }

}
 

function delete_procces(){

    $id = $_GET['id'];
    $image = $_GET['id'];

    $mysqli = make_connection();
    unlink($image);
    $query = "DELETE FROM articles WHERE imagelink = '$id' ";
    $result = mysqli_query($mysqli, $query) or die ('kan resultaten niet naar voren halen');

    header("location: index.php?page=admin ");

}

function page_counter(){

    global $page;



    $weergaven = fopen("../private/weergaven/" . $page . ".txt", "r");

    $aantal = fread($weergaven, 1024);

    fclose($weergaven);

    $aantal = $aantal + 1;


    $weergaven = fopen("../private/weergaven/" . $page . ".txt", "w");

    fwrite($weergaven, $aantal);

}

function admin_page_counter(){




    $weergaven_home = fopen("../private/weergaven/" . home . ".txt", "r");

    $aantal_home = fread($weergaven_home, 1024);

    fclose($weergaven_home);


    echo "<p>Home:" . $aantal_home ." ";

    $weergaven_news = fopen("../private/weergaven/" . news . ".txt", "r");

    $aantal_news = fread($weergaven_news, 1024);

    fclose($weergaven_news);


    echo "news:" . $aantal_news . "</p>";



}






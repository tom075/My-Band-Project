<a href="index.php?page=admin">terug</a>

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







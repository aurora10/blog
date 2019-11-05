<?php include ("includes/header.php"); ?>

<?php
    if (!$session->is_signed_in()){
        redirect('login.php');
    }
?>

<?php

$aantal_users = User::find_all();
$aantal_comments = Comment::find_all();
$aantal_photos = Photo::find_all();

?>

<?php include ("includes/sidebar.php");  ?>
<?php include ("includes/content-top.php");  ?>
<?php include ("includes/content.php");  ?>
<?php include ("includes/footer.php");  ?>

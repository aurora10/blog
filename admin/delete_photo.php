<?php

include("includes/header.php");
if (!$session->is_signed_in()) {
    redirect('login.php');
}


if (empty($_GET['id'])) {
  redirect('photos.php');
}

$photo = Photo::find_by_id($_GET['id']);

if ($photo) {
    $photo->delete_photo();
   redirect('photos.php');
} else {
  redirect('photos.php');
}


include("includes/sidebar.php");
include("includes/content-top.php");

?>
<h1>Welcome to delete photo page</h1>
<?php
include("includes/footer.php");
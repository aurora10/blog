<?php
include("includes/header.php");
include("includes/sidebar.php");
include("includes/content-top.php");

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);



if(!$session->is_signed_in()){
    redirect('login.php');
}
$message = "";
if(isset($_POST['submit'])) {
    $photo = new Photo();
    $photo->title = $_POST['title'];
    $photo->caption = $_POST['caption'];
    $photo->description = $_POST['description'];
    $photo->alternate_text = $_POST['alternate_text'];
    $photo->set_file($_FILES['file']);
    if($photo->save()){
        $message = "Photo uploaded succesfully";
    }else{
        $message = join('<br>', $photo->errors);
    }
}
?>
<div class="container-fluid">
    <div class="row">
      <div class="col-6">
            <h1 class="page-header">
                UPLOAD PHOTO
            </h1>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <h4><?php echo $message; ?></h4>
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="form-group">

                    <label for="caption">Caption</label>
                    <input type="text" name="caption" class="form-control">
                </div>

                <div class="form-group">

                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control">
                </div>
                <div class="form-group">

                    <label for="alternate_text">Alternate Text</label>
                    <input type="text" name="alternate_text" class="form-control">
                </div>

                <div class="form-group">
                    <input type="file" name="file" class="form-control">
                </div>
                <input type="submit" name="submit" value="Upload" class="btn btn-primary">



                                                                                                   
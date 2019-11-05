<?php
include("includes/header.php");
if(!$session->is_signed_in ()){
redirect ('login.php');
}
$photos = Photo::find_all ();
include ("includes/sidebar.php");
include ("includes/content-top.php");?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Photos</h2>
            <td><a href="upload_photo.php" class="btn btn-primary rounded-0"><i class="fas fa-user-plus"></i>Add Photo</a></td>
            <table class="table table-header">
                <thead>
                    <tr>
                        <th>Photo </th>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Caption</th>
                        <th>Filename</th>
                        <th>Alternate Text</th>
                        <th>Size</th>
                        <th>Comments</th>
                        <th>Delete</th>
                         <th>Update</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($photos as $photo): ?>
                            <tr>
                                <td class="d-flex align-self-stretch col-xs-3 col-sm-1"><a href="../photo.php?id=<?php echo $photo->id; ?>"><img src="<?php echo $photo->picture_path();  ?> " style="max-height: 66px; max-width: 66px;" alt=""></a></td>
                                <td><?php echo $photo->id; ?></td>
                                <td><?php echo $photo->title; ?></td>
                                <td><?php echo $photo->caption; ?></td>
                                <td><?php echo $photo->filename; ?></td>
                                <td><?php echo $photo->alternate_text; ?></td>
                                <td><?php echo $photo->size; ?></td>
                                <td><a href="comments_photo.php?id=<?php echo $photo->id;  ?>">

                                        <?php
                                            $comments = Comment::find_the_comments($photo->id);
                                            echo count($comments);

                                        ?>

                                    </a></td>

                                <td><a class="btn btn-danger rounded btn-lg" href="delete_photo.php?id=<?php echo $photo->id;?>"><i class="far fa-trash-alt"></i></a></td>
                                <td><a class="btn btn-warning btn-lg" href="edit_photo.php?id=<?php echo $photo->id;?>"><i class="far fa-edit"></i></a></td>
                                <td><a class="btn btn-warning btn-lg" href="../photo.php?id=<?php echo $photo->id;?>"><i class="far fa-eye"></i></a></td>

                            </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </d
    </div>
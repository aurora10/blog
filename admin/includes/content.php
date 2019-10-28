<?php
require_once ("header.php");

?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <hr>
            <p>

                <?php
                ini_set('display_startup_errors', 1);
                ini_set('display_errors', 1);
                error_reporting(-1);

//                $user =new User();
//                $user->username= 'Emanuel';
//                $user->password = '1234';
//                $user->first_name = 'Emanuel';
//                $user->last_name = 'Smith';
//
//                $user->create();


//                $user = User::find_user_by_id(3);
//                $user->last_name = 'Gates';
//                $user->password = '123';
//                $user->update();

//                $user = User::find_user_by_id(44);
//                $user->username = "TEST5";
//
//                $user->save();

//                $users = User::find_all();
//                foreach ($users as $user) {
//                    echo $user->username . "<br>";
//                }
//
//                $photos = Photo::find_all();
//                foreach ($photos as $photo) {
//                    echo $photo->title . "<br>";
//                    echo $photo->id;
//                }
//
                $photo = new Photo();
                $photo->title = "ZZZZZZZå";
                $photo->caption = "lkjlkjhl";
               // $photo->description = "adfaf ;lkj;klj f dfa;lk ";
                $photo->size = 15;

                $photo->save();

//                echo INCLUDES_PATH . "<br>";
//                echo  INCLUDES_PATH;
//                $user = new User();
//                $user->username = "AAA";
//                $user->password = "BBB";
//                $user->first_name= "asasas";
//                $user->last_name = "232323";
//                $user->user_image = "x.jpg";
//                $user->create();

//                $photo = Photo::find_by_id(13);
//                var_dump($photo);
//                $photo->delete_photo();
                ?>




            </p>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
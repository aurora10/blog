<?php
include ("includes/header.php"); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-3"></div>


        <div class="col-6">
            <h1 style="color: red; text-align: center">Homepagina: Photos</h1>
            <?php foreach($photos as $photo): ?>


                    <a href="photo.php?id=<?php echo $photo->id; ?>">
                        <img style="width: 100%; height: auto; object-fit: cover; margin: 15px;
" src="<?php echo 'admin'.DS.$photo->picture_path(); ?>" alt="" class="img-fluid frame">
                    </a>


            <?php endforeach; ?>

            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <?php
                    if ($paginate->page_total() > 1) {
                        if ($paginate->has_previous()) {
                            echo "<li class='page-item'><a class='page-link' href='index.php?page={$paginate->previous()}'>Previous</a></li>";
                        }

                        for ($i=1; $i<= $paginate->page_total(); $i++) {
                            if ($i == $paginate->current_page) {
                                echo "<li class=' active page-item'><a class='page-link' href='index.php?page={$i}'>{$i}</a></li>";
                            }else{
                                echo "<li><a class='page-link' href='index.php?page={$i}'>{$i}</a></li>";

                            }
                        }

                        if ($paginate->has_next()) {
                            echo "<li class='page-item'><a class='page-link' href='index.php?page={$paginate->next()}'>Next</a></li>";
                        }

                    }


                    ?>





                </ul>
            </nav>


        </div>




        <div class="col-3"></div>


</div>



</div>

<?php include ("includes/footer.php"); ?>
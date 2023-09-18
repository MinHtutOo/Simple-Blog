
<?php

include_once "views/top.php";

?>

<div class="container my-3">
    <div class="row">
    <?php include_once "views/sideBar.php" ?>

    <section class="col-md-9">
        <div class="row">
            <?php
                $result = "";
                if(checkSession(("username"))){
                    $result = getFilteredPost($_GET["sid"],2);
                }else{
                    $result = getFilteredPost($_GET["sid"],1);
                }

                foreach($result as $post){
                    $pid = $post["id"];
            echo '<div class="col-md-6">
            <div class="card mb-3">
              <div class="card-block m-3">
                <h5> '.$post["title"].' </h5>
                <p> '.substr($post["content"],0,100).'</p>
                <a href="postDetail.php? pid='.$pid.' " class="btn btn-info btn-sm float-right">Detail</a>
                    </div>
                    </div>
                    </div>';
                }
            ?>
        </div>
    </section>
    </div>
</div>

<?php
    include_once "views/footer.php";
    include_once "views/base.php";
?>


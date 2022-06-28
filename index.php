<?php require_once('include/header.php'); ?>
<?php require_once('admin/include/dbcon.php'); ?>
<?php 
    if(isset($_GET['post'])){
        require_once('blog.php');
    }
    $mFunction = new Functions;
    $posts = $mFunction->getPosts();

?>
    <main>
        </main>
    <body class="mufazmi blue lighten-5" >
    <?php require_once('include/navbar.php'); ?>
        <!-- container tag starting form here -->
        <div class="container">
            <div class="center-align">
                <h3 style="font-weight: bold;">Vacancy page</h3>
                <h6 class="grey-text text-darken-2">All the avalable positions here at ECWC</h6>
                <!-- starting chip / tag section from here --> <br>
                <a href="?tag=Social+Codia">
                    <div class="chip">
                        Popular
                    </div>
                </a>
                <a href="?tag=javascript">
                    <div class="chip">
                        new vacncys
                    </div>
                </a>
                <a href="?tag=Python">
                    <div class="chip">
                        all
                    </div>
                </a>
            </div>
        <!-- Page title tags end here -->
        <!-- Row begins -->
            <div class="row">
                <?php
                    foreach ($posts as $post) {
                        $postCard = <<<HERE
                            <div class="col s12 m4">
                                <div class="card hoverable small" style="height:400px">
                                    <div class="card-image">
                                        <img src="uploads/$post->postImage" alt="" height="150" width="150">
                                        <a href="?post=$post->postTitle" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">chevron_right</i></a>
                                    </div>
                                    <div class="card-content">
                                        <p class="grey-text">$post->postTimestamp</p>
                                        <h5 style="font-weight: bold;">$post->postTitle</h5>
                                        <p class="grey-text text-darken-2">$post->postContent</p>
                                    </div>
                                    <div class="card-action">
                                        <a href="?post=$post->postTitle" class="deep-orange-text">Read More</a>
                                    </div>
                                </div>
                            </div>
                        HERE;;
                        echo $postCard;
                    }
                ?>

            </div>  <!-- row tags end here -->
        </div>   <!-- container tags end here -->
        <?php require_once("include/footer.php") ?>
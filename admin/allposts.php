<?php require_once('include/header.php'); ?>
<?php require_once('include/navbar.php'); ?>
<?php require_once('include/sidenav.php'); ?>
<?php $posts =  $func->getPosts() ?>
<?php

if (isset($_GET['delete']))
{ 
    $postId = $_GET['delete'];
    $func->deletePostById($postId);
}

?>

<div class="row">

<?php
    foreach ($posts as $post) 
    {
        $postCard = <<<HERE
        <div class="col l3 m3 s12">
            <div class="card z-depth-0 small" style="height:450px;">
                <div class="card-image">
                    <img src="../uploads/$post->postImage" alt="" class="responsive-img">
                    <a href="" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">keyboard_arrow_left</i></a>
                </div>
         
                <div class="card-content">
                    <h6 style="font-weight:bold;">$post->postTitle</h6>
                    <span>$post->postContent</span>
                </div>
                <div class="card-action">
                    <div class="left">
                        <a href="post.php?edit=$post->postId"><i class="material-icons">edit</i></a>
                    </div>
                    <div class="right">
                        <a href="?delete=$post->postId"><i class="material-icons">delete</i></a>
                    </div>
                </div>
            </div>
        </div>
        HERE;;
        echo $postCard;
    }
?>


</div>



<?php require_once('include/footer.php'); ?>
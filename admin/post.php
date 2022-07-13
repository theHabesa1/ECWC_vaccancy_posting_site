<?php require_once('include/header.php'); ?>

<?php 
    if(isset($_GET['edit']))
    {
        $editPostId =  $_GET['edit'];
        $mFeeds = $func->getPostByPostId($editPostId);
    }
?>

<?php
if(isset($_POST['post'])){
    $responsePostMessage = "d";
    $postTitle = $_POST['postTitle'];
    $postContent = $_POST['postContent'];
    $postImage = $_FILES['postImage'];
    $endDate = $_POST['endDate'];
    $no = $_POST['num'];

    $result = $func->postPost($postTitle,$postContent,$postImage,$endDate,$no);
    if ($result)
    {
        $_SESSION['posted'] = "Your Post Has Been Published";
    }
    else
    {
        $_SESSION['postFailed'] = "An Unknown Error Occoured During Pulishing Your Content, Please Try Again, If The Problem Persist Please Cotact To The Website Developer";
    }
}
?>

<?php
    // updating posts to the database server
if(isset($_POST['update'])){
    $postTitle = $_POST['postTitle'];
    $postContent = $_POST['postContent'];
    $postImage = $_FILES['postImage'];
    $postId = $_POST['postId'];
    $endDate = $_POST['endDate'];
    $no = $_POST['num'];
    $result = $func->updatePost($postTitle,$postContent,$postImage,$postId,$endDate,$no);

    if($result){
        $_SESSION['updated'] = "Your Post Has Been Updated";
    }
    else{
        $_SESSION['update_failed'] = "An Unknown Error Occoured During Pulishing Your Content, Please Try Again, If The Problem Persist Please Cotact To The Website Developer.";
    }
}
?>

    <main>
        </main>
    <body class=" blue lighten-5 mufazmi" >
        <nav class="teal">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo center">Yareds Admin panel</a>
                    <a href="#" class="sidenav-trigger show-on-large" data-target="slide-out"><i class="material-icons">menu</i></a>
                </div>
            </div>
        </nav>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="container"> <br><br>
            <div class="status">
                <h5 class="red-text center">
                    <?php
                        if(isset($_SESSION['posted'])){
                            echo $_SESSION['posted'];
                            unset($_SESSION['posted']);
                        }
                        if(isset($_SESSION['postFailed'])){
                            echo $_SESSION['postFailed'];
                            unset($_SESSION['postFailed']);
                        }
                        if(isset($_SESSION['updated'])){
                            echo $_SESSION['updated'];
                            unset($_SESSION['updated']);
                        }
                    ?>
                    <span style="font-size:15px; font-weight=bold;">
                        <?php
                            if(isset($_SESSION['post_failed'])){
                            echo $_SESSION['post_failed'];
                            unset($_SESSION['post_failed']);
                        }
                        if(isset($_SESSION['update_failed'])){
                        echo $_SESSION['update_failed'];
                        unset($_SESSION['update_failed']);
                    }
                    ?>
                    </span>
                </h5>
            </div>
            <div class="input-field">
              <input type="text" value="<?php if(isset($_GET['edit'])){ echo $mFeeds->postTitle;}?>" name="postTitle" id="postTitle">
              <label for="postTitle">Enter The Post Title</label>
              <?php
                if(isset($_GET['edit'])){ ?>
                    <input type="hidden" name="postId" id="postId" value="<?php echo $mFeeds->postId; ?>">
              <?php  }
              ?>
            </div>
            <div class="input-field">
              <textarea id="" cols="30" rows="10" name="postContent" class="materialize-textarea" placeholder="Enter Your Post's Contents.." style="height: 300px; "><?php if(isset($_GET['edit'])){ echo $mFeeds->postContent; }?></textarea>
            </div>
            <!--**********end date*********** -->
            <div class ="input-field">
                <label for="start">End Date:</label>
                <input type="date" name="endDate" id="endDate" value="<?php if(isset($_GET['edit'])){ echo $mFeeds->endDate; }?>">
            </div>

            <!--**********number of employee*********** -->
            <div class ="input-field">
                <label for="start">Number of Employee:</label>
                <input type="number" name="num" id="num" value="<?php if(isset($_GET['edit'])){ echo $mFeeds->num; }?>">
            
            <div class="input-field">
                <input id="postImage" type="file" onchange="readURL(this);" name="postImage" class="hide"/>
                <img src="" class="hoverable"  alt="" id="image" style="width:100px;"> 
                <label for="postImage"><i class="material-icons prefix left blue-text" style="font-size: 30px; padding-left: 20px;">camera_alt</i></label>
                <br> <br>
            </div>
            <div class="input-field">
              <input type="submit" name="<?php if(isset($_GET['edit'])){ echo "update"; } else { echo "post"; }?>" value="<?php if(isset($_GET['edit'])){ echo "update"; } else { echo "post"; }?>" id="post" class="btn btn-large" style="width: 100% ;">
            </div>
          </div>
        </form>
        <!-- **************************The navbar menu collection list******************************* -->
        <?php require_once('include/sidenav.php'); ?>
                
        <script>
            //Sending reacts data to the database server without refreshing the page using the ajax system
            function reactsType(){
                var sender_id = document.getElementById['from_user_id'].value;
                var rec_id = document.getElementById('to_user_id').value;
                
            }
        </script>

        <?php require_once('include/footer.php'); ?>
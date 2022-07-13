<?php require_once('include/header.php'); 
    $postResponse = $mFunction->getPosts();

?>
<?php
//  fetching the data from the database server if found title on url 
if(isset($_GET['post']))
{
    $blog_post_title = htmlentities($_GET['post']);
    $mFunction = new Functions;
    $post = $mFunction->getPostByPostTitle($blog_post_title);
}
else
{
    header("LOCATION:index.php");
}
?>
    <main>
        </main>
    <body class="mufazmi blue lighten-5" >
    <?php require_once('include/navbar.php'); ?>
    <?php
        // if rows is less than one means the title which is in url baar is not matching with any data from the database server
        // so here we are going to print the 404 error image instead of using blank page here
        if(empty($post->postId)){ ?>       
            <div class="center">
                <br><br><br> <br><br>
                <h1 class="center blue-text text-lighten-1" style="font-size:150px;"><b>404</b></h1>
                <h5 class="center grey-text">Sorry, Post not found.</h5>
                <a href="home"><i class=" large material-icons">home</i></a>
                <br><br><br><br> <br> <br><br>
            </div>
       <?php
            
            
            require_once('include/footer.php');
            exit();
            }
            $username = "root"; 
            $password = ""; 
            $database = "blog"; 
            $mysqli = new mysqli("localhost", $username, $password, $database); 
            $query = "SELECT * FROM posts";

if(isset($_GET['post'])){
    require_once('blog.php');
}
$mFunction = new Functions;
$posts = $mFunction->getPosts();
            $query = "SELECT * FROM posts";
            if ($result = $mysqli->query($query)) {
                while ($row = $result->fetch_assoc()) {
                    $endDate = $row["endDate"];
                    $num = $row["num"];
            $postCard = <<<HERE
                <div class="card z-depth-0">
                    <img src="uploads/$post->postImage" alt="" style=" width:100%; object-fit:cover;" class="responsive-img" >
                    <p style="font-size: 18px; padding:20px">$post->postContent</p>
                    <p style="font-size: 18px; padding:20px">"End Date" $endDate</p>
                    <p style="font-size: 18px; padding:20px">"Number Required" $num</p>
                </div> 
            HERE;;
        }
    }
        ?>
        <!-- container tag starting form here -->
        <div class="container">
            <div class="center-align">
                <h3 style="font-weight: bold;"><?php echo $post->postTitle; ?></h3>
                <p class="grey-text"><?php echo $post->postTimestamp; ?></p>

                <!-- starting chip / tag section from here -->
                <div class="chip">
                    Popular
                </div>
                <div class="chip">
                    new vacncys
                </div>
                <div class="chip">
                    all
                </div>
            </div> 
        </div>  
        <!-- Page title tags end here -->
        <!-- Row begins -->
            <div class="row">
                <div class="col s12 m8 l8 offset-l1">
                    <?php
                        echo $postCard;
                    ?>
                </div>
                <div class="col s12 m4 l3">
                    <div class="card-image">
                       
                    </div>
                    <div class="card z-depth-0"> 
                        <div class="card-"> <br>
                            <h5 class="center"><i class="material-icons ">face</i>Trending</h5>
                            <?php
                                foreach ($postResponse as $post) {
                                    $postCard = <<<HERE
                                    <a href="?post=$post->postTitle" class="">
                                        <div class="col s2 m2 l5">
                                            <img src="uploads/$post->postImage" style="height:60px; width:100%; object-fit:cover;" alt="" class="responsive-img">
                                        </div>
                                        <div class="row">
                                            <div class="col s10 m10 l7">
                                                <span><b>$post->postTitle</b></span>
                                            </div>
                                        </div>
                                    </a>
                                    HERE;;
                                    echo $postCard;
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="center hide-on-small-only">
            
            </div>
<?php require_once('include/footer.php'); exit(); ?>
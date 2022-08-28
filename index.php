<?php require_once('include/header.php'); ?>
<?php require_once('admin/include/dbcon.php'); ?>
<link rel="stylesheet" href="scroll.css"/>
<?php 
    if(isset($_GET['post'])){
        require_once('blog.php');
    }
    $mFunction = new Functions;
    $posts = $mFunction->getPosts();

?>
    <main>
        
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
        <body>      
    <style>
                table.customTable {
            width: 100%;
            height: 50%;
            position: fixed;
            background-color: #FFFFFF;
            border-collapse: collapse;
            border-width: 2px;
            border-color: #B0F8AB;
            border-style: solid;
            color: #000000;
            
            padding: 100vh 50px 20px;
            }

            table.customTable td, table.customTable th {
            border-width: 2px;
            border-color: #B0F8AB;
            border-style: solid;
            padding: 5px;
                
            }

            table.customTable thead {
            background-color: #6DF872;
            }
            </style>
            <?php require_once('include/header.php'); ?>
            <?php require_once('admin/include/dbcon.php'); ?>
            <?php 
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



            echo '<table class="customTable" border="0" cellspacing="2" cellpadding="2"> 
            <thead>
                <tr> 
                    <td> <font face="Arial">Job Title</font> </td> 
                    <td> <font face="Arial">Job Description</font> </td> 
                    <td> <font face="Arial">Opened date</font> </td> 
                    <td> <font face="Arial">End Date</font> </td> 
                    <td> <font face="Arial">number required</font> </td> 
                    
                </tr>
            </thead>';


            if ($result = $mysqli->query($query)) {
                while ($row = $result->fetch_assoc()) {
                    $field1name = $row["postTitle"];
                    $field2name = $row["postContent"];
                    $field3name = $row["postTimestamp"];
                    $field4name = $row["endDate"];
                    $field5name = $row["num"];

                    
                
                
                            
                    echo '<tr> 
                            
                            <td>'.$field1name.'</td> 
                            <td>'.$field2name.'</td> 
                            <td>'.$field3name.'</td> 
                            <td>'.$field4name.'</td>
                            <td>'.$field5name.'</td>
                            
                        </tr>';
                        
                    }

                        
                }
                

                
                
                $result->free();

            ?>

</body>
        <div class="div_class_name"  >
        <style type="text/css">
  div#div_id_name {
    display:none;
  }
</style>
    
                <?php
                    
                    require_once("include/table.php");
                    

                ?>

</div>

        <!-- Page title tags end here -->
        <!-- Row begins -->
        <div class="row">
            <br>
            <div class="center-align">

                    <h3 style="font-weight: bold;">Recent Posted</h3>
                  <h6 class="grey-text text-darken-2">Here are all the available positions at ECWC</h6>

                </div>
                <br>
                <br>

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

            </div> 
              <!-- row tags end here -->
        </div>
        
        

                   
        </body>
   
   
        
<!DOCTYPE html>
<?php
    require_once("include/functions.php");
    $mFunction = new Functions;
    if (isset($_POST['login']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $mFunction->login($email,$password);
    }
?>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="css/icons.css" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="css/materialize.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body class="red darken-1">
    
    <div class="row">
        <div class="col l4 offset-l4 m6 offset-m3 s12">
            <div class="card" style="border-radius: 20px; padding: 20px; margin-top: 150px;">
                <div class="row">
                    <div class="col s12" style="padding: 15px;">
                        <h5 style="font-weight: bold;">Login</h5>
                        <p class="grey-text" style=" margin-bottom: 30px;">Login into your account to continue...</p>
                        <p class="red-text center-align"><b></b></p>
                        <form action="" method="post">
                            <div class="input-field">
                                <i class="material-icons prefix red-text">email</i>
                                <input type="text" name="email" id="email">
                                <label for="email">Email Address</label>
                                
                            </div>
                            <div class="input-field">
                                <i class="material-icons prefix red-text">lock</i>
                                <input type="password" name="password" id="password">
                                <label for="password">Password</label>
                            </div>
                            <div class="input-field">
                                <input class="btn red"  style="border-radius: 20px;  width:100%; margin-top: 20px;" value="Login" type="submit" name="login" id="login" >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  </body>
  <!-- Compiled and minified JavaScript -->
  <script src="js/materialize.min.js"></script>
</html>
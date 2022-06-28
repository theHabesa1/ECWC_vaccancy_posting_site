<?php require_once('include/header.php');
$users = $func->getUsers();

 ?>


    <main>
        </main>
    <body class="mufazmi blue lighten-5" >
        <nav class="teal">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo center">ECWC</a>
                    <a href="#" class="sidenav-trigger show-on-large" data-target="slide-out"><i class="material-icons">menu</i></a>
                </div>
            </div>
        </nav>
        <div class="">
            <div class="row">
              <table>
                <tr>
                  <th>
                    Image
                  </th>
                  <th>
                    Username
                  </th>
                  <th>
                    Name
                  </th>
                  <th>
                    Email
                  </th>
                  <th>
                    Action
                  </th>
                </tr> 
                <?php 
                foreach ($users as $user) 
                {
                  $usersRowHTML = <<<HERE
                                  <tr>
                    <td>                    
                      <img src="../img/$user->userImage" alt="" class="responsive-img circle" style="width: 60px;">
                    </td>
                    <td>
                    $user->userName<i style="cursor:pointer;" class="material-icons blue-text tiny tooltipped" data-position="top" data-tooltip="Auterized by ecwc">check_circle</i>
                    </td>
                    <td>
                    $user->userName
                    </td>
                    <td>
                    $user->userEmail
                    </td>
                    <td>
                      <a href=""><i class="material-icons">edit</i></a>
                      <a href=""><i class="material-icons red-text">delete</i></a>
                    </td>
                  </tr> 
                  HERE;;
                  echo $usersRowHTML;
                }
                ?>
              </table>
            </div>
          </div>
        <!-- **************************The navbar menu collection list******************************* -->
        <?php require_once('include/sidenav.php'); ?>


        <?php require_once('include/footer.php'); ?>
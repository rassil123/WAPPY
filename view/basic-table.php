
<?php
     require_once '../model/User.php';
     include_once '../helpers/session_helper.php';


$init_admin= new User;

$display= $init_admin->listusers();

$array = json_decode(json_encode($display), true);

?>

<? if(!isset($_SESSION['roles']))
{
  header('location: ../index.php ');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="../assets/style_login.css">
    <!-- icon  home-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<!------------------------------------------------------------------------->
    <script src="https://kit.fontawesome.com/276e144da6.js" crossorigin="anonymous"></script>
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="../index.html">
            <img src="../assets/images/logo.svg" alt="logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="../index.html">
            <img src="../assets/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +050 2992 709</li>
            <li class="nav-item dropdown language-dropdown">
              <a class="nav-link dropdown-toggle px-2 d-flex align-items-center" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-0 mr-md-3">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-us"></i>
                  </div>
                </div>
                <span class="profile-text font-weight-medium d-none d-md-block">English</span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-us"></i>
                  </div>English
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-fr"></i>
                  </div>French
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-ae"></i>
                  </div>Arabic
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-ru"></i>
                  </div>Russian
                </a>
              </div>
            </li>
          </ul>
          <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
              <input type="search" class="form-control" placeholder="Search Here">
            </div>
          </form>
          <ul class="navbar-nav ml-auto">









          
          <li class="nav-item dropdown">
          
              <a class="nav-link count-indicator" id="messageDropdown" href="index.php" data-toggle="dropdown" aria-expanded="false">
              <i class="fa-thin fa-house-blank"></i>
               <!-- <span class="count">7</span>--> <!--  numero 7 des notification span pour la classe notification ligne 99-->
              </a>

              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>

                <div class="dropdown-divider"></div>
                      <a class="dropdown-item preview-item">
                          <!-- image du visage dans le cercla-->
                        <div class="preview-thumbnail">
                          <img src="../assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                        </div>

                        <div class="preview-item-content flex-grow py-2">
                          <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                          <p class="font-weight-light small-text"> The meeting is cancelled </p>
                        </div>

                      </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li>
            

        
            <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="../index.php">
            <span class="material-symbols-outlined">home</span></i>
                
              </a></li>











            <!--<li class="nav-item dropdown" >
                partie cloche a grader si utilisation de notifications

              <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count">7</span>
                   numero 7 des notification span pour la classe notification ligne 99-->
              <!--</a>-->
    
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                 
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>

                <div class="dropdown-divider"></div>
                      <a class="dropdown-item preview-item">
                          <!-- image du visage dans le cercla-->
                        <div class="preview-thumbnail">
                       
                          <img src="../assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                        </div>

                        <div class="preview-item-content flex-grow py-2">
                          <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                          <p class="font-weight-light small-text"> The meeting is cancelled </p>
                        </div>

                      </a>



                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li>

            

            <!--<li class="nav-item dropdown">-->
              <!--<a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-email-outline"></i>
                <span class="count bg-success">3</span>
              </a> icone de messagerie -->
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                <a class="dropdown-item py-3 border-bottom">
                  <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>

                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-alert m-auto text-primary"></i>
                  </div>

                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                    <p class="font-weight-light small-text mb-0"> Just now </p>
                  </div>
                </a>


                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-settings m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                    <p class="font-weight-light small-text mb-0"> Private message </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-airballoon m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                    <p class="font-weight-light small-text mb-0"> 2 days ago </p>
                  </div>
                </a>
              </div>
            </li>

          
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="../assets/images/faces/face8.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="../assets/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold"><?= $_SESSION['username']?></p>
                  <p class="font-weight-light text-muted mb-0"><?= $_SESSION['useremail']?></p>


                </div>
                <a href="profile.php" class="dropdown-item">Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <!--<a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>-->
                <a class="dropdown-item" href="../controller/Users.php?q=logout">Log Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>

            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="../assets/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?= $_SESSION['username']?></p>
                  <p class="designation">Admin</p>
                </div>
              </a>
            </li>

            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
                <a class="nav-link" href="basic-table.php">
                  <i class="menu-icon typcn typcn-document-text"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
            </li>

            
            <li class="nav-item">
              <a class="nav-link" href="../forum/nft/back/src/forumback.php">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Forum</span>
              </a>
            </li>
           
            
            
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
        
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
<!-- export link-->
                <div class="dropdown ml-lg-auto ml-3 toolbar-item">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownexport" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</button>
                      <div class="dropdown-menu" aria-labelledby="dropdownexport">
                        <!--<a class="dropdown-item" href="">Export as PDF</a>-->
                        <a class="dropdown-item" href="../controller/export.php">Export as XLS</a>
                        <!--<a class="dropdown-item" href="#">Export as CDR</a>-->
                      </div>
                    </div>


                  <div class="card-body">
                    <h4 class="card-title">Striped Table</h4>
                   <!-- <p class="card-description"> Add class <code>.table-striped</code> </p>-->
                    <!--                     body tableau                 -->
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Username </th>
                          <th> Useremail</th>
                          <th> Role </th>
                          <th colspan="2" text-align="center"> action</th>
                        </tr>
                      </thead>
                      <tbody> 
                              <!-- affichage en boucle des donnes a partir de la base de donne -->
                              <?php
                                foreach($array as $produit){
                                  ?>
                                  <tr>
                                    <td><?= $produit['username']?></td>
                                    <td><?= $produit['useremail']?></td>
                                    <td> <?php echo ($test=$produit["roles"]=="admine")? "Admin":"User" ?>
                                    
                                    <td><a onclick="if (confirm('Delete <?= $produit['username']?>`s account from the data base')){return true;}else{event.stopPropagation(); event.preventDefault();};" href="deleteuser.php?username=<?php echo $produit['username']; ?>">Delete</a></td>
                                            <!-- vous allez etre redireger de cette page-->
                                            <!-- href= echange.php?idnft-->
                                    
                                      
                                  </tr>
                                <?php }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Add User</h4>
                        <p class="card-description"> Please fill up this fom </p>
                        <?php flash('register') ?>

                        <form class="forms-sample" method="post" action="../controller/Users.php">
                              <input type="hidden" name="type" value="register_admin">
                              
                              <div class="form-group">
                                  <label for="exampleInputEmail1">User name</label>
                                  <input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="Firstname lastname">
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputEmail1">Email address</label>
                                  <input type="email" class="form-control" name="useremail" id="exampleInputEmail1" placeholder="Enter email">
                                </div>


                                <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" name="userpwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputPassword1">Confirm password</label>
                                  <input type="password" name="pwdRepeat" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>

                                <button type="submit" class="btn btn-success mr-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                        </form>
                      </div>
                    </div>          

          
          <!-- content-wrapper ends -->
          <!-- partial:../partials/_footer.html -->

          <!--<footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>-->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../assets/js/shared/off-canvas.js"></script>
    <script src="../assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
    <!-- End custom js for this page-->
  </body>
</html>

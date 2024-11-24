<?php
     require_once '../model/User.php';
     include_once '../helpers/session_helper.php';


$init_admin= new User;

$display= $init_admin->listusers();
$array = json_decode(json_encode($display), true);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profile</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="../assets/style_login.css">
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
    <!-- home -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../partials/_navbar.html -->
      
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../partials/_sidebar.html -->
        
        <!-- partial -->
        <div class="main-panel">
          
            <div class="row">
            
        
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                  <div class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="../index.php">
            <span class="material-symbols-outlined">home</span></i>
                
              </a></div>
              
                    <h4 class="card-title">Profile details</h4>
                    <!--                     body tableau                 -->
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Username </th>
                          <th> Useremail</th>
                          <th> action</th>
                        </tr>
                      </thead>
                      <tbody> 
                              <!-- affichage en boucle des donnes a partir de la base de donne -->
                              <?php
                                ?>
                                  <tr>
                                    <td><?=$_SESSION['username']?></td>
                                    <td><?=$_SESSION['useremail']?></td>

                                      <td><a onclick="if (confirm('Delete <?= $produit['username']?>`s account from the data base')){return true;}else{event.stopPropagation(); event.preventDefault();};" href="deleteuser.php?username=<?php echo $produit['username']; ?>">Delete</a></td>

                                      <td>
                                      <?php flash('update_username') ?>

                                        <form method="post" action="../controller/Users.php" id="myForm">
                                        <input type="hidden" name="type" value="update_username">

                                        <label for="username">
                                          New Username
                                        </label>

                                        <input type="text" name="username" id="username" placeholder="New Username">
                                        
                                        <input type="hidden" name="useremail" value="<?=$_SESSION['useremail']?>">

                                        <button type="submit" + name="submit">Confirm</button>
                                        </form>
                                        </td>

                                        
                                      <td><button onclick="myFunction()">update user name</button></td>
                                  
                                  
                                  <td>

                                      <?php flash('update_username') ?>
                                      
                                        <form method="post" action="../controller/Users.php" id="myForm_pwd">
                                        <input type="hidden" name="type" value="update_userpwd">

                                        <label for="pwd">
                                          New password
                                        </label>

                                        <input type="text" name="userpwd" id="pwd" placeholder="New password">
                                        
                                        <input type="hidden" name="useremail" value="<?=$_SESSION['useremail']?>">

                                        <button type="submit" + name="submit">Confirm</button>
                                        </form>
                                        </td>

                                        
                                      <td><button onclick="myFunction_form_pwd()">update user password</button></td>
                                  </tr>
                                <?php ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
            </div>
            

          
            <!-- content-wrapper ends -->
            <!-- partial:../partials/_footer.html -->
          
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
    <script src="../assets/js/shared/jqu ery.cookie.js" type="text/javascript"></script>
    <!-- End custom js for this page-->

    <script>
function myFunction() {
  var x = document.getElementById("myForm");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function myFunction_form_pwd() {
  var x = document.getElementById("myForm_pwd");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

</script>
  </body>
</html>

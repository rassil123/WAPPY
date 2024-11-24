<?php 
    require_once '../helpers/session_helper.php';
   
     require_once '../model/annonces.php';
    


$init_admin= new annonce;

$display= $init_admin->listnft();

$array = json_decode(json_encode($display), true);


    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NFTC - Explore world's best NFT</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="../favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="../assets/css/style1.css">

  <link rel="stylesheet" href="../assets/style_dropdown_menu.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:wght@600;900&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
    
    <!-- link vers les icons du menu dropdown-->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <!-- icon de logout--> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

 

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#" class="logo">
        <img src="../assets/images/logo_swappy.svg" width="68" height="48" alt="NFTC Logo">
      </a>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <p class="navbar-title">Menu</p>

          <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
            <ion-icon name="close-circle-outline"></ion-icon>
          </button>
        </div>
        




        
        <ul class="navbar-list">

          <li>
            <a href="../index.php" class="navbar-link" data-navlink>Home</a>
          </li>

    <?php if(isset($_SESSION['roles'])){  ?>
          <li>
            <a href="../ view/basic-table.php" class="navbar-link" data-navlink>Dashboard</a>
          </li>
  <?php } ?>
          <li>
            <a <?php if(isset($_SESSION['useremail'])){echo(" href="."../view/ajout_annonces.php"."");}else{echo(" href="."../view/login.php"."");}?> class="navbar-link"  data-navlink>ajouter annonces</a>
          </li>

          <li>
            <a <?php if(isset($_SESSION['useremail'])){echo(" href="."../view/affichage_des_annonces.php"."");}else{echo(" href="."../view/login.php"."");}?> class="navbar-link"  data-navlink>afficher les annonces</a>
          </li>

          

          <li>
            <a href="#" class="navbar-link" data-navlink>Forum</a>
          </li>


        </ul>

      </nav>

      <!-- drop-->
      <button class="menu-open-btn" aria-label="Open Menu" data-nav-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <!--/*<?php/* if(!isset($_SESSION['usersId'])) :*/ ?>-->
          
      <?php 
      if(!isset($_SESSION['username']))
      {
        echo("<a href="."view/signup.php"." class="."btn"." aria-labelledby="."wallet".">
            <!--<ion-icon name="."wallet-outline"."></ion-icon>-->

            <span id="."wallet".">Sign up</span>
          </a>
          <a href="."view/login.php"." class="."btn"." aria-labelledby="."wallet".">
            <!--<ion-icon name="."wallet-outline"."></ion-icon>-->

            <span id="."wallet".">Login</span>
          </a>

                  <!--                     dropdown menu   affichier seulement si connecete    -->
      ");} ?>
      
      <?php 
      if(isset($_SESSION['username']))
      {
        echo("
        <div class="."action".">
        <div class="."profile"." onclick="."menuToggle();".">
            <img src="."../assets/images/user1.png"." alt=".">
        </div>

        <div class="."menu".">
            <h3>
                ".$_SESSION['username']."
                
                
            </h3>
            <ul>
                <li>
                    <span class="."material-icons icons-size".">person</span>
                    <a href="."../view/profile.php".">My Profile</a>
                </li>
                
                
                <li>
                <span class="."material-symbols-outlined".">logout</span>
                <a href="."../controller/Users.php?q=logout".">Logout</a>
                </li>
                



         

            </ul>
        </div>
    </div>
    <script>
        function menuToggle(){
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }
    </script>"); }?>
<!---------------------------------------------------------------------dropdown menu---------------------------------------------------------------->

          

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      





      <!-- 
        - #EXPLORE
      -->

      <section class="section explore" id="explore" style="margin-bottom: 150px;">
        <div class="container">

          <p class="section-subtitle">Exclusive Assets</p>

          <div class="title-wrapper">
            <h2 class="h2 section-title">Explore</h2>

            <a href="#" class="btn-link">
              <span>Explore All</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </div>

          <ul class="grid-list">
          <?php
                                foreach($array as $produit){
                                  ?>
            <li>
            
              <div class="card explore-card">
             
                <figure class="card-banner">
                  <a href="#">
                    <img src="<?= $produit['lien']?>" width="600" height="600" loading="lazy"
                      alt="Walking On Air" class="img-cover">
                  </a>
                </figure>

                <h3 class="h3 card-title">
                  <a href="#"><?= $produit['namenft']?></a>
                </h3>

                <span class="card-author">
                  Owned By <a href="#" class="author-link"><?= $produit['idusergiver']?></a>
                </span>

                <div class="wrapper">
                  

                  <span class="wrapper-item">1 of 1</span>
                </div>

                <a  onclick="if (confirm('vous allez etre rediregee de page')){return true;}else{event.stopPropagation(); event.preventDefault();};" href="ajouternftaechanger.php?liennfttoswapwith=<?php echo $produit['lien']; ?>&usergiver=<?php echo $produit['idusergiver']; ?>&namenft=<?php echo $produit['namenft'];?>;">
                  <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>

                  <span>Trade</span>
                                </a>
                
              </div>
            </li>
            <?php }?>

            

          </ul>

        </div>
      </section>





      <!-- 
        - #TOP SELLER
      -->

      





      <!-- 
        - #COLLECTION
      -->

      





      <!-- 
        - #INSTRUCTION
      -->

      

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <div class="footer-top">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/logo_swappy.svg" width="68" height="48" alt="NFTC Logo">
          </a>

          <p class="footer-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis non, fugit totam vel laboriosam vitae.
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-discord"></ion-icon>
                <ion-icon name="logo-discord"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Useful Links</p>
          </li>

          <li>
            <a href="#" class="footer-link">All NFTs</a>
          </li>

          <li>
            <a href="#" class="footer-link">How It Works</a>
          </li>

          <li>
            <a href="#" class="footer-link">Create</a>
          </li>

          <li>
            <a href="#" class="footer-link">Explore</a>
          </li>

          <li>
            <a href="#" class="footer-link">Privacy & Terms</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Community</p>
          </li>

          <li>
            <a href="#" class="footer-link">Help Center</a>
          </li>

          <li>
            <a href="#" class="footer-link">Partners</a>
          </li>

          <li>
            <a href="#" class="footer-link">Suggestions</a>
          </li>

          <li>
            <a href="#" class="footer-link">Blog</a>
          </li>

          <li>
            <a href="#" class="footer-link">Newsletter</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="footer-list-title">Subscribe Us</p>

          <form action="" class="newsletter-form">
            <input type="email" name="email" placeholder="info@yourmail.com" required class="newsletter-input">

            <button type="submit" class="newsletter-btn" aria-label="Submit">
              <ion-icon name="paper-plane-outline"></ion-icon>
            </button>
          </form>

        </div>

      </div>

      <div class="footer-bottom">
        <p class="copyright">
          &copy; 2022 <a href="#" class="copyright-link">codewithsadee</a>. All Rights Reserved
        </p>
      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-to-top" aria-label="Back to Top" data-back-top-btn>
    <ion-icon name="arrow-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>



NIVEAU FORMULAIRE --------> OK accepte
input type= hidden name=idClient 
input type= hidden name=nomreclamation      -------> $_POST[nomreclamation] = $_SESSION['nomreclamation'] 
input type= hidden name=sujetreclamation    -------> $_POST[sujetreclamation] = $_SESSION['sujetreclamation']



LORS DE LA LIAISON AVEC LA BASE 
IDC == ??

reclamation->getsubjectreclamation()
reclamation->get('IDC')

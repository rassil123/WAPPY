<?php 
    require_once 'helpers/session_helper.php';
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
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style1.css">

  <link rel="stylesheet" href="./assets/style_dropdown_menu.css">

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
        <img src="./assets/images/logo_swappy.svg" width="68" height="48" alt="NFTC Logo">
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
            <a href="index.php" class="navbar-link" data-navlink>Home</a>
          </li>

    <?php if(isset($_SESSION['roles'])){  ?>
          <li>
            <a href="view/basic-table.php" class="navbar-link" data-navlink>Dashboard</a>
          </li>
  <?php } ?>
          <li>
            <a <?php if(isset($_SESSION['useremail'])){echo(" href="."view/ajout_annonces.php"."");}else{echo(" href="."view/login.php"."");}?> class="navbar-link" data-navlink>Annonces</a>
          </li>

          <li>
            <a <?php if(isset($_SESSION['useremail'])){echo(" href="."view/affichage_des_annonces.php"."");}else{echo(" href="."view/login.php"."");}?> class="navbar-link"  data-navlink>Afficher les annonces</a>
          </li>

          <li>
            <a <?php if(isset($_SESSION['useremail'])){echo(" href="."forum/nft/aa2.php"."");}else{echo(" href="."view/login.php"."");}?> class="navbar-link" data-navlink>Forum</a>
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
            <img src="."assets/images/user1.png"." alt=".">
        </div>

        <div class="."menu".">
            <h3>
                ".$_SESSION['username']."
                
                
            </h3>
            <ul>
                <li>
                    <span class="."material-icons icons-size".">person</span>
                    <a href="."view/profile.php".">My Profile</a>
                </li>

                
                
                <li>
                <span class="."material-symbols-outlined".">logout</span>
                <a href="."controller/Users.php?q=logout".">Logout</a>
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

      <section class="hero" id="home">

        <div class="container">

          <p class="section-subtitle">Netstorm</p>

          <h2 class="h1 hero-title">Discover, collect, and trade extraordinary NFTs</h2>

          <p class="hero-text">
            Discover a new way of collecting NFTs on the world's best & largest NFT marketplace
          </p>

          <div class="btn-group">

            <button class="btn">
              <ion-icon name="rocket-outline" aria-hidden="true"></ion-icon>

              <span>Explore</span>
            </button>

            <button class="btn">
              <ion-icon name="create-outline" aria-hidden="true"></ion-icon>

              <span>Trade</span>
            </button>

          </div>

        </div>

        <svg class="hero-bg-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 465" version="1.1">
          <defs>
            <linearGradient x1="49.7965246%" y1="28.2355058%" x2="49.7778147%" y2="98.4657689%" id="linearGradient-1">
              <stop stop-color="rgba(69,40,220, 0.15)" offset="0%"></stop>
              <stop stop-color="rgba(87,4,138, 0.15)" offset="100%"></stop>
            </linearGradient>
          </defs>
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <polygon points="" fill="url(#linearGradient-1)">
              <animate id="graph-animation" xmlns="http://www.w3.org/2000/svg" dur="2s" repeatCount=""
                attributeName="points"
                values="0,464 0,464 111.6,464 282.5,464 457.4,464 613.4,464 762.3,464 912.3,464 1068.2,464 1191.2,464 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,323.3 282.5,373 457.4,423.8 613.4,464 762.3,464 912.3,464 1068.2,464 1191.2,464 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,336.6 457.4,363.5 613.4,414.4 762.3,464 912.3,464 1068.2,464 1191.2,464 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,323.3 613.4,340 762.3,425.6 912.3,464 1068.2,464 1191.2,464 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,290.4 762.3,368 912.3,446.4 1068.2,464 1191.2,464 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,329.6 912.3,420 1068.2,427.6 1191.2,464 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,272 912.3,402.4 1068.2,373 1191.2,412 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,272 912.3,376 1068.2,336.6 1191.2,334 1328.1,404 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,272 912.3,376 1068.2,282 1191.2,282 1328.1,314 1440.1,372.8 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,272 912.3,376 1068.2,282 1191.2,204 1328.1,254 1440.1,236 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,272 912.3,376 1068.2,282 1191.2,204 1328.1,164 1440.1,144.79999999999998 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,272 912.3,376 1068.2,282 1191.2,204 1328.1,164 1440.1,8 1440.1,464 0,464;"
                fill="freeze"></animate>
            </polygon>
          </g>
        </svg>

      </section>





      <!-- 
        - #EXPLORE
      -->

      <section class="section explore" id="explore">
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

            <li>
              <div class="card explore-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/auction-1.jpg" width="600" height="600" loading="lazy"
                      alt="Walking On Air" class="img-cover">
                  </a>
                </figure>

                <h3 class="h3 card-title">
                  <a href="#">Walking On Air</a>
                </h3>

                <span class="card-author">
                  Owned By <a href="#" class="author-link">Richard</a>
                </span>

                <div class="wrapper">
                  <data class="wrapper-item" value="1.5">1.5 ETH</data>

                  <span class="wrapper-item">1 of 1</span>
                </div>

                <button class="btn">
                  <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>

                  <span>Trade</span>
                </button>

              </div>
            </li>

            <li>
              <div class="card explore-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/auction-2.jpg" width="600" height="600" loading="lazy" alt="Domain Names"
                      class="img-cover">
                  </a>
                </figure>

                <h3 class="h3 card-title">
                  <a href="#">Domain Names</a>
                </h3>

                <span class="card-author">
                  Owned By <a href="#" class="author-link">John Deo</a>
                </span>

                <div class="wrapper">
                  <data class="wrapper-item" value="2.7">2.7 ETH</data>

                  <span class="wrapper-item">1 of 1</span>
                </div>

                <button class="btn">
                  <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>

                  <span>Trade</span>
                </button>

              </div>
            </li>

            <li>
              <div class="card explore-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/auction-3.jpg" width="600" height="600" loading="lazy" alt="Trading Cards"
                      class="img-cover">
                  </a>
                </figure>

                <h3 class="h3 card-title">
                  <a href="#">Trading Cards</a>
                </h3>

                <span class="card-author">
                  Owned By <a href="#" class="author-link">Arham</a>
                </span>

                <div class="wrapper">
                  <data class="wrapper-item" value="2.3">2.3 ETH</data>

                  <span class="wrapper-item">1 of 1</span>
                </div>

                <button class="btn">
                  <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>

                  <span>Trade</span>
                </button>

              </div>
            </li>

            <li>
              <div class="card explore-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/auction-4.jpg" width="600" height="600" loading="lazy"
                      alt="Industrial Revolution" class="img-cover">
                  </a>
                </figure>

                <h3 class="h3 card-title">
                  <a href="#">Industrial Revolution</a>
                </h3>

                <span class="card-author">
                  Owned By <a href="#" class="author-link">Yasmin</a>
                </span>

                <div class="wrapper">
                  <data class="wrapper-item" value="1.8">1.8 ETH</data>

                  <span class="wrapper-item">1 of 1</span>
                </div>

                <button class="btn">
                  <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>

                  <span>Trade</span>
                </button>

              </div>
            </li>

            <li>
              <div class="card explore-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/auction-5.jpg" width="600" height="600" loading="lazy" alt="Utility"
                      class="img-cover">
                  </a>
                </figure>

                <h3 class="h3 card-title">
                  <a href="#">Utility</a>
                </h3>

                <span class="card-author">
                  Owned By <a href="#" class="author-link">Junaid</a>
                </span>

                <div class="wrapper">
                  <data class="wrapper-item" value="1.7">1.7 ETH</data>

                  <span class="wrapper-item">1 of 1</span>
                </div>

                <button class="btn">
                  <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>

                  <span>Trade</span>
                </button>

              </div>
            </li>

            <li>
              <div class="card explore-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/auction-6.jpg" width="600" height="600" loading="lazy" alt="Sports"
                      class="img-cover">
                  </a>
                </figure>

                <h3 class="h3 card-title">
                  <a href="#">Sports</a>
                </h3>

                <span class="card-author">
                  Owned By <a href="#" class="author-link">ArtNox</a>
                </span>

                <div class="wrapper">
                  <data class="wrapper-item" value="1.7">1.7 ETH</data>

                  <span class="wrapper-item">1 of 1</span>
                </div>

                <button class="btn">
                  <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>

                  <span>Trade</span>
                </button>

              </div>
            </li>

            <li>
              <div class="card explore-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/auction-7.jpg" width="600" height="600" loading="lazy"
                      alt="Cartoon Heroes" class="img-cover">
                  </a>
                </figure>

                <h3 class="h3 card-title">
                  <a href="#">Cartoon Heroes</a>
                </h3>

                <span class="card-author">
                  Owned By <a href="#" class="author-link">Junaid</a>
                </span>

                <div class="wrapper">
                  <data class="wrapper-item" value="3.2">3.2 ETH</data>

                  <span class="wrapper-item">1 of 1</span>
                </div>

                <button class="btn">
                  <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>

                  <span>Trade</span>
                </button>

              </div>
            </li>

            <li>
              <div class="card explore-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/auction-8.jpg" width="600" height="600" loading="lazy" alt="Gaming Chair"
                      class="img-cover">
                  </a>
                </figure>

                <h3 class="h3 card-title">
                  <a href="#">Gaming Chair</a>
                </h3>

                <span class="card-author">
                  Owned By <a href="#" class="author-link">Johnson</a>
                </span>

                <div class="wrapper">
                  <data class="wrapper-item" value="0.69">0.69 ETH</data>

                  <span class="wrapper-item">1 of 1</span>
                </div>

                <button class="btn">
                  <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>

                  <span>Trade</span>
                </button>

              </div>
            </li>

            <li>
              <div class="card explore-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/auction-9.jpg" width="600" height="600" loading="lazy" alt="Utility"
                      class="img-cover">
                  </a>
                </figure>

                <h3 class="h3 card-title">
                  <a href="#">Utility</a>
                </h3>

                <span class="card-author">
                  Owned By <a href="#" class="author-link">Junaid</a>
                </span>

                <div class="wrapper">
                  <data class="wrapper-item" value="1.7">1.7 ETH</data>

                  <span class="wrapper-item">1 of 1</span>
                </div>

                <button class="btn">
                  <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>

                  <span>Trade</span>
                </button>

              </div>
            </li>

            <li>
              <div class="card explore-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/auction-10.jpg" width="600" height="600" loading="lazy" alt="Sports"
                      class="img-cover">
                  </a>
                </figure>

                <h3 class="h3 card-title">
                  <a href="#">Sports</a>
                </h3>

                <span class="card-author">
                  Owned By <a href="#" class="author-link">ArtNox</a>
                </span>

                <div class="wrapper">
                  <data class="wrapper-item" value="1.7">1.7 ETH</data>

                  <span class="wrapper-item">1 of 1</span>
                </div>

                <button class="btn">
                  <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>

                  <span>Trade</span>
                </button>

              </div>
            </li>

            <li>
              <div class="card explore-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/auction-11.jpg" width="600" height="600" loading="lazy"
                      alt="Cartoon Heroes" class="img-cover">
                  </a>
                </figure>

                <h3 class="h3 card-title">
                  <a href="#">Cartoon Heroes</a>
                </h3>

                <span class="card-author">
                  Owned By <a href="#" class="author-link">Junaid</a>
                </span>

                <div class="wrapper">
                  <data class="wrapper-item" value="3.2">3.2 ETH</data>

                  <span class="wrapper-item">1 of 1</span>
                </div>

                <button class="btn">
                  <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>

                  <span>Trade</span>
                </button>

              </div>
            </li>

            <li>
              <div class="card explore-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/auction-12.jpg" width="600" height="600" loading="lazy" alt="Gaming Chair"
                      class="img-cover">
                  </a>
                </figure>

                <h3 class="h3 card-title">
                  <a href="#">Gaming Chair</a>
                </h3>

                <span class="card-author">
                  Owned By <a href="#" class="author-link">Johnson</a>
                </span>

                <div class="wrapper">
                  <data class="wrapper-item" value="0.69">0.69 ETH</data>

                  <span class="wrapper-item">1 of 1</span>
                </div>

                <button class="btn">
                  <ion-icon name="bag-add-outline" aria-hidden="true"></ion-icon>

                  <span>Trade</span>
                </button>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #TOP SELLER
      -->

      <section class="section top-seller" id="top-seller">
        <div class="container">

          <p class="section-subtitle">Creative Artist</p>

          <h2 class="h2 section-title">Top Traders</h2>

          <ul class="grid-list">

            <li>
              <div class="card top-seller-card">

                <figure class="card-avatar">
                  <a href="#">
                    <img src="./assets/images/avatar-1.jpg" width="64" height="64" loading="lazy" alt="Richard">
                  </a>
                </figure>

                <div>
                  <h3 class="card-title">
                    <a href="#">@Richard</a>
                  </h3>

                  <data value="1.5">1.5 BNB</data>
                </div>

              </div>
            </li>

            <li>
              <div class="card top-seller-card">

                <figure class="card-avatar">
                  <a href="#">
                    <img src="./assets/images/avatar-2.jpg" width="64" height="64" loading="lazy" alt="John Deo">
                  </a>
                </figure>

                <div>
                  <h3 class="card-title">
                    <a href="#">@JohnDeo</a>
                  </h3>

                  <data value="2.3">2.3 BNB</data>
                </div>

              </div>
            </li>

            <li>
              <div class="card top-seller-card">

                <figure class="card-avatar">
                  <a href="#">
                    <img src="./assets/images/avatar-3.jpg" width="64" height="64" loading="lazy" alt="Junaid">
                  </a>
                </figure>

                <div>
                  <h3 class="card-title">
                    <a href="#">@Junaid</a>
                  </h3>

                  <data value="2.5">2.5 BNB</data>
                </div>

              </div>
            </li>

            <li>
              <div class="card top-seller-card">

                <figure class="card-avatar">
                  <a href="#">
                    <img src="./assets/images/avatar-4.jpg" width="64" height="64" loading="lazy" alt="Yasmin">
                  </a>
                </figure>

                <div>
                  <h3 class="card-title">
                    <a href="#">@Yasmin</a>
                  </h3>

                  <data value="1.9">1.9 BNB</data>
                </div>

              </div>
            </li>

            <li>
              <div class="card top-seller-card">

                <figure class="card-avatar">
                  <a href="#">
                    <img src="./assets/images/avatar-5.jpg" width="64" height="64" loading="lazy" alt="Arham H">
                  </a>
                </figure>

                <div>
                  <h3 class="card-title">
                    <a href="#">@ArhamH</a>
                  </h3>

                  <data value="3.2">3.2 BNB</data>
                </div>

              </div>
            </li>

            <li>
              <div class="card top-seller-card">

                <figure class="card-avatar">
                  <a href="#">
                    <img src="./assets/images/avatar-6.jpg" width="64" height="64" loading="lazy" alt="Sara">
                  </a>
                </figure>

                <div>
                  <h3 class="card-title">
                    <a href="#">@Sara</a>
                  </h3>

                  <data value="4.7">4.7 BNB</data>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #COLLECTION
      -->

      <section class="section collection" id="collection">
        <div class="container">

          <p class="section-subtitle">Most Popular</p>

          <div class="title-wrapper">
            <h2 class="h2 section-title">Popular Collections</h2>

            <a href="#" class="btn-link">
              <span>View All</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </div>

          <ul class="grid-list">

            <li>
              <a href="#" class="card collection-card">

                <figure class="card-banner">
                  <img src="./assets/images/author-banner-1.jpg" width="600" height="450" loading="lazy"
                    alt="Virtual Worlds" class="img-cover">
                </figure>

                <figure class="card-avatar">
                  <img src="./assets/images/avatar-1.jpg" width="64" height="64" loading="lazy" alt="card avatar">
                </figure>

                <h3 class="h3 card-title">Virtual Worlds</h3>

                <span class="card-text">ERC-729</span>

              </a>
            </li>

            <li>
              <a href="#" class="card collection-card">

                <figure class="card-banner">
                  <img src="./assets/images/author-banner-2.jpg" width="600" height="450" loading="lazy"
                    alt="Digital Arts" class="img-cover">
                </figure>

                <figure class="card-avatar">
                  <img src="./assets/images/avatar-2.jpg" width="64" height="64" loading="lazy" alt="card avatar">
                </figure>

                <h3 class="h3 card-title">Digital Arts</h3>

                <span class="card-text">ERC-522</span>

              </a>
            </li>

            <li>
              <a href="#" class="card collection-card">

                <figure class="card-banner">
                  <img src="./assets/images/author-banner-3.jpg" width="600" height="450" loading="lazy" alt="Sports"
                    class="img-cover">
                </figure>

                <figure class="card-avatar">
                  <img src="./assets/images/avatar-3.jpg" width="64" height="64" loading="lazy" alt="card avatar">
                </figure>

                <h3 class="h3 card-title">Sports</h3>

                <span class="card-text">ERC-495</span>

              </a>
            </li>

            <li>
              <a href="#" class="card collection-card">

                <figure class="card-banner">
                  <img src="./assets/images/author-banner-4.jpg" width="600" height="450" loading="lazy"
                    alt="Photography" class="img-cover">
                </figure>

                <figure class="card-avatar">
                  <img src="./assets/images/avatar-4.jpg" width="64" height="64" loading="lazy" alt="card avatar">
                </figure>

                <h3 class="h3 card-title">Photography</h3>

                <span class="card-text">ERC-873</span>

              </a>
            </li>

            <li>
              <a href="#" class="card collection-card">

                <figure class="card-banner">
                  <img src="./assets/images/author-banner-5.jpg" width="600" height="450" loading="lazy"
                    alt="Collectibles" class="img-cover">
                </figure>

                <figure class="card-avatar">
                  <img src="./assets/images/avatar-5.jpg" width="64" height="64" loading="lazy" alt="card avatar">
                </figure>

                <h3 class="h3 card-title">Collectibles</h3>

                <span class="card-text">ERC-972</span>

              </a>
            </li>

            <li>
              <a href="#" class="card collection-card">

                <figure class="card-banner">
                  <img src="./assets/images/author-banner-6.jpg" width="600" height="450" loading="lazy"
                    alt="Trading Cards" class="img-cover">
                </figure>

                <figure class="card-avatar">
                  <img src="./assets/images/avatar-6.jpg" width="64" height="64" loading="lazy" alt="card avatar">
                </figure>

                <h3 class="h3 card-title">Trading Cards</h3>

                <span class="card-text">ERC-397</span>

              </a>
            </li>

            <li>
              <a href="#" class="card collection-card">

                <figure class="card-banner">
                  <img src="./assets/images/author-banner-7.jpg" width="600" height="450" loading="lazy"
                    alt="Walking On Air" class="img-cover">
                </figure>

                <figure class="card-avatar">
                  <img src="./assets/images/avatar-7.jpg" width="64" height="64" loading="lazy" alt="card avatar">
                </figure>

                <h3 class="h3 card-title">Walking On Air</h3>

                <span class="card-text">ERC-403</span>

              </a>
            </li>

            <li>
              <a href="#" class="card collection-card">

                <figure class="card-banner">
                  <img src="./assets/images/author-banner-8.jpg" width="600" height="450" loading="lazy"
                    alt="Domain Names" class="img-cover">
                </figure>

                <figure class="card-avatar">
                  <img src="./assets/images/avatar-8.jpg" width="64" height="64" loading="lazy" alt="card avatar">
                </figure>

                <h3 class="h3 card-title">Domain Names</h3>

                <span class="card-text">ERC-687</span>

              </a>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #INSTRUCTION
      -->

      <section class="section instruction" id="instruction">
        <div class="container">

          <p class="section-subtitle">How It Works</p>

          <h2 class="h2 section-title">Create and sell your NFTs</h2>

          <ul class="grid-list">

            <li class="instruction-item">

              <div class="instruction-icon">
                <ion-icon name="wallet-outline"></ion-icon>
              </div>

              <h3 class="instruction-title">Set up your wallet</h3>

              <p class="instruction-text">
                Once you’ve set up your wallet of choice, connect it to OpenSea by clicking the NFT Marketplace in the
                top right corner.
                Learn about the wallets we support.
              </p>

            </li>

            <li class="instruction-item">

              <div class="instruction-icon">
                <ion-icon name="grid-outline"></ion-icon>
              </div>

              <h3 class="instruction-title">Create your collection</h3>

              <p class="instruction-text">
                Click Create and set up your collection. Add social links, a description, profile & banner images, and
                set a secondary
                sales fee.
              </p>

            </li>

            <li class="instruction-item">

              <div class="instruction-icon">
                <ion-icon name="file-tray-outline"></ion-icon>
              </div>

              <h3 class="instruction-title">Add your NFTs</h3>

              <p class="instruction-text">
                Upload your work (image, video, audio, or 3D art), add a title and description, and customize your NFTs
                with properties,
                stats, and unlockable content.
              </p>

            </li>

            <li class="instruction-item">

              <div class="instruction-icon">
                <ion-icon name="bag-handle-outline"></ion-icon>
              </div>

              <h3 class="instruction-title">List them for trade</h3>

              <p class="instruction-text">
                Choose between auctions. You choose how you want to
                trade your NFTs!
              </p>

            </li>

          </ul>

        </div>
      </section>

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

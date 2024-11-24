<?php 
    
    include_once '../helpers/session_helper.php';

    
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../assets/style_login.css" rel="stylesheet" type="text/css">
        <title>Login</title>
    </head>
    
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@600;900&family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet">

    <body>
        
    </body>
    </html>
    

    <?php /*flash('login')*/ ?>
<div class="submission-form">
<h1>Please Login</h1>

                <?php flash('login') ?>

            <form method="post" action="../controller/Users.php">
                <input type="hidden" name="type" value="login">

                    <label for="username">
                    Username
                    </label>
                    <input type="text" name="useremail"  
                    placeholder="Email..." id="username">

                    <label for="password">
                    Password
                    </label>
                    <input type="password" name="userpwd" 
                    placeholder="Password...">

                    <button type="submit" id="sendBtn" name="submit">Log In</button>
                    
            </form>

            <span class="form-sub-msg"><a href="./reset-password.php">Forgotten Password?</a></span>

            <span class="signup_btn"><a href="signup.php">Sign up</a></span>
            

    </div>
   
    
<?php 
   /* include_once 'footer.php'*/
?>
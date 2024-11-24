<?php 
    include_once '../helpers/session_helper.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../assets/style_login.css" rel="stylesheet" type="text/css">
</head>

<link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@600;900&family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet">

<div class="submission-form">
    <h1>Sign up</h1>
    
    <?php flash('register') ?>
    
<form method="post" action="../controller/Users.php">
        <input type="hidden" name="type" value="register">
        <label for="Name">
          Full name
        </label>
        <input type="text" name="username" id="Name" placeholder="Full name...">
       
        <label for="email">
            Email
        </label>
        <input type="text" name="useremail"   placeholder="Email..." id="email">

        <label for="password">
         Password
        </label>
        <input type="password" name="userpwd" id="password"   placeholder="Password...">
        
        <label for="password">
         confirm Password
        </label>
        <input type="password" name="pwdRepeat" id="password"   placeholder="confirm password...">
        
        
        <button type="submit" + name="submit">Sign Up </button>
</div>
    </form>
</div>


</html>


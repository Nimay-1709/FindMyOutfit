<?php

include_once 'user-session.php';
include_once 'database-connect.php';
include_once 'validations.php';

  if(isset($_POST['logbutton'])){
    $form_error = array();

    $required_field = array('username', 'password');

    $form_error = array_merge($form_error, check_empty_field($required_field));

  if(empty($form_error)){

    $user = $_POST['username'];
    $pass = $_POST['password'];

    if($user == "admin.main0@gmail.com" && $pass == "HoneyBadger09" )
    {
      $_SESSION['username'] = $username;
      header("location: Admin_Main_Page.php");
    }
    elseif($user == "peter.rental11@gmail.com" && $pass == "1234567890" )
    {
      $_SESSION['username'] = $username;
      header("location: Shop_Main_Page.php");
    }
    elseif($user == "ramu.designer@gmail.com" && $pass == "Scam1992" )
    {
      $_SESSION['username'] = $username;
      header("location: Designer_Main_Page.php");
    }
    elseif($user == "rusty.user99@gmail.com" && $pass == "MirzapurS02" )
    {
      $_SESSION['username'] = $username;
      header("location: User_Main_Page.php");
    }
    else {
      $result = "<p style='color:red; text-align:center;'>Invalid username or password</p>";
    }

  }
  else{
    if(count($form_error) == 1){
      $result = "<p style='color:red; text-align:center;'>There was 1 error in the form</p>";
    }
    else{
      $result = "<p style='color:red; text-align:center;'>There were " .count($form_error). " error in the form</p>";
    }
  }
}

?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Find My Outfit">
    <meta name="author" content="Nimay Patel">
    <title> Welcome..! </title>
    <link rel="stylesheet" type="text/css" href="common.css">
    <link rel="stylesheet" type="text/css" href="login.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  </head>
  <body>

    <header>
        <div class="container">
          <h2>Find My Outfit</h2>
        </div>
    </header>


    <section id="login">
     <div id="container">
      <div class="back-image">
       <h3>The Doorway to your<br> favorite clothes</h3><br>
        <form name="form" method="post" onsubmit="return LoginValidate()">
         <div id="username_div">
          <input type="text" name="username" placeholder="Email ID" class="user">
          <div id="name_error"></div>
   	     </div>
         <div id="password_div">
          <input type="password" name="password" placeholder="Password" class="pass">
          <div id="password_error"></div>
         </div>
         <?php
           if(isset($result)){
             echo $result;
           }
         ?>

         <?php
           if(!empty($form_error))
             echo show_error($form_error);
         ?>
         <p class="reg"><a href="register.php">First Time? Register here</a></p>

         <div>
           <input type="submit" name="logbutton" class="button" value="Login">

         </div>
       </form>
     </div>
    </div>
   </section>

    <footer id="footer" class="static-footer">
      <div class="container">
        <p>Made with <span class="fas fa-heart"></span> by Prof. Ishie Eswar's Students</p>
      </div>
    </footer>
  </body>
</html>

<script src="login-validation.js"></script>

<?php
include_once 'user-session.php';
include_once 'database-connect.php';

      if(isset($_POST['regbutton']))
      {
        $profile = $_POST['profile_div'];
        if($profile == "Admin")
        {
          $emailid = $_POST['E_ID'];
          $inputpass = $_POST['password'];
          $SQLQuery = "INSERT INTO admin (password, username) VALUES ('$inputpass','$emailid')";
          $statement = $db->prepare($SQLQuery);
          $statement->execute();
        }
        elseif($profile == "Rental")
        {
          $emailid = $_POST['E_ID'];
          $inputpass = $_POST['password'];
          $ftc = $_POST['FTC'];
          $SQLQuery = "INSERT INTO rental_shop (email, password, ftc_id) VALUES ('$emailid', '$inputpass', '$ftc')";
          $statement = $db->prepare($SQLQuery);
          $statement->execute();
          }
        elseif($profile == "Designer")
        {
          $emailid = $_POST['E_ID'];
          $inputpass = $_POST['password'];
          $CID = $_POST['CID'];
          $CNAME = $_POST['CNAME'];
          $SQLQuery = "INSERT INTO designer (username, password, College_ID, College_Name) VALUES ('$emailid', '$inputpass', '$CID', '$CNAME')";
          $statement = $db->prepare($SQLQuery);
          $statement->execute();
        }
        elseif($profile == "Customer")
        {
          $emailid = $_POST['E_ID'];
          $inputpass = $_POST['password'];
          $SQLQuery = "INSERT INTO user (username, password) VALUES ('$emailid', '$inputpass')";
          $statement = $db->prepare($SQLQuery);
          $statement->execute();

        }
        header("location: login.php");
      }
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Find My Outfit">
  <meta name="author" content="Nimay">
  <title> Register Here</title>
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
     <h3> Please Enter the Following Details </h3><br>
      <form name="form" method="post" onsubmit="return LoginValidate()">
       <div id="email_div">
        <input type="email" name="E_ID" placeholder="Enter Email ID" class="user">
        <div id="name_error"></div>
       </div>
       <div id="password_div">
        <input type="password" name="password" placeholder="Create Password" class="pass">
        <div id="password_error"></div>
       </div>
       <label>Select One from Following:</label>
       <fieldset id="profile_div">
          <input type="radio" value="Admin" name="profile_div"><label for="admin">Admin</label><br>
          <input type="radio" value="Rental" name="profile_div"><label for="rental">Rental Shop</label><br>
          <input type="radio" value="Designer" name="profile_div"><label for="designer">Fashion Designer</label><br>
          <input type="radio" value="Customer" name="profile_div"><label for="Customer">Customer</label><br>
        </fieldset>

        <div id="FTC_Doc-ID_div">
         <input type="text" name="FTC" placeholder="FTC Clearance ID (Rental Shops)" class="user">
         <div id="name_error"></div>

       <div id="collegeID_div">
        <input type="text" name="CID" placeholder="College ID (Fashion Designers)" class="user">
        <div id="name_error"></div>
       </div>
       <div id="email_div">
        <input type="text" name="CNAME" placeholder="College Name (Fashion Designers)" class="user">
        <div id="name_error"></div
       </div>
       <div id="email_div">

       <div>
          <input type="submit" name="regbutton" class="button" value="Register">
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
<html>

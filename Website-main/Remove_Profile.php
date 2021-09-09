<?php
include_once 'user-session.php';
include_once 'database-connect.php';
include_once 'validations.php';

      if(!isset($_SESSION['username']))
        header("location:login.php");


      if(isset($_POST['Removebutton']))
      {
          $error = array();
          $required = array('Remove_ID');
          $error = array_merge($error, check_empty_field($required));
          if(empty($error))
          {
              $emailid = $_POST['Remove_ID'];
              $role = $_POST['role'];
              if($role == 'Designer')
              {
              $SQLQuery = "DELETE FROM designer WHERE username = '$emailid'";
              $statement = $db->prepare($SQLQuery);
              $statement->execute();
              echo "Success.! Designer Account has been removed";
              }
              if($role == 'Rental')
              {
              $SQLQuery = "DELETE FROM rental_shop WHERE email = '$emailid'";
              $statement = $db->prepare($SQLQuery);
              $statement->execute();
              echo "Success.! Rental Shop Owner Account has been removed";
            }if($role == 'Customer')
              {
              $SQLQuery = "DELETE FROM user WHERE username = '$emailid'";
              $statement = $db->prepare($SQLQuery);
              $statement->execute();
              echo "Success.! Customer Account has been removed";
              }
          }
          else{
              if(count($error) == 1){
                  $result = "<p style='color:red; text-align:center;'>There was 1 error in the form</p>";
              }
              else{
                  $result = "<p style='color:red; text-align:center;'>There were " .count($error). " error in your submission</p>";
              }
          }
          header("location: Admin_Main_Page.php");
      }
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Find My Outfit">
<meta name="author" content="Nimay Patel">
<title> Remove Profile </title>
<link rel="stylesheet" type="text/css" href="common.css">
<link rel="stylesheet" type="text/css" href="login.css">
<link rel="stylesheet" type="text/css" href="layout.css">
<link rel="stylesheet" type="text/css" href="form.css">
<link rel="stylesheet" type="text/css" href="sidebar.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
  <div class="layout"> <a class="header" href="#0"> <i class="fa fa-bars"></i><br>
  <div class="header-user"><i class="fas fa-user-circle icon" style="padding-right: 40px"></i>Hello, Admin</div>
    </a>
    <form name="form" method="post">
  <div class="sidebar">
    <ul>
      <li> <a class="sidebar-list-item" href="Admin_Main_Page.php"> <i class="fas fa-home icon"></i><em>Dashboard</em></a></li>
      <li> <a class="sidebar-list-item active" href="#0"> <i class="fas fa-user icon"></i><em>Remove Profiles</em></a></li>
      <li> <a class="sidebar-list-item" href="Eligibility.php"><i class="fas fa-tasks icon"></i><em>Eligibility Applications</em></a></li>
      <li> <a class="sidebar-list-item" href="Backup.php"> <i class="fas fa-calendar icon"></i><em>Backup Credentials</em></a>
      </li>
    </ul>
  </div>

   <main class="content">
   <div class="main-header">
     <div class="main-title"><h1>Remove Profile Account</h1> </div>

     <form name="event" method= "post">

   <label>Select One from Following:</label>
   <fieldset id="container">
     <input type="radio" value="Admin" name="profile_div"><label for="Admin">Admin</label><br>
     <input type="radio" value="Rental" name="profile_div"><label for="Rental">Rental Shop</label><br>
     <input type="radio" value="Designer" name="profile_div"><label for="Designer">Fashion Designer</label><br>
     <input type="radio" value="Customer" name="profile_div"><label for="Customer">Customer</label><br>
   </fieldset>
   <input type="email" name="Remove_ID" placeholder="Enter Email ID" class="user"><br>
   <div id="name_error"></div>
   <input type="text" name="Reason" placeholder="Justify Your Action..!" class="user"><br>
   <div id="reason_error"></div>
  <div>
     <input type="submit" name="Removebutton" class="button" value="Remove"><br>
   </div>
 </form>
 </div>
 </main>
 <form method="post">
 <footer id="footer" class="static-footer">
   <div class="container">
     <p>Made with <span class="fas fa-heart"></span> by Prof. Ishie Eswar's Students</p>
   </div>
 <div class="footer_sign"><input type="submit" name="loutbutton" class="button" value="Logout">
 </div>
</footer>
<?php
    if(isset($_POST['loutbutton']))
     {
       session_unset();
       session_destroy();
       header('location:login.php');
     }
?>
 </form>
</body>
</html>

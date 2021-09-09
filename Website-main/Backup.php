<?php
include_once 'user-session.php';
include_once 'database-connect.php';
include_once 'validations.php';
      if(!isset($_SESSION['username']))
        header("location: login.php");

      if(isset($_POST['Savebutton']))
      {
          $error = array();
          $required = array('username', 'password');
          $error = array_merge($error, check_empty_field($required));
          $backup = $_POST['backup'];
          if(empty($error))
          {
              $emailid = $_POST['username'];
              $SQLQuery = "INSERT INTO safety_credentials (email, backup) VALUES ('$emailid','$backup')";
              $statement = $db->prepare($SQLQuery);
              $statement->execute();
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
<title> Backup Email</title>
<link rel="stylesheet" type="text/css" href="common.css">
<link rel="stylesheet" type="text/css" href="layout.css">
<link rel="stylesheet" type="text/css" href="form.css">
<link rel="stylesheet" type="text/css" href="sidebar.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
  <div class="layout"> <a class="header" href="#0"> <i class="fa fa-bars"></i><br>

  <div class="header-user"><i class="fas fa-user-circle icon" style="padding-right: 40px"></i>Hello, Admin</div>
    </a>
    <form name="back_form" method="post">
  <div class="sidebar">
    <ul>
      <li> <a class="sidebar-list-item" href="Admin_Main_Page.php"> <i class="fas fa-home icon"></i><em>Dashboard</em></a></li>
      <li> <a class="sidebar-list-item" href="Remove_Profile.php"> <i class="fas fa-user icon"></i><em>Remove Profiles</em></a></li>
      <li> <a class="sidebar-list-item" href="Eligibility.php"> <i class="fas fa-tasks icon"></i><em>Eligibility Applications</em></a></li>
      <li> <a class="sidebar-list-item active" href="#0"> <i class="fas fa-calendar icon"></i><em>Backup Credentials</em></a>
      </li>
    </ul>
  </div>
</form>
<main class="content">
  <div class="main-header">
    <div class="main-title">
      <h1>Establish Second Email</h1>
    </div>
    <div class="main-form">
      <form name="event" method="post">
        <input type="text" name="username" placeholder="Enter Default Email"><br>
        <input type="text" name="password" placeholder="Enter Password"><br>
        <input type="text" name="backup" placeholder="Enter Backup Email"><br><br><br>
        <label for="fallday" class="chechbox">Check to confirm changes :
          <input type="checkbox" class="checkbox" name="replace">
        </label>
        <div>
           <input type="submit" name="Savebutton" class="button" value="Add Backup"><br>
         </div>
        </form>
    </div>
</div>
</main>
<form method="post">
<footer id="footer" class="static-footer">
  <div class="container">
    <p>Made with <span class="fas fa-heart"></span> by Prof. Ishie Eswar's Students</p>
  </div>
<div class="footer_sign"><input type="submit" name="outbutton" class="button" value="Logout">
</div>
</footer>
<?php
   if(isset($_POST['outbutton']))
    {
      session_unset();
      session_destroy();
      header('location:login.php');
    }
?>
</form>
</div>
</body>
</html>

<?php
include_once 'user-session.php';
      if(!isset($_SESSION['username']))
        header("location:login.php");
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Find My Outfit">
<meta name="author" content="Nimay Patel">
<title> Eligibility Check</title>
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
      <li> <a class="sidebar-list-item" href="Remove_Profile.php"> <i class="fas fa-user icon"></i><em>Remove Profiles</em></a></li>
      <li> <a class="sidebar-list-item active" href="#0"> <i class="fas fa-tasks icon"></i><em>Eligibility Applications</em></a></li>
      <li> <a class="sidebar-list-item" href="Backup.php"> <i class="fas fa-calendar icon"></i><em>Backup Credentials</em></a>
      </li>
    </ul>
  </div>
</form>
<main class="content">
  <div class="main-header">
    <div class="main-title">
      <h1>List of Applicants</h1>
    </div>

    <div class="main-form">
      <form name="event" method="post">
        <div>
           <input type="submit" name="viewbutton" class="button" value="View Applications">
         </div>
         <?php
         include_once 'user-session.php';
         include_once 'database-connect.php';
         include_once 'validations.php';

               if(!isset($_SESSION['username']))
                 header("location: login.php");

               if(isset($_POST['viewbutton']))
                  {
                    $SQLQuery = "SELECT * FROM designer";
                    $statement = $db->prepare($SQLQuery);
                    $statement->execute();

                    while($row = $statement->fetch())
                    {
                      $username = $row['username'];
                      $college_name = $row['College_Name'];
                      $college_ID = $row['College_ID'];
          ?>
          <input type="checkbox" id="checkbox" justify= name="replace">
          <label for="checkbox"><?php echo $username."   ,       ".$college_name."   ,        ".$college_ID;
                    }
                  }
         ?>
        <label for="fallday" class="checkbox"><br><br><br>Check the box to manually confirm the eligibility :
        </label>

        <input type="submit" name="submit" value="Save" class="button">
        <?php
            if(isset($_POST['submit']))
            {
            header("location: Admin_Main_Page.php");
            }
            ?>
      </form>
    </div>
  </div>
</main>
<form method="post">
<footer id="footer" class="static-footer">
  <div class="container">
    <p>Made with <span class="fas fa-heart"></span> by Prof. Ishie Eswar's Students</p>
  </div>
<div class="footer_sign"><input type="submit" method="post" name="outbutton" class="button" value="Logout">
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
</body>
</html>

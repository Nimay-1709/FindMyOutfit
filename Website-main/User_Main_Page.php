<?php
include_once 'user-session.php';
      if(!isset($_SESSION['username']))
        header("Location: login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find My Outfit</title>
    <link href = "dashstyle.css" rel = "stylesheet" type = "text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
    <header>
        <div class="bar">
            <div class="name">
                <h1>Find My Outfit</h1>
            </div>
            <ul>
                <li><input type="submit" name="logoutbutton" class="button" value="Logout"></li>
            </ul>
        </div>
        <?php
         if(isset($_POST['logoutbutton']))
          {
            session_unset();
            session_destroy();
            header('location: login.php');
          }
        ?>
    </header>
    <div class="buttons">
        <ul>
             <li><a href="User_Designer.php">Designer Information</a></li>
             <li><a href="User_Rental.php">Rent Clothes</a></li>
             <li><a href="User_History_See.php">Order History</a></li>
             <li><a href="Payment_Information.php">Payment Details</a></li>
        </ul>
    </div>
    <footer id="footer" class="static-footer">
      <div class="container">
        <p>Made with <span class="fas fa-heart"></span> by Prof. Ishie Eswar's Students</p>
      </div>
    </footer>
</body>
</html>

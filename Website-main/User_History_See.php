<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find My Outfit</title>
    <link href = "userhistory.css" rel = "stylesheet" type = "text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
    <header>
        <div class="bar2">
            <div class="name2">
                <h1>Find My Outfit</h1>
            </div>
            <form name="xyz" method="post">
                <ul>
                  <?php
                    if(isset($_POST['home']))
                    {
                          header('Location: User_Main_Page.php');
                     }
                  ?>
                  <li><input type="submit" name="home" class="button" value="Home"></li>
                  <li><input type="submit" name="logoutbutton" class="button" value="Logout"></li>
                </ul>
            </form>
        </div>
    </header>
    <div class="des">
        <h1>Order History</h1>
        <hr>
    </div>
    <div class="buttons">
        <ul>
             <li><a href="User_Designer_History_See.php">Designer History</a></li>
             <li><a href="User_Rental_History_See.php">Rental History</a></li>
        </ul>
    </div>
    <footer id="footer" class="static-footer">
      <div class="container">
        <p>Made with <span class="fas fa-heart"></span> by Prof. Ishie Eswar's Students</p>
      </div>
    </footer>
</body>
</html>
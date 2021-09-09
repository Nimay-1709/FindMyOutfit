<?php
     include_once 'databasec.php';

     $sql = 'SELECT username, phone, address FROM designer_info ORDER BY username;';
     $r = mysqli_query($c, $sql);

     $a = mysqli_fetch_all($r, MYSQLI_ASSOC);

     mysqli_free_result($r);

     mysqli_close($c);

     
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find My Outfit</title>
    <link href = "userdesigner.css" rel = "stylesheet" type = "text/css">
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
                     <li><input type="submit" name="logoutbutton2" class="button" value="Logout"></li>
                </ul>
            </form>
        </div>
    </header>
    <div class="des">
        <h1>Designer Information</h1>
        <hr>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="cont">
        <div class="row">
            <?php foreach($a as $designer){ ?>
                        <div class="smallbox">
                            <h6>
                                Name: <?php echo htmlspecialchars($designer['username']); ?>
                            </h6>
                            <div>
                                <br>
                                Phone Number: <?php echo htmlspecialchars($designer['phone']); ?>
                                <br>
                                <br>
                                Address: <?php echo htmlspecialchars($designer['address']); ?>
                            </div>
                        </div>
                        <br>
            <?php } ?>
        </div>
    </div>
    <footer id="footer" class="static-footer">
      <div class="container">
        <p>Made with <span class="fas fa-heart"></span> by Prof. Ishie Eswar's Students</p>
      </div>
    </footer>
</body>
</html>
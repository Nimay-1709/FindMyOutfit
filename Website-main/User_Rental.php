<?php
     include_once 'databasec.php';

     $sql = 'SELECT shop_name, owner_phone, owner_address FROM rental_info ORDER BY shop_name;';
     $res = mysqli_query($c, $sql);

     $arr = mysqli_fetch_all($res, MYSQLI_ASSOC);

     mysqli_free_result($res);

     mysqli_close($c);

     
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find My Outfit</title>
    <link href = "userrental.css" rel = "stylesheet" type = "text/css">
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
    <div class="box">
         <a href="Nitins_Rental.php">View Catalog</a>
     </div>
    <div class="abcd">
         <a href="Peters_Rental.php">View Catalog</a>
    </div>
    <div class="des">
        <h1>Rent Clothes</h1>
        <hr>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="cont">
        <div class="row">
            <?php foreach($arr as $rental){ ?>
                        <div class="smallbox">
                            <h6>
                                Shop Name: <?php echo htmlspecialchars($rental['shop_name']); ?>
                            </h6>
                            <div>
                                <br>
                                Phone Number: <?php echo htmlspecialchars($rental['owner_phone']); ?>
                                <br>
                                <br>
                                Address: <?php echo htmlspecialchars($rental['owner_address']); ?>
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
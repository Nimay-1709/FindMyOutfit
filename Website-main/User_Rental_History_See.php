<?php
     include_once 'databasec.php';

     $sql = 'SELECT rental_number, shop_name, items, p_date, r_date FROM rental_history ORDER BY rental_number;';
     $resu = mysqli_query($c, $sql);

     $ar = mysqli_fetch_all($resu, MYSQLI_ASSOC);

     mysqli_free_result($resu);

     mysqli_close($c);

     
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find My Outfit</title>
    <link href = "udhs.css" rel = "stylesheet" type = "text/css">
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
        <h1>Rental History</h1>
        <hr>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="cont">
        <div class="row">
            <?php foreach($ar as $rentalhistory){ ?>
                        <div class="smallbox">
                            <h6>
                                Shop Name: <?php echo htmlspecialchars($rentalhistory['shop_name']); ?>
                            </h6>
                            <div>
                                <br>
                                Items Rented: <?php echo htmlspecialchars($rentalhistory['items']); ?>
                                <br>
                                <br>
                                Pickup Date: <?php echo htmlspecialchars($rentalhistory['p_date']); ?>
                                <br>
                                <br>
                                Return Date: <?php echo htmlspecialchars($rentalhistory['p_date']); ?>
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
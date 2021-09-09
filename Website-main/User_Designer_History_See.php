<?php
     include_once 'databasec.php';

     $sql = 'SELECT shop_name, order_placed, pickup_date FROM designer_history ORDER BY designerorder_no;';
     $resul = mysqli_query($c, $sql);

     $arra = mysqli_fetch_all($resul, MYSQLI_ASSOC);

     mysqli_free_result($resul);

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
        <h1>Designer History</h1>
        <hr>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="cont">
        <div class="row">
            <?php foreach($arra as $designerhistory){ ?>
                        <div class="smallbox">
                            <h6>
                                Shop Name: <?php echo htmlspecialchars($designerhistory['shop_name']); ?>
                            </h6>
                            <div>
                                <br>
                                Order Placed: <?php echo htmlspecialchars($designerhistory['order_placed']); ?>
                                <br>
                                <br>
                                Estimated Pickup: <?php echo htmlspecialchars($designerhistory['pickup_date']); ?>
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
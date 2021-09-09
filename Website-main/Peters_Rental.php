<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find My Outfit</title>
    <link href = "rentalpages.css" rel = "stylesheet" type = "text/css">
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
        <h1>Rent Clothes</h1>
        <hr>
    </div>
    <div class="box">
         <a href="User_Checkout.php">Checkout</a>
    </div>
    <br>
    <br>
    <br>
    <br>  

    <div class="smallbox">
        <p>Cloth Type: Men's Blue Tuxedo</p>
        <br>
        <p>Rental Price: $ 50</p>
        <br>
        <img class="imagecloth" src="bluetux.jpg">
        <br>
        <br>
        <form name="xyz" method="post">
             <br>
             <p>Check the box below to select this outfit</p>
             <input type="checkbox" name="select" class="button" value="Select">
        </form>
    </div>

    <br>

    <div class="smallbox">
        <p>Cloth Type: Men's Brown Suit</p>
        <br>
        <p>Rental Price: $ 70</p>
        <br>
        <img class="imagecloth" src="brownsuit.jpg">
        <br>
        <br>
        <form name="xyz" method="post">
             <br>
             <p>Check the box below to select this outfit</p>
             <input type="checkbox" name="select" class="button" value="Select">
        </form>
    </div>

    <br>

    <div class="smallbox">
        <p>Cloth Type: Men's Black Suit</p>
        <br>
        <p>Rental Price: $ 75</p>
        <br>
        <img class="imagecloth" src="blacksuit.jpg">
        <br>
        <br>
        <form name="xyz" method="post">
             <br>
             <p>Check the box below to select this outfit</p>
             <input type="checkbox" name="select" class="button" value="Select">
        </form>
    </div>

    <br>

    <div class="smallbox">
        <p>Cloth Type: Men's Gray Suit</p>
        <br>
        <p>Rental Price: $ 55</p>
        <br>
        <img class="imagecloth" src="graysuit.jpg">
        <br>
        <br>
        <form name="xyz" method="post">
             <br>
             <p>Check the box below to select this outfit</p>
             <input type="checkbox" name="select" class="button" value="Select">
        </form>
    </div>

    <br>

    <div class="smallbox">
        <p>Cloth Type: Men's Patterned Suit</p>
        <br>
        <p>Rental Price: $ 80</p>
        <br>
        <img class="imagecloth" src="patternedsuit.jpg">
        <br>
        <br>
        <form name="xyz" method="post">
             <br>
             <p>Check the box below to select this outfit</p>
             <input type="checkbox" name="select" class="button" value="Select">
        </form>
    </div>

    <br>

    <div class="smallbox">
        <p>Cloth Type: Men's Burgundy Suit</p>
        <br>
        <p>Rental Price: $ 40</p>
        <br>
        <img class="imagecloth" src="burgundysuit.jpg">
        <br>
        <br>
        <form name="xyz" method="post">
             <br>
             <p>Check the box below to select this outfit</p>
             <input type="checkbox" name="select" class="button" value="Select">
        </form>
    </div>

    <footer id="footer" class="static-footer">
      <div class="container">
        <p>Made with <span class="fas fa-heart"></span> by Prof. Ishie Eswar's Students</p>
      </div>
    </footer>
</body>
</html>
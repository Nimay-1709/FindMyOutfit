<?php  


$link=mysqli_connect("root","","");
mysqli_select_db($link,"findmyoutfit");

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add to cart</title>
        <link rel="stylesheet" href="sign.css">
        <script src="js/form.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                    background-image:linear-gradient(rgba(0, 0, 0, 0.753),rgba(0, 0, 0, 0.836)), url(images/2.jpg);
                    height: 100vh;
                    background-size: cover;
                    background-position:center;
                }
        </style>
    </head>
    <body> 
        <div class="sign_up">
        <div>
        
        <div class="block">
            <form name="form1" id="register" action="" method="POST" enctype="multipart/form-data">
            <h2>Add Product</h2>
            <table >
                <tr>
                    <td>Product Code</td>
                    <td><input type="text" name="pnm"></td>
                </tr>
                <tr>
                    <td>Product Price</td>
                    <td><input type="text" name="pprice"></td>
                </tr>
                <tr>
                    <td>Product Quantity</td>
                    <td><input type="text" name="pqty"></td>
                </tr>
                <tr>
                    <td>Product Image</td>
                    <td><input type="file" name="pimage"></td>
                </tr>
                <tr>
                    <td>Product Category</td>
                    <td>
                        <select name="pcategory">
                            <option value="Tshirt">T-shirt</option>
                            <option value="Shirt">Shirt</option>
                            
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td>Product Description</td>
                    <td>
                        <textarea cols="15" rows="10" name="pdesc"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit1" value="upload"></td>
                </tr>
            </table>
            </form>
            <?php
  if(isset($_POST["submit1"]))
  {
        $v1=rand(111,999);
        $v2=rand(111,999);

        $v3=$v1.$v2;

        $v3=md5($v3);

        $fnm=$_FILES["pimage"]["name"];
        $dst="./product_image/".$v3.$fnm;
        $dst1="product_image/".$v3.$fnm;
        move_uploaded_file($_FILES["pimage"]["tmp_name"], $dst);


mysqli_query($link,"insert into product values('','$_POST[pnm]',$_POST[pprice],$_POST[pqty],'$dst1','$_POST[pcategory]','$_POST[pdesc]')");
  }



  ?>
             
        </div>
        </body>
        </html>
<?php
include_once 'user-session.php';
include_once 'database-connect.php';
include_once 'validations.php';

      if(!isset($_SESSION['username']))
        header("location: login.php");

      if(isset($_POST['change']))
      {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $e_id = $_POST['email'];
        $img = $_POST['img'];
        $sex = $_POST['gender'];
        $pno = $_POST['phone'];
        $addr = $_POST['address'];
        $SQLQuery = "INSERT INTO designer_info (username, age, email_id, img, sex, phone, address)
        VALUES ('$name', '$age', '$e_id', '$img', '$sex', '$pno', '$addr')";
        $statement = $db->prepare($SQLQuery);
        $statement->execute();

        echo "Information sucessfully updated!";
      }
?>

<html>
<head>
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }
    .topnavigation {
      overflow: hidden;
      background-color: #333;
    }
    .topnavigation a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }
    .topnavigation a:hover {
      background-color: #ddd;
      color: black;
    }
    .topnavigation a.active {
      background-color: #7E685A;
      color: white;
    }
    .logout_mainpage {
      text-align: right;
    }
  </style>
</head>

<body>

  <div class="topnavigation">
    <a class="active" href="#home">Create portfolio</a>
    <a href="#Update Track History">Update Track History</a>
    <a href="#Access Customer Information">Access Customer Information</a>
    <div class="logout_mainpage">
      <a href="login.php">Logout</a>
    </div>

  </div>

  <div style="padding-left:16px">
  </div>
</body>
<style>
  body {
    background-color: #EEE2DC;
  }

  h1 {
    color: maroon;
    margin-left: px;
  }

  div.Submit_button {
    margin: auto;
    width: 50%;
    padding: 10px;
  }
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="login.css" media="screen" />
</head>

<body>
  <form name="portfolio" method="post" onsubmit="return LoginValidate()">
    <div class="container">
      <center>
        <h1> Create Portfolio </h1>
      </center>
      <hr>
      <p>
        <label> Name: </label>
        <input type="text" name="name" placeholder="Name" size="20" required />

        <p>
          <label> Age: </label>
          <input type="number" name="age" placeholder="Age" size="3" required />
        </p>
        <p>
          <label for="email">Enter your email:</label>
          <input type="email" id="email" name="email">
        </p>
      <p>
        <label for="img">Select image:</label>
        <input type="file" id="img" name="img" accept="image/*">
      </p>

      <div>
        <label>
          Gender :
        </label>
        <input type="radio" value="Male" name="gender" checked> Male
        <input type="radio" value="Female" name="gender"> Female
        <input type="radio" value="Other" name="gender"> Other

      </div>
      <div>
        <label>
          Phone :
        </label>
        <input type="text" name="country code" placeholder="Country Code" value="+1" size="2" />
        <input type="text" name="phone" placeholder="phone no." size="10" / required>
        <label>
          Current Address :
        </label>
        <textarea cols="80" rows="5" name="address" placeholder="Current Address" value="address" required>
  </textarea>
      </div>
      <div class="Submit_button">
        <input type="submit" name="change" value="Submit">
      </div>
    </div>
</form>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbName = "Soroor_db";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
if(isset($_POST['username']) && isset($_POST['password']) ){

    $uname=$_POST['username'];
    $password=$_POST['password'];

   $sql="SELECT * FROM login_tb where uname='".$uname."' AND pass='".$password."'"; 

   $result = $mysqli->query($sql);

   if ($result->num_rows > 0) {
    // output data of each row
    
      echo 'You have successfully logged in';
      exit();
   
  } else {
    echo 'You Have Entered Incorrect Password';
  }
}
else{

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Login Form</h2>

<form action="login.php" method="POST">
  <label for="uname">Username:</label><br>
  <input type="text" id="username" name="uname" ><br>
  <label for="password">Password</label><br>
  <input type="password" id="password" name="pass" ><br><br>
  <input type="submit" value="Submit">
</form>  

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
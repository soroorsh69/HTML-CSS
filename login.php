<?php
require __DIR__ ."/db.php";
if(isset($_POST['uname']) && isset($_POST['pass']) ){

    $uname=$_POST['uname'];
    $password=$_POST['pass'];

   $sql="SELECT * FROM login_tb where username='".$uname."' AND password='".$password."'"; 
echo $sql;
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
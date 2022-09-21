<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>  

<?php

if(!isset($_GET['project_id'])){
  echo 'something went wrong!';
  die;

}
require __DIR__."/../db.php";
$prj=(int)$_GET['project_id'];

$sql = "SELECT * FROM project_tb where ID=" .$prj;

  $result = $mysqli->query($sql);

  

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

      echo 'project-name: ' . $row['project-name']. '<br>' .' Details: ' . $row['desc-prj'];
    
    }
  } else {
    echo '0 results';
  }

  $mysqli->close();
      
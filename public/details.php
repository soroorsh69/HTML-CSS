<?php

  $sql = "SELECT * FROM project_tb";
  $result = $mysqli->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo 'id: ' . $row['id']. '- project-name: ' . $row['project-name']. '' . $row['desc-prj']. '' .$row['Type-prj'] . '<br>';
    
    }
  } else {
    echo '0 results';
  }

  $mysqli->close();
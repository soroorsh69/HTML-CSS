<?php

namespace Php\Project\Controller;

use Php\Project\Services\DB;
use mysqli;

class DetailsnewController  implements ControllerInterface
{

  private mysqli $database;
  public function __construct()
  {


    $db = new DB();
    $this->database = $db->connect();
  }

  public function getResponse(): string
  {


    $output = '';
    if (!isset($_GET['project_id'])) {
      $output = 'something went wrong!';
      die;
    }


    $prj = (int)$_GET['project_id'];


    $sql = "SELECT * FROM project_tb where ID=" . $prj;

    $result = $this->database->query($sql);



    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {

        $output .= '<h1>' . 'project-name: ' . '</h1>' . $row['project-name'] . '<br>' . '<h2>' . ' Details: ' . '</h2>' . $row['desc-prj'] . '<br>';
        $output .= '<img src=' . $row['image'] . '>';
      }
    } else {
      echo '0 results';
    }

    return $output;
  }
}

<?php

namespace Php\Project\Controller;

use Php\Project\Services\DB;
use mysqli;
use Php\Project\Services\TemplateRenderService;

class HomepageController implements ControllerInterface
{

  private mysqli $database;
  public array  $prj_array = [];


  public function __construct(TemplateRenderService $templateRenderService, DB $db){
    $this->templateRenderService=$templateRenderService;
    $this->database = $db->connect();
  }



  public function getResponse(): string
  {



    $sql = "SELECT * FROM project_tb";
    $result = $this->database->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {



        $prj_array[] = $row;
      }
    } else {
      echo '0 results';
    }

    $this->database->close();

    $templaterender = new  TemplateRenderService();
    

    return   $templaterender->render($prj_array);
  }
}

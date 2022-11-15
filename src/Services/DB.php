<?php
namespace Php\Project\Services;
use mysqli;
class DB {
    private $db=null;
    function connect(){
        $db_host = '127.0.0.1';
        $db_user = 'root';
        $db_password = 'root';
        $db_db = 'Soroor_db';
        $db_port = 8889;
        
        if($this->db===null)
        {    
            $this->db = new mysqli(
            $db_host,
            $db_user,
            $db_password,
            $db_db,
            $db_port
            );
        }
  
            return $this->db;
    }
  
}
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php



$path=($_GET['path'])  ?? '';

require __DIR__ ."/../db.php";

if($path=== ''){

    include __DIR__ .'/../homepage.php';

}

if ($path==='detail/news/')
{
    include __DIR__ .'/../details.php';
}
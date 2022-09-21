<?php



$path=($_GET['path'])  ?? '';

require __DIR__ ."/db.php";

if($path=== ''){

    include __DIR__ .'/../homepage.php';

}

if ($path==='detail/news/')
{
    include __DIR__ .'/../details.php';
}
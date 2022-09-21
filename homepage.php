<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume Soroor</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
<header>
 <div class="container-fluid">
     <img class="logo" src="img/logo.jpg">
     <nav class="navbar justify-content-center">
         <div class="container-fluid">
         <ul class="nav navbar">
            <?php
            $menu=['Home', 'About-us', 'Blog', 'service', 'FAQ', 'Contact us', 'Ehsan'];
            foreach($menu as $value){
echo '<li class="nav-item"><a class="nav-link" href="#">'.$value.'</a></li>';
            }
         ?>   
            
</ul>
         </div>
     </nav>

 </div>
    <h1>Learning HTML CSS Programming</h1>
    <div>
        <button type="button" class="btn btn-primary"> <a href="#">Call Us Today</a></button>

    </div>
</header>
<section class="content">
    <div class="container"></div>
    <article>
        <?php
        $content=file_get_contents("resume.txt");
        echo $content;
        ?>
        <br>
<?php
       require __DIR__ ."/db.php";

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
        
        
        ?>
        
    </article>
<nav class="sidebar">
    <h2 class="text-center mt-3 mb-3">My Experience</h2>

    <ul >
        <?php
        $sidebar=['Google Search Console']
        ?>
        <li > Google Search Console</li>
        <li > Google Analytics</li>
        <li > Semrush</li>
        <li > ScreamingFrog</li>
        <li> Google Trend</li>
        <li> AWR Cloud</li>
        <li> GMB Optimizing</li>
        <li> Images' Meta Data</li>
        <li> keyword research</li>
        <li> Implementation</li>


    </ul>

</nav>
</section>

<footer class="bg-black text-center text-white">

        <div class="container-fluid">

        <div class="text-center pt-5" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Company, Inc. All rights reserved.
        </div>
        </div>
</footer>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
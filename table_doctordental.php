<?php
require('./api/connect.php');

$objCon = connectDB();
$strSQL = "SELECT * FROM table_doctordental";
$objQuery = mysqli_query($objCon, $strSQL);
$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <link rel="stylesheet" href="index2.css">
    <?php include "header-link.php"; ?> 
  </head>
  <body>
  <div class="scroll-to-top">
    <i class="fa-solid fa-angles-up" style="color: #ffffff;"></i>
  </div>  
  <div class="container">
    <?php include "header.php"; ?>
  </div>

<main class="curtain-container container">
    <div id="curtain" class="curtain">
    <?php include "slide-page.php"; ?>
    </div>

    <nav class="nav link d-flex flex-wrap justify-content-between">
        <?php include "nav-link.php"; ?>
    </nav>
</div>
    <br>
    <div class="row g-5">
        <div>
          
        <h4 class="pb-4 mb-4 fst-italic border-bottom d-flex">                      
            <?php include "button-menu.php"; ?>
            <div class="welcome-text text-center"><?php echo $objResult['dental_name']?></div>
        </h4>
        
        </div>
        <center>
        <div class="row">
        <img src="./images/<?php echo $objResult['dental_img']?>" alt="">
        </div>
        
          
</div>
</center>
        <br>
        <br>
        <br>
        <br>

        <footer class="blog-footer footer">
          <?php include "footer.php"; ?>
        </footer>
    </main>
  </body>
</html>
<script src="person.js"></script>

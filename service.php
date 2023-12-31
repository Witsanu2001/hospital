<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">

    <title>โรงพยาบาลป่าตอง : Patong hospital</title>
    <link rel="icon" href="./images/logo.png">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">
    <link rel="stylesheet" href="./calendar-01/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="index2.css">
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
   
    </style>
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


    <br>
    <div class="row g-5">
        <div>    
        <h4 class="pb-4 mb-4 fst-italic border-bottom ">
          <div class="dropdown d-lg-none">
            <button class="btn" type="button" id="dropdownMenuButtonMobile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-start" aria-labelledby="dropdownMenuButtonMobile">
            <?php include "button-menu.php"; ?>
            </div>
        </div>
        <br>
        <br>

        
        

       
        
    
    <div class="container mt-3">
          <ul class="nav nav-tabs nav-justified">
              <li class="nav-item">
                  <a id="service-tab" class="nav-link btn-outline-primary active">งานบริการ</a>
              </li>
              <li class="nav-item">
                  <a id="clinic-tab" class="nav-link btn-outline-primary">คลินิก</a>
              </li>
          </ul>
        </div>
    <br>
    <br>
    <!-- ส่วนของการ์ด -->
    <div class="row" style="cursor: pointer;">
        
            <div id="servicelist" class="row-1">
                <!-- ข้อมูลของงานบริการ -->
            </div>
            <div id="cliniclist" class="row-1" style="display: none;">
                <!-- ข้อมูลของคลินิค -->
            </div>
    </div>
    </div>
    <br>
        <br>
        <br>
        <br>
<footer class="blog-footer footer">
  <?php include "footer.php"; ?>
</footer>
</main>

<!-- Modal -->
<div class="modal" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<?php include "modal.php" ?>
</div>


        
  </body>
</html>

<script src="person.js"></script>
<script src="./calendar-01/js/jquery.min.js"></script>
<script src="./calendar-01/js/popper.js"></script>
<script src="./calendar-01/js/bootstrap.min.js"></script>
<script src="./calendar-01/js/main.js"></script>
<script src="https://unpkg.com/thai-buddhist-date/dist/index.umd.js"></script>
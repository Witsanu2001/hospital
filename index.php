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
    

    <link rel="stylesheet" href="index.css">
    

    <!-- Bootstrap core CSS -->
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">


  </head>
  <body>
  <div class="scroll-to-top">
    <i class="fa-solid fa-angles-up" style="color: #ffffff;"></i>
  </div>
    
<div class="container">
  <?php include "header.php"; ?>
</div>


<!-- class="slow-slide-down" -->
<main  class="container">
    <div class="slide-container">
    <?php include "slide-page.php"; ?>
    </div>




    <nav class="nav d-flex flex-wrap justify-content-between">
        <?php include "nav-link.php"; ?>
    </nav>
</div>

    <br>
    
    <div class="row g-5">
        <div class="col-md-8">
          
        <h4 class="pb-4 mb-4 fst-italic border-bottom d-flex  align-items-center">
        
          <div class="dropdown d-lg-none">
            <button class="btn" type="button" id="dropdownMenuButtonMobile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-start" aria-labelledby="dropdownMenuButtonMobile">
                <?php include "button-menu.php"; ?>
            </div>
        </div>

        
            <div class="welcome-text text-center">ยินดีตอนรับโรงพยาบาลป่าตอง</div>

        </h3>
        
      <!-- HTML ของการ์ด -->
    <div class="row" style="cursor: pointer;">
    <center>
    <div id="newsContainer" class="row">
      <!-- ที่นี่จะเป็นส่วนที่ข้อมูลข่าวจะถูกแทรกที่นี่ -->
    </div>
    </center>
    </div>
    
    <div class="d-flex justify-content-between align-items-center">
        <h3>กิจกรรมในโรงพยาบาล</h3>
        <button type="button" class="btn btn-outline-primary">ดูเพิ่มติม</button>
    </div>
    <br>
    <div id="notification">
    <i id="refreshButton" class="fas fa-sync-alt"></i>
        <img id="notificationImg" src="" alt="Notification Image">
        <br>
        <p id="notificationText"></p>
    </div>
    
    </div>

    <div class="col-md-4">
    <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
            <h4 class="fst-italic">ผู้บริหาร</h4>
            <center>
                <img src="./images/profile.jpg" alt="" style="width: 200px;">
            </center>
        </div>

        <!-- ปฏิทิน -->
        <h4 class="fst-italic">ปฎิทิน</h4>
          <div class="row">
            <div class="col-md-12">
              <div id="calendar"></div>
            </div>
          </div>

          

          <br>
        
        <!-- รูปภาพและรายการลิงก์ -->
        
            <h4 class="fst-italic">หน่วยงานที่เกี่ยวข้อง</h4>
            <ol class="list-unstyled">
                <center>
                  <a href="https://pkto.moph.go.th/">
                    <img src="./images/link01.jpg" alt="" style="width: 350px;">
                  </a>
                    <hr>
                   <a href="https://www.vachiraphuket.go.th/"> 
                    <img src="./images/link02.jpg" alt="" style="width: 350px;">
                   </a> 
                    <hr>
                   <a href="https://www.thalanghospital.go.th/"> 
                    <img src="./images/link03.jpg" alt="" style="width: 350px;">
                   </a> 
                    <hr>
                   <a href=""> 
                    <img src="./images/hdc.jpg" alt="" style="width: 350px;">
                   </a> 
                    <hr>
                   <a href="http://www.patonghospital.com/roomsys/"> 
                    <img src="./images/ss.jpg" alt="" style="width: 350px;">
                   </a> 
                    <hr>
                   <a href="https://pkt.hdc.moph.go.th/hdc/main/index.php"> 
                    <img src="./images/hdc3.png" alt="" style="width: 350px;">
                   </a> 
                    <hr>
                   <a href=""> 
                    <img src="./images/logo_kpi.jpg" alt="" style="width: 350px;">
                   </a> 
                    <hr>
                   <a href="http://www.patonghospital.com/ya/ya4.php"> 
                    <img src="./images/ya.jpg" alt="" style="width: 350px;">
               </a> </ce
                nter>
            </ol>
        </div>
    </div>
</div>
<br><br>


</main>

<footer class="blog-footer footer">
  <?php include "footer.php" ?>
</footer>



    
  </body>
</html>

<script src="index.js"></script>
<script src="./calendar-01/js/jquery.min.js"></script>
<script src="./calendar-01/js/popper.js"></script>
<script src="./calendar-01/js/bootstrap.min.js"></script>
<script src="./calendar-01/js/main.js"></script>
<script src="https://unpkg.com/thai-buddhist-date/dist/index.umd.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.slide-container').addClass('show');
    });
  </script>
<!-- Include FullCalendar core stylesheet and script -->

<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css' rel='stylesheet' />
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/locale/th.js'></script>

<script>
  $(document).ready(function() {
  $('#calendar').fullCalendar({
    header: {
      left: 'prev',       
      center: 'today,month,agendaWeek,agendaDay,title',
      right: 'next'
    },
    defaultView: 'month',
    locale: 'th',
    events: [
      {
        title: 'งาน A',
        start: '2023-12-01'
      },
      {
        title: 'งาน B',
        start: '2023-12-07',
      }
    ],
    eventRender: function(event, element) {
      element.css('background-color', '#4285f4');
      element.css('color', '#fff');
    },
    dayNamesShort: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
    aspectRatio: 1 // ลองปรับค่า aspectRatio เพื่อทำให้ตารางเล็กลง
  });
});
</script>
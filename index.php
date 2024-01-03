<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <?php include "header-link.php"; ?>
    <script src="index.js"></script>

  </head>
  <body>
  <div class="scroll-to-top">
    <i class="fa-solid fa-angles-up" style="color: #ffffff;"></i>
  </div>   
  <div class="container">
    <?php include "header.php"; ?>
  </div>
  <main  class="container">
          <div class="slide-container">
            <?php include "slide-page.php"; ?>
          </div>
            <link rel="stylesheet" href="index2.css">
            <nav class="nav link d-flex flex-wrap justify-content-between fixed-bottom-nav">
              <?php include "nav-link.php"; ?>
            </nav>
            

            
          

          <br>
          <div class="row g-5">
              <div class="col-md-8">        
                  
                
                      <?php include "button-menu.php"; ?>
                
              <h4 class="pb-4 mb-4 fst-italic border-bottom d-flex">   
                <div class="welcome-text text-center">ยินดีตอนรับโรงพยาบาลป่าตอง</div>
              </h4>             
              <!-- HTML ของการ์ด -->
              <div class="row" style="cursor: pointer;">
                <center>
                  <div id="newsContainer" class="row"></div>
                </center>
              </div>
          
              <div class="d-flex justify-content-between">
                  <h3 class="atv">กิจกรรมในโรงพยาบาล</h3>
                    <a href="act.php">
                  <button type="button" class="btn btn-outline-primary">ดูเพิ่มติม</button></a>
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
            <div class="position-sticky" style="top: 3rem;">
              <div class="p-4 mb-3 bg-light rounded">
                  <h4 class="fst-italic">ผู้บริหาร</h4>
                  <center>
                      <img src="./images/profile.jpg" alt="" style="width: 200px;">
                  </center>
              </div>

              <!-- ปฏิทิน -->
              <h4 class="fst-italic">ปฎิทิน</h4>
                <div class="row-calendar">
                  <div class="col-md-12 calendar">
                  <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTz=0&amp;height=260&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=web.patonghospital%40gmail.com&amp;color=%23528800&amp;src=th.th%23holiday%40group.v.calendar.google.com&amp;color=%232952A3&amp;ctz=Asia%2FBangkok" 
                  style=" border-width:0 " width="100%" height="400" frameborder="0" scrolling="no"></iframe>
                  </div>
                </div>
                <br>
                <h4 class="fst-italic">หน่วยงานที่เกี่ยวข้อง</h4>
                  <ol class="list-unstyled">
                      <center>
                        <a href="https://pkto.moph.go.th/" target="_blank">
                          <img src="./images/link01.jpg" alt="" class="link-Agency">
                        </a>
                          <hr>
                        <a href="https://www.vachiraphuket.go.th/" target="_blank"> 
                          <img src="./images/link02.jpg" alt="" class="link-Agency">
                        </a> 
                          <hr>
                        <a href="https://www.thalanghospital.go.th/" target="_blank"> 
                          <img src="./images/link03.jpg" alt="" class="link-Agency">
                        </a> 
                          <hr>
                        <a href=""> 
                          <img src="./images/hdc.jpg" alt="" class="link-Agency">
                        </a> 
                          <hr>
                        <a href="http://www.patonghospital.com/roomsys/" target="_blank"> 
                          <img src="./images/ss.jpg" alt="" class="link-Agency">
                        </a> 
                          <hr>
                        <a href="https://pkt.hdc.moph.go.th/hdc/main/index.php" target="_blank"> 
                          <img src="./images/hdc3.png" alt="" class="link-Agency">
                        </a> 
                          <hr>
                        <a href=""> 
                          <img src="./images/logo_kpi.jpg" alt="" class="link-Agency">
                        </a> 
                          <hr>
                        <a href="http://www.patonghospital.com/ya/ya4.php" target="_blank"> 
                          <img src="./images/ya.jpg" alt="" class="link-Agency">
                        </a>
                      </center>
                  </ol>
              </div>
          </div>
      </div>
      <br>
      <br>
      <footer class="blog-footer footer">
        <?php include "footer.php" ?>
      </footer>
    </main>
</body>
</html>
<script src=" person.js"></script>  

<script>
    $(document).ready(function() {
      $('.slide-container').addClass('show');
    });
  </script>
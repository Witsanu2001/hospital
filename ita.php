<?php
require('./api/connect.php');

$objCon = connectDB();
$strSQL = "SELECT * FROM moit";
$objQuery = mysqli_query($objCon, $strSQL);

  
?>


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
    


    <!-- Bootstrap core CSS -->
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">

    
  </head>

  <style>
    /* CSS */
    .col-8 {
    overflow-y: auto; /* สครอลลิ่งเมื่อเกินขอบเขต */
    max-height: calc(100vh - 100px); /* กำหนดความสูงสูงสุดของส่วน col-8 */
    }
  .col-4 {
    font-family: 'Arial', sans-serif; /* เปลี่ยนเป็น font ที่ต้องการ */
    font-size: 16px; /* เปลี่ยนเป็นขนาด font ที่ต้องการ */
  }
  .col-3 {
    flex: 0 0 auto;
    width: 20%;
  }
  p {
    margin-top: 0;
    margin-bottom: 0rem
  }
  </style>


 
  <body>
  <div class="scroll-to-top">
    <i class="fa-solid fa-angles-up" style="color: #ffffff;"></i>
  </div>
    
    <div class="container">
        <?php include "header.php"; ?>  
    </div>



<main class="curtain-container container">
    

    <nav class="nav d-flex flex-wrap justify-content-between">
    <?php include "nav-link.php"; ?>
</nav>
</div>

    <br>
    
      
    <div class="accordion" id="accordionExample">
        <?php
        while ($objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)) {
            ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading<?php echo $objResult['moit_id']; ?>">
                    <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $objResult['moit_id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $objResult['moit_id']; ?>">
                        <?php echo $objResult['moit_name']; ?>
                    </button>
                </h2>
                <div id="collapse<?php echo $objResult['moit_id']; ?>" class="accordion-collapse collapse show" aria-labelledby="heading<?php echo $objResult['moit_id']; ?>" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong><?php echo $objResult['moit_name'].' '.$objResult['moit_title']; ?></strong>
                        <br>
                        <br>
                        <?php
                        $strSQL_head = "SELECT head.head_name, head.head_pdf FROM head WHERE head.moit_id = {$objResult['moit_id']}";
                        $objQuery_head = mysqli_query($objCon, $strSQL_head);

                        if ($objQuery_head) {
                            while ($objResult_head = mysqli_fetch_array($objQuery_head, MYSQLI_ASSOC)) {
                                ?>
                                <p  id="head-<?php echo $objResult['moit_id']; ?>-<?php echo $objResult_head['head_name']; ?>">
                                    <?php echo $objResult_head['head_name']; ?>
                                </p>
                                <?php
                                $pdfFileName = $objResult_head['head_pdf'];
                                if (!empty($pdfFileName)) {
                                    ?>
                                    <a class="nav-link" href="./itapdf/<?php echo $pdfFileName; ?>" target="_blank">คลิกดูรายละเอียดเพิ่มเติม</a>
                                    <?php
                                } else {
                                    ?>
                                    <p class="nav-link">ไม่มีไฟล์ PDF</p>
                                    <?php
                                }
                            }
                        } else {
                            echo "Error: " . mysqli_error($objCon);
                        }
                        ?>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>



        

</main>
        <br>
        <br>
        <br>
        <br>
<footer class="blog-footer footer">
  <?php include "footer.php"; ?>
</footer>
  </body>
</html>

<script src="person.js"></script>
<script src="./calendar-01/js/jquery.min.js"></script>
<script src="./calendar-01/js/popper.js"></script>
<script src="./calendar-01/js/bootstrap.min.js"></script>
<script src="./calendar-01/js/main.js"></script>
<script src="https://unpkg.com/thai-buddhist-date/dist/index.umd.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- HTML -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function(){
    $(window).scroll(function(){
      var scrollPos = $(document).scrollTop();
      if (scrollPos > 100) { // เมื่อ scroll ไป 100px ให้เปลี่ยนสไตล์ของ Navigation Bar
        $('#navbar-example3').addClass('scrolled');
      } else {
        $('#navbar-example3').removeClass('scrolled');
      }
    });
  });
</script>

<style>
/* CSS */
#navbar-example3 {
  transition: all 0.3s ease; /* เพื่อให้การเปลี่ยนสไตล์มีการ transition อย่างสวยงาม */
  /* สไตล์เริ่มต้นของ Navigation Bar */
}
#navbar-example3.scrolled {
  /* สไตล์ของ Navigation Bar เมื่อ scroll ไปแล้ว */
}
</style>

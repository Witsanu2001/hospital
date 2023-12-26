<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="index.css">

<?php
    require_once './api/dbconnect.php';
    $sql = "SELECT np_img FROM news_pag";
    $result = mysqli_query($conn, $sql);
    $images = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $images[] = $row['np_img'];
    }
?>
<style>
/* CSS */
.carousel-item {
  background-color: var(--bg-color); /* ใช้ตัวแปรสีที่กำหนด */
}
</style>

<div id="carouselControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style="--bg-color: #ff0000;">
      <img class="d-block w-100" src="./images/img-page.jpg">
    </div>
    <?php foreach ($images as $index => $image): ?>
      <div class="carousel-item" style="--bg-color: #00ff00;">
        <img class="d-block w-100" src="./images/news/<?php echo $image; ?>" style="object-fit: contain; width: 100%; height: 428px;">
      </div>
    <?php endforeach; ?>
  </div>

  <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  $('.carousel-item img').each(function(index) {
    var imgSrc = $(this).attr('src');
    var image = new Image();
    image.src = imgSrc;
    image.onload = function() {
      var canvas = document.createElement('canvas');
      var context = canvas.getContext('2d');
      context.drawImage(image, 0, 0);
      var pixelData = context.getImageData(0, 0, 1, 1).data;
      var color = `rgb(${pixelData[0]}, ${pixelData[1]}, ${pixelData[2]})`;
      $(`.carousel-item:nth-child(${index + 1})`).css('--bg-color', color);
    };
  });
});
</script>

<script>
  $('.carousel').carousel({
    interval: 5000
  });
</script>





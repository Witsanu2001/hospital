<?
include ('../cp/connect.php');
	
	$Query = mysql_query("SELECT * FROM tb_news WHERE news_slide='1' ORDER BY news_id DESC ");
	$totalp = mysql_num_rows($Query);
	
	$Query2 = mysql_query("SELECT * FROM tb_news WHERE news_slide='1' ORDER BY news_id DESC ");
	$total = mysql_num_rows($Query2);

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title>Amazing Slider</title>
    
    <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
    <!-- End of head section HTML codes -->
    
</head>
<body>
    
    <!-- Insert to your webpage where you want to display the slider -->
    <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:500px;padding-left:0px; padding-right:494px;margin:0px auto 0px;">
        <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
            <ul class="amazingslider-slides" style="display:none;">
            <?
while($r=mysql_fetch_array($Query)){
$news_id = $r['news_id'];
$news_name= $r['news_name'];
$news_detail=$r['news_detail'];
$news_date=$r['news_date'];
$news_type=$r['news_type'];
$news_img=$r['news_img'];
$news_slide=$r['news_slide'];

$count++;
echo"
	<li><a href='../news.php?id=$news_id' target='_blank' ><img src='../images/news/$news_img' alt='$news_name' data-description='
	";
	echo mb_substr(strip_tags($news_detail), 0, 150, 'UTF-8') . ' ...';
	echo"
	' /></a></li>";

}



?>
            </ul>
            <ul class="amazingslider-thumbnails" style="display:none;">
            <?
while($r=mysql_fetch_array($Query2)){
$news_id = $r['news_id'];
$news_name= $r['news_name'];
$news_detail=$r['news_detail'];
$news_date=$r['news_date'];
$news_type=$r['news_type'];
$news_img=$r['news_img'];
$news_slide=$r['news_slide'];

$count++;
echo"
	<li><img src='../images/news/$news_img' alt='$news_name' /></li>";

}


?>
            </ul>
        <div class="amazingslider-engine"><a href="http://amazingslider.com" title="Responsive jQuery Slider">Responsive jQuery Slider</a></div>
        </div>
    </div>
    <!-- End of body section HTML codes -->
    
</body>
</html>
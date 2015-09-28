<?php
session_start();
include_once("products/config.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Peach Press</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="slider.css">
<script src="js/jquery.min.js"></script>

<script>
jQuery(document).ready(function ($) {

  jQuery(document).ready(function ($){
    setInterval(function () {
        moveRight();
    }, 6000);
  });
  
	var slideCount = $('#slider ul li').length;
	var slideWidth = $('#slider ul li').width();
	var slideHeight = $('#slider ul li').height();
	var sliderUlWidth = slideCount * slideWidth;
	
	$('#slider').css({ width: slideWidth, height: slideHeight });
	
	$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	
    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 500, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 500, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });

});    

</script>

</head>

<body>
<?php include 'header.php';?>

<div class="content">
<div id="PhotoSlide">

<div id="slider">
  <a href="#" class="control_next">></a>
  <a href="#" class="control_prev"><</a>
  <ul>
	<li><a href="http://www.dalvertu.com/peachpress/products"><img src="images/slideimg1.jpg" alt="Slide Image 1" class="imgframe"></a></li>
    <li><a href="http://www.dalvertu.com/peachpress/products/accessories/"><img src="images/slideimg2.jpg" alt="Slide Image 2" class="imgframe"></a></li>
    <li><a href="http://www.dalvertu.com/peachpress/products/prints/"><img src="images/slideimg3.jpg" alt="Slide Image 3" class="imgframe"></a></li>
    <li><a href="http://www.dalvertu.com/peachpress/info/join.php"><img src="images/slideimg4.jpg" alt="Slide Image 4" class="imgframe"></a></li>

  </ul>  
</div>


</div>

<div id="Collections" class="Categories">

<div id="leftcollection">
<a href="http://www.dalvertu.com/peachpress/products/mens"><img src="images/side2.jpg" width="200px" height="400px"></a>
</div>

<div id="midcollection">
<a href="http://www.dalvertu.com/peachpress/products/prints"><img src="images/top1.jpg" width="400px" height="175px"></a>
<a href="http://www.dalvertu.com/peachpress/products/homedecor"><img src="images/bot1.jpg" width="400px" height="175px"></a>
</div>

<div id="rightcollection">
<a href="http://www.dalvertu.com/peachpress/products/womens"><img src="images/side1.jpg" width="200px" height="400px"></a>
</div>
<br>
</div>

<div id="NEW PRODUCTS" class="Categories">
	<h2 align="left" style="margin-left:30px;">NEW PRODUCTS</h2>
	<article>	
	<?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $rand=rand(1, 40);
	$results = $mysqli->query("SELECT * FROM products ORDER BY RAND() LIMIT 4");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			
			echo '<div id="producth">';
			echo '<a href="http://www.dalvertu.com/peachpress/products/id/'.$obj->product_code.'.php"><img src="http://www.dalvertu.com/peachpress/products/images/'.$obj->product_img_name.'" height="200px" width="200px">';
			echo '<h4>'.$obj->product_name.'</h4>';
			echo '<h4>'.$currency.$obj->price.'</h4></a>';
            echo '</div>';
        }
    
    }
    ?>
</article>
	
</div>
</div>


<?php include 'footer.php';?>

</body>

</html>
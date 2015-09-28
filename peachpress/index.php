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
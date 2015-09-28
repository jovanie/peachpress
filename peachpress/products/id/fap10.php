<?php
session_start();
include_once("../config.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Peach Press</title>
<link rel="stylesheet" href="../../style.css">

</head>

<body>
<?php include '../../header.php';?>

<div class="content"><div id="spaceb4">&nbsp;</div>
    
	<?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $mysqli->query("SELECT * FROM prints ORDER BY id ASC LIMIT 1 OFFSET 33");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			echo '<div class="product">'; 
			echo '<form method="post" action="../cart_update.php">';
			echo '<div class="product-thumb"><img src="../images/'.$obj->product_img_name.'"></div>';
            echo '<div class="product-content"><h3>'.$obj->product_name.'</h3>';
            echo '<div class="product-desc">'.$obj->product_desc.'</div>';
            echo '<div class="product-info">';
			echo '<p>&nbsp;</p>Price '.$currency.$obj->price.' | ';
            echo 'Qty <input type="text" name="product_qty" value="1" size="3" />';
			echo '<button class="add_to_cart">Add To Cart</button>';
			echo '</div></div>';
            echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
        }
    
    }
    ?>
	<div id="blankspace>
	<hr width = "85%" align="center" color="white" size="0px">
	</div>
	<?php include 'moreitems.php';?>
	
</div>
</div>


</div>

<?php include '../../footer.php';?>

</body>
</html>
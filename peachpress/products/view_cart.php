<?php
session_start();
include_once("config.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Peach Press</title>
<link rel="stylesheet" href="http://www.dalvertu.com/peachpress/style.css">
</head>

<body>
<?php include '../header.php';?>

<div class="content"> 
<div id="spaceb4">
<p>&nbsp;</p>
</div>

<div id="products-wrapper">
 <h2>View Cart</h2>
 <div class="view-cart">
 	<?php
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	if(isset($_SESSION["products"]))
    {
	    $total = 0;
		echo '<form method="post" action="paypal-express-checkout/process.php">';
		echo '<ul>';
		$cart_items = 0;
		foreach ($_SESSION["products"] as $cart_itm)
        {
           $product_code = $cart_itm["code"];
		   $results = $mysqli->query("SELECT product_name,product_desc, price FROM products WHERE product_code='$product_code' LIMIT 1");
		   $obj = $results->fetch_object();
		   
		    echo '<li class="cart-itm">';
            echo '<div class="product-info">';
			echo '<h3>'.$obj->product_name.' (Code :'.$product_code.')</h3> ';
			echo '<div class="cart-item-mid">';
			echo '<a href="http://www.dalvertu.com/peachpress/products/id/'.$product_code.'.php"><img src="http://www.dalvertu.com/peachpress/products/images/'.$product_code.'.jpg" height="100px" width="100px"></a>';
			echo ''.$obj->product_desc.'';
			echo '</div>';
			echo '<div class="cart-item-right">';
			
			echo '<div class="p-price">ea. '.$currency.$obj->price.'<p></p></div>';
			echo '<div class="p-qty">Qty : '.$cart_itm["qty"]. '</div>';
            echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
			
			echo '</div>';
			echo '<p>&nbsp;</p><hr width = "100%" align="center" color="black" size="1px"> ';
            echo '</li>';
			$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			$total = ($total + $subtotal);
			$taxtotal = ($total*1.1);

			echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj->product_name.'" />';
			echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$product_code.'" />';
			echo '<input type="hidden" name="item_desc['.$cart_items.']" value="'.$obj->product_desc.'" />';
			echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$cart_itm["qty"].'" />';
			$cart_items ++;
			
        }
    	echo '</ul>';
		echo '<span class="totaltext">';
		echo '<h4>Subtotal : '.$currency.$total.'&nbsp; </h4><p>Tax = 10%</p>  ';
		echo '<h3>Total : '.$currency.$taxtotal.'&nbsp; </h3>  ';
		echo '<a href="checkout.php"><h3>Check-Out</h3></a>';
		echo '</span>';
		echo '</form>';
		
    }else{
		echo 'Your Cart is empty';
	}
	
    ?>
    </div>
</div>

</div>
<?php include '../footer.php';?>

</body>

</html>
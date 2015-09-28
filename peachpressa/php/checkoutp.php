<?php
session_start();
include_once("config.php");
?>

<?php
echo '<div id="products-wrapper">
 <h2>View Cart</h2>
 <div class="view-cart">';
	
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
		   
		    
			$cost = ($cart_itm["qty"] * $obj->price);
			echo '<p>'.$obj->product_name.' (Code :'.$product_code.') '.$currency.$obj->price.' x '.$cart_itm["qty"].' = '.$currency.$cost.'';
            echo '</p></li>';
			
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
		echo '<span style="width:300px; float:right;" class="checkouttotal">';
		echo '<p>Subtotal : '.$currency.$total.'';
		echo 'Tax = 10%';
		echo '<h3>Total : '.$currency.$taxtotal.'</h3> </p>';
		echo '</span>';
		echo '</form>';
		
    }else{
		echo 'Your Cart is empty';
	  }
	  echo '<br><br><br><br>';
	  include 'billing.php';
	  echo '</div></div>';
    ?>

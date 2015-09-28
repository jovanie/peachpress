<div id="cd-cart">
    <h2>Cart</h2>
    <ul class="cd-cart-items">
        <?php
            $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
        	if(isset($_SESSION["products"]))
            {
        	    $subtotal = 0;
        		echo '<form method="post" action="paypal-express-checkout/process.php">';
        		echo '<ul>';
        		$cart_items = 0;
        		foreach ($_SESSION["products"] as $cart_itm)
                {
                   $product_code = $cart_itm["code"];
        		   $results = $mysqli->query("SELECT product_name,product_desc, price FROM products WHERE product_code='$product_code' LIMIT 1");
        		   $obj = $results->fetch_object();
            		   
        		    echo '<li>';
            	    echo '<span class="cd-qty">1x</span>';
            		echo '<h3>'.$obj->product_name.' (ID :'.$product_code.')</h3> ';
        			echo '<img src="product_img/'.$product_code.'.jpg" height="100px" width="100px"></a>';
        			echo ''.$obj->product_desc.'';
        			
                	echo '<div class="cd-price">ea. '.$currency.$obj->price.'<p></p></div>';
            		//echo '<div class="p-qty">Qty : '.$cart_itm["qty"]. '</div>';
                    echo '<a class="cd-item-remove cd-img-replace" href="php/cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">Remove</a>';
                    echo '</li>';
        			$subtotal = ($subtotal + $cart_itm["price"]*1);
            
        			echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj->product_name.'" />';
        			echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$product_code.'" />';
        			echo '<input type="hidden" name="item_desc['.$cart_items.']" value="'.$obj->product_desc.'" />';
        			//echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$cart_itm["qty"].'" />';
        			$cart_items ++;
            			
                }
                echo '</ul>';
            	echo '<div class="cd-cart-total">';
        		echo '<p>&nbsp;&nbsp;Subtotal : '.$currency.$subtotal.'&nbsp; </p>';
        		echo '<a href="checkout.php" class="checkout-btn">Checkout</a>';
        		echo '</form>';
            		
            }else{
        		echo '<li>Your Cart is empty</li>';
        	}
            	
        ?>
	</ul> <!-- cd-cart-items -->
</div> <!-- cd-cart -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/main.js"></script> <!-- Gem jQuery -->
    </body>

</HTML>
<?php include 'header.php';?>

	<div id="content">
		<ul id="cd-gallery-items" class="cd-container">
            <?php
            	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
                
            	$results = $mysqli->query("SELECT * FROM products ORDER BY product_code DESC");
            	
                if ($results) { 
            	
                    //fetch results set as object and output HTML
                    while($obj = $results->fetch_object())
                    {
            			echo '<li>';
            			echo '<form method="post" action="php/cart_update.php">';
            			echo '<div class="product-thumb"><img src="img/products/'.$obj->product_code.'.jpg"></div>';
                        echo '<h3>'.$obj->product_name.'</h3>';
                        echo '<div class="product-desc">'.$obj->product_desc.'</div>';
                        echo '<div class="product-info">';
            			echo '<p>&nbsp;</p>Price '.$currency.$obj->price.' | ';
            			echo '<button class="add_to_cart">Add To Cart</button>';
            			echo '</div>';
                        echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';
                        echo '<input type="hidden" name="type" value="add" />';
            			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
                        echo '</form>';
                        echo '</li>';
                    }
                
                }
            ?>    			
    	</ul>
	</div>

<?php include 'footer.php';?>
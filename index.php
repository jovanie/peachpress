<?php include 'header.php';?>

	<div id="content">
		<ul id="cd-gallery-items" class="cd-container">

        <script>
            //save class name so it can be reused easily
            //if I want to change it, I have to change it one place
            var classHighlight = 'selected'; 

            //.click() will return the result of $('.thumbnail')
            //I save it for future reference so I don't have to query the DOM again
            var $thumbs = $('.productItem').click(function(e) {
                e.preventDefault();
                //run removeClass on every element
                //if the elements are not static, you might want to rerun $('.thumbnail')
                //instead of the saved $thumbs
                $thumbs.removeClass(classHighlight);
                //add the class to the currently clicked element (this)
                $(this).addClass(classHighlight);
            });
        </script>

            <?php
            	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
                
            	$results = $mysqli->query("SELECT * FROM products ORDER BY product_code ASC");
            	
                if ($results) { 
                    while($obj = $results->fetch_object())
                    {

                        echo '<li class="productItem"><form method="post" action="php/cart_update.php">';
                        echo '<a href="#">';
            			echo '<div class="productImg"><img src="img/products/'.$obj->product_code.'.jpg"></div>';
                        echo '<h3>'.$obj->product_name.'</h3>';
                            echo '<div class="productDesc">'.$obj->product_desc.'</div>';
                            echo '<select name="size">'
                            if($obj->XSMALL =! "")echo "<option value=\"XSMALL\">"XSMALL"</option>";
                            echo '</select>'
                            echo '<div class="productInfo">';
                            echo '<p>&nbsp;</p>Price '.$currency.$obj->price.' | ';
                            echo '<button class="add_to_cart">Add To Cart</button>';
                            echo '</div>';
                        echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';
                        echo '<input type="hidden" name="type" value="add" />';
            			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
                        echo '</a></form></li>';
                    }
                }
            ?>    			
    	</ul>
	</div>

<?php include 'footer.php';?>
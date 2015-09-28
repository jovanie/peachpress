
<article>	
	<h1>Other Items</h1>
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
			echo '<a href="http://www.dalvertu.com/peachpress/products/id/'.$obj->product_code.'.php"><img src="http://www.dalvertu.com/peachpress/products/images/'.$obj->product_img_name.'" height="150px" width="150">';
			echo '<h4>'.$obj->product_name.'</h4>';
			echo '<h4>'.$currency.$obj->price.'</h4></a>';
            echo '</div>';
        }
    
    }
    ?>
</article>
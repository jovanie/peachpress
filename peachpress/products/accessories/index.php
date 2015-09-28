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
<div id="spaceb4">
<p>&nbsp;</p>
</div>

<article>


	<?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $mysqli->query("SELECT * FROM accessories ORDER BY id ASC");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			echo '<div id="product">';
			echo '<a href="http://www.dalvertu.com/peachpress/products/id/'.$obj->product_code.'.php"><img src="http://www.dalvertu.com/peachpress/products/images/'.$obj->product_img_name.'" height="225px" width="225">';
			echo '<h4>'.$obj->product_name.'</h4>';
			echo '<h4>'.$currency.$obj->price.'</h4></a>';
            echo '</div>';
        }
    
    }
    ?>
</article>

<?php include '../../footer.php';?>

</body>
</html>
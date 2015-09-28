<header>

<div class="headban">
<a href="http://www.dalvertu.com/peachpress">PEACH PRESS</a>
</div>
<nav>
<ul>
  <li class="current-menu-item"><a href="http://www.dalvertu.com/peachpress">Home</a></li>
  <li><a href="http://www.dalvertu.com/peachpress/info/artists.php">Artists</a>
  </li>
  
  <li><a href="http://www.dalvertu.com/peachpress/products/">Shop</a>
    <ul>
      <li><a href="http://www.dalvertu.com/peachpress/products/prints">Prints</a></li>
	  <li><a href="http://www.dalvertu.com/peachpress/products/womens">Women's</a></li>
	  <li><a href="http://www.dalvertu.com/peachpress/products/mens">Men's</a></li>
	  <li><a href="http://www.dalvertu.com/peachpress/products/accessories">Accessories</a></li>
	  <li><a href="http://www.dalvertu.com/peachpress/products/homedecor">Home Decor</a></li>
    </ul>
  </li>
  
  <li><a href="http://www.dalvertu.com/peachpress/info/about.php">About Us</a> </li>

  <li><a href="http://www.dalvertu.com/peachpress/info/contact.php">Contact</a></li>
      

</ul>
</nav>
<div class="cart">
<?php
if(isset($_SESSION["products"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["products"] as $cart_itm)
    {
        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
    }
    echo '</ol>';
    echo '<span class="check-out-txt"><a href="http://www.dalvertu.com/peachpress/products/view_cart.php"> View Cart</a> Total : '.$currency.$total.'</span>';
}else{
    echo '<p>Your cart is empty.</p>';
}
?>
</div>
</header>
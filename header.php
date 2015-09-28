<?php
session_start();
include_once("php/config.php");
?>

<!DOCTYPE HTML>
	<html lang="en" class="no-js">
    <head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" href="css/style.css">
    	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js'></script>

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    </head>
	<body>
		<div class="container">
			<div id="header">
				<div id="headname"><h2>Peach Press</h2></div>
				<nav>
					<ul>
						<li><a href="index.php">Home</a></li>
		    			<li><a href="#0">About</a></li>
		    			<li><a href="products.php">Shop</a></li>
		    			<li><a href="#0">Gallery</a></li>
		    			<li><a href="#0">Contact</a></li>
					</ul>
				</nav>
			
				<div id="dropCart">
					<a href-"#"><i id="cartimg" class="fa fa-shopping-cart fa-lg"></i></a>
				</div>
			</div>
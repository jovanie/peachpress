<?php
session_start();
include_once("../products/config.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Peach Press</title>
<link rel="stylesheet" href="http://www.dalvertu.com/peachpress/style.css">
<style>
.info-text{text-align: left; padding-left:25px;}
.info-text h3 {margin-left:10px;}
.info-text p {margin-left:30x;}
.info-text h4 {margin-left:15px;}
</style>
</head>

<body>
<?php include '../header.php';?>

<div class="content"> 
<div id="spaceb4">
<p>&nbsp;</p>
</div>
<!--  You can input your information here -->
<div class="info-text">
<p>
<h1>FAQ</h1>
</p>

<h3>What payment methods do you accept?</h3>
<p>As of right now, we are only accepting Credit Card payments from Visa, MasterCard, AMEX, and Discover.</p>
<p>The merchant name that will appear on your credit card statement is: <strong>PeachPress</strong>.</p>
<h4>When will my credit card be charged?</h4>
<p>Once your order is processed to ship.</p>


<h3>What is your <strong>Return Policy</strong>?</h3>
<p>Online purchases are valid for an exchange, credit, or refund 30 days from the date of purchase.</p>
<h4>How soon will I receive a refund for my return?</h4>
<p>Please allow 2-3 weeks from the return shipped date for your account to be credited, and 1-2 billing cycles for the credit to appear on your statement.</p>


<h3>What <strong>shirt sizes</strong> do you offer?</h3>
<p>MEN: X-Small, Small, Medium, Large, X-Large, 2X-Large</p>
<p>WOMEN: Small, Medium, Large, X-Large </p>
<p>As of right now, we do not accommodate children's sizes.</p>


<h3>I cannot find the answers to my questions, how do I reach <strong>Customer Service</strong>?</h3>
<p>Pleace click <a href="http://www.dalvertu.com/peachpress/info/contact.php">here</a> to contact our Customer Service Team.</p>

</p>
</div>
<!--  End of Input -->
</div>
<?php include '../footer.php';?>

</body>

</html>
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
 #biohead img {
 alignment-adjust:top;margin-top:-50px;
 width:150px;
 -moz-border-radius:80px;
 border-radius:80px; 
 border-style: solid;
    border-color: white;
    border-width: 2px;}
</style>
</head>

<body>
<?php include '../header.php';?>

<div class="content"> 
<div id="spaceb4">
<p>&nbsp;</p>
</div>
<!--  You can input your information here -->
<p>
<h1>ARTISTS</h1>
<!-- higher the h the smaller the font -->
<div id="biohead">
<img src="jov.jpg">
</div>
<p>
JOVANIE is a <i>photographer</i> that likes watching 30 Rock with a big bowl chili in his hands. He also enjoys playing video games like Persona 3 and Shadow of Mordor. 
When he isn't playing video games or managing Peach Press, you could find him playing with his pet dogs or playing smooth jazz with his saxophone on the football field. 
His art reflects his love for the urban side of Chicago and how beautiful city-scapes can be.
</p>
<div id="biohead">
<img src="rai.jpg">
</div>
<p>
RAIZELE is a <i>graphic designer</i> and a <i>photographer</i> that is currently enrolled in AP Studio Art with a concentration on the "Female Gaze".
She aspires to become a game programmer and a film director someday but she is currently content being one of the founders of Peach Press. 
During rainy days, you can find her huddled in a bundle of blankets reading a book with some hot chocolate or tea beside her.
</p>
</p>
<!--  End of Input -->
</div>
<?php include '../footer.php';?>

</body>

</html>
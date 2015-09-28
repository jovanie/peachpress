<?php
session_start();
include_once("config.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Peach Press</title>
<link rel="stylesheet" href="http://www.dalvertu.com/peachpress/style.css">
<script src="http://www.dalvertu.com/peachpress/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript">
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>

<style>
#billingform {
width:900px;
margin:0 auto;
}

#shipping table{
float:left;
}

#billing table{
float:right;
}


label {
display:block;
margin-top:10px;
letter-spacing:2px;
color:black;
text-align:left;
}

input, textarea {
width:150px;
height:15px;
background:#efefef;
border-radius:5px;
-moz-border-radius:5px;
-webkit-border-radius:5px;
border:1px solid #dedede;
color:#3a3a3a;
}

input:focus, textarea:focus {
border:1px solid #97d6eb;
}

textarea {
background: no-repeat #efefef;
}

#submit {
width:125px;
height:30px;
border:none;
cursor:pointer;
}

#submit:hover {
opacity:0.9;
}
</style>

</head>

<body>
<?php include '../header.php';?>

<div class="content"> 
<div id="spaceb4">
<p>&nbsp;</p>
</div>

<iframe name="Stack" src="checkoutp.php" width="900px" frameborder="0" scrolling="no" id="iframe" onload='javascript:resizeIframe(this);' />

</div>
 
</body>

</html>
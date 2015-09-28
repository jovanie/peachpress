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
.form {
  float:left;
  text-align: center;
  margin-left: 350px;
  margin-right: auto;
}
</style>
</head>

<body>
<?php include '../header.php';?>

<div class="content"> 
<div id="spaceb4">
<p>&nbsp;</p>
</div>
<!--  You can input your information here -->
<div class="form">
  <form method="post" action="send_contact.php">
<table style="text-align:center;" align="center">
<tr>

        
            <td><label>Name</label></td>
            <td><input name="name" placeholder="Type Here"></td>
            </tr><tr>
            <td><label>Email</label></td>
            <td><input name="email" type="email" placeholder="Type Here"></td>
            </tr><tr>
             <td> <label>Message</label></td>
             <td> <textarea name="message" placeholder="Type Here"></textarea></td>
            </tr><tr>
        </p>
    </tr>
</table>
<input id="submit" name="submit" type="submit" value="Submit">
</form>
</div>
<!--  End of Input -->
</div>
<?php include '../footer.php';?>

</body>

</html>
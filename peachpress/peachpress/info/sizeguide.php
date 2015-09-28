<?php
session_start();
include_once("../products/config.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Peach Press</title>
<link rel="stylesheet" href="http://www.dalvertu.com/peachpress/style.css">
</head>

<body>
<?php include '../header.php';?>

<div class="content"> 
<div id="spaceb4">
<p>&nbsp;</p>
</div>
<!--  You can input your information here -->
<table align="center">
	<tr>
		<td><b><b>Women's Sizes</b></b></td>
		<td><b>Small</b></td>
		<td><b>Medium</b></td>
		<td><b>Large</td>
		<td><b>X-Large</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td><b>Size</b></td>
		<td>0-2</td>
		<td>4-6</td>
		<td>8-10</td>
		<td>12-14</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td><b>Chest (inches)</b></td>
		<td>30-32</td>
		<td>32-34</td>
		<td>36-38</td>
		<td>40-42</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td><b>Waist (inches)</b></td>
		<td>25-26</td>
		<td>27-28</td>
		<td>30-32</td>
		<td>33-35</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		
	</tr>
	<tr>
		<td><b><b>Men's Sizes</b></b></td>
		<td><b>X-Small</b></td>
		<td><b>Small</b></td>
		<td><b>Medium</b></td>
		<td><b>Large</b></td>
		<td><b>X-Large</b></td>
		<td><b>2X-Large</b></td>
	</tr>
	<tr>
		<td><b>Chest (inches)</b></td>
		<td>30-32</td>
		<td>34-46</td>
		<td>38-40</td>
		<td>42-44</td>
		<td>46-48</td>
		<td>48-50</td>
	</tr>
	<tr>
		<td><b>Waist (inches)</b></td>
		<td>28-30</td>
		<td>30-32</td>
		<td>32-33</td>
		<td>33-34</td>
		<td>36-38</td>
		<td>40-42</td>
		
	</tr>
	
	
	

</table>
<!--  End of Input -->
</div>
<?php include '../footer.php';?>

</body>

</html>
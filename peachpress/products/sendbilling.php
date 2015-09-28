<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
	$address2 = $_POST['address2'];
	$city = $_POST['city'];
	$zipcode = $_POST['zipcode'];
	$country = $_POST['country'];
	$state = $_POST['state'];
	$phone = $_POST['phone'];
	$orderresults = $totalresult;
	
	$credit = $_POST['credit'];
	$cardname = $_POST['cardname'];
	$creditnumber = $_POST['creditnumber'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$securitycode = $_POST['securitycode'];
	
    $from = 'From: dalvertu.com'; 
    $to = 'jovaniedelacruz@gmail.com'; 
    $subject = 'Order on Peach Press';
    $human = $_POST['human'];
			
    $body = "
	From: $name\n 
	E-Mail: $email\n 
	Order:\n 
	
	
	\n
	
	Address:\n
	$address \n
	$address2 \n
	$city $zipcode \n
	$state $country \n
	$phone \n
	
	Credit Information:\n
	Card Name: $cardname \n
	Card: $credit $creditnumber \n
	Expiration: $month / $year \n
	Security Code: $securitycode
	
	";
				
    if ($_POST['submit']) {				 
        if (mail ($to, $subject, $body, $from) && $_POST['checkbox'] == 'yes') { 
	    echo '<p>Just Peachy! Your order has been recieved! Order confirmation with tracking information will be sent to your email.</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } 
?>
<form id="billingform" method="post" action="sendbilling.php">

<table style="margin-left:150px;">
	<tr>
		<td>
			<section id="shipping">
<table style="width:300px;" >
<h3>Shipping Information</h3>
	<tr>
		<td><label>Name</label></td>
		<td><input name="name" placeholder="Type Here"></td>
	</tr>
	<tr>
		<td><label>Email</label></td>
		<td><input name="email" type="email" placeholder="Type Here"></td>
	</tr>
	<tr>
		<td><label>Address</label></td>
		<td><textarea name="address" id="address" placeholder="Type Here"></textarea></td>
	</tr>
	<tr>
		<td><label>Address 2</label></td>
		<td><textarea name="address2" placeholder="Type Here"></textarea></td>
	</tr>
	<tr>
		<td><label>City</label></td>
		<td><textarea name="city" placeholder="Type Here"></textarea></td>
	</tr>
	<tr>
		<td><label>Post/ZIP Code</label></td>
		<td><textarea name="zipcode" placeholder="Type Here"></textarea></td>
	</tr>
	<tr>
		
	</tr>
	<tr>
		<td><label>State / Country</label></td>
		<td><select name="state" size="1">
	<option value="AL">AL</option>
	<option value="AR">AR</option>
	<option value="AZ">AZ</option>
	<option value="CA">CA</option>
	<option value="CO">CO</option>
	<option value="CT">CT</option>
	<option value="DE">DE</option>
	<option value="FL">FL</option>
	<option value="GA">GA</option>
	<option value="ID">ID</option>
	<option value="IL">IL</option>
	<option value="IN">IN</option>
	<option value="IA">IA</option>
	<option value="KS">KS</option>
	<option value="KY">KY</option>
	<option value="LA">LA</option>
	<option value="ME">ME</option>
	<option value="MD">MD</option>
	<option value="MA">MA</option>
	<option value="MI">MI</option>
	<option value="MN">MN</option>
	<option value="MS">MS</option>
	<option value="MO">MO</option>
	<option value="MT">MT</option>
	<option value="NE">NE</option>
	<option value="NV">NV</option>
	<option value="NH">NH</option>
	<option value="NJ">NJ</option>
	<option value="NM">NM</option>
	<option value="NY">NY</option>
	<option value="NC">NC</option>
	<option value="ND">ND</option>
	<option value="OH">OH</option>
	<option value="OK">OK</option>
	<option value="OR">OR</option>
	<option value="PA">PA</option>
	<option value="RI">RI</option>
	<option value="SE">SE</option>
	<option value="SD">SD</option>
	<option value="TN">TN</option>
	<option value="TX">TX</option>
	<option value="UT">UT</option>
	<option value="VT">VT</option>
	<option value="VA">VA</option>
	<option value="WA">WA</option>
	<option value="WV">WV</option>
	<option value="WI">WI</option>
	<option value="WY">WY</option>
	</select>
		<select name="country" size="1">
		<option value="USA">USA</option>
		</select>
	</td>
	</tr>
	
	<tr>
		<td><label>Phone</label></td>
		<td><textarea name="phone" placeholder="Type Here"></textarea></td>
	</tr>
	</table>
	</section>
		</td>
		
		<td>
			<section id="billing">
	<table style="width:300px;" >	
	<h3>Billing Information</h3>
	<tr>
		<td><label>Credit Card</label></td>
		<td><select name="credit" size="1">
	<option value="VISA">VISA</option>
	<option value="Master Card">Master Card</option>
	<option value="American">American Express</option>
	<option value="Discover">Discover</option>
	</select></td>
	</tr>
	
	<tr>
		<td><label>Name On Card</label></td>
		<td><textarea name="cardname" placeholder="Type Here"></textarea></td>
	</tr>
	
	<tr>
		<td><label>Card Number</label></td>
		<td><textarea name="creditnumber" placeholder="Type Here"></textarea></td>
	</tr>
	
	<tr>
		<td><label>Expiration Date</label></td>
		<td>
			<select name="month" size="1">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			</select>
			<select name="year" size="1">
			<option value="2015">2015</option>
			<option value="2016">2016</option>
			<option value="2017">2017</option>
			<option value="2018">2018</option>
			<option value="2019">2019</option>
			<option value="2020">2020</option>
			<option value="2021">2021</option>
			<option value="2022">2022</option>
			<option value="2023">2023</option>
			<option value="2024">2024</option>
			<option value="2025">2025</option>
			<option value="2026">2026</option>
			<option value="2027">2027</option>
			<option value="2028">2028</option>
			<option value="2029">2029</option>
			<option value="2030">2030</option>			
			</select>
		</td>
	</tr>
	
	<tr>
		<td><label>Security Code</label></td>
		<td><textarea name="securitycode" placeholder="123"></textarea></td>
	</tr>
	
  		<input type="checkbox" name="checkbox" value="yes"> I understand that this is not an actual business and that the information entered is not valid
		
	
	
	<tr>
		<td>&nbsp;</td>
		<td><input id="submit" name="submit" type="submit" value="Submit"></td>
	<tr>
	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	<tr>
	
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	<tr>
	
</table>
</section>
		</td>
	</tr>
</table>

    </form>

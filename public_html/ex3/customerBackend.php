<?php 

	echo ' <link rel="stylesheet" type="text/css" href="style.css"> ';

	$item1 = $_POST['i1'];
	$item2 = $_POST['i2'];
	$item3 = $_POST['i3'];
	
	$amount1 = $_POST['in1'];
	$amount2 = $_POST['in2'];
	$amount3 = $_POST['in3'];
	
	$itemTotal = 0;
	
	if($item1 == "29.99") {
		$item1Total=$amount1*29.99;
		$itemTotal=$itemTotal+$item1Total;
	};
	if($item2 == "0.99") {
		$item2Total=$amount2*0.99;
		$itemTotal=$itemTotal+$item2Total;
	}
	if($item3 == "499.99") {
		$item3Total=$amount3*499.99;
		$itemTotal=$itemTotal+$item3Total;
	}
	
	$ship = $_POST['ship'];
	
	$shipTotal = 0;
	
	if($ship == "Free") {$shipTotal+=0;}
	if($ship == "3 Day") {$shipTotal+=5.00;}
	if($ship == "Overnight") {$shipTotal+=50.00;}
	
	$totalCost = $itemTotal + $shipTotal;
	
	$userName = $_POST['username'];
	$password = $_POST['password'];
	
	echo "<br><b>Hello $userName! Your password is $password!</b>";
	echo "<br> <b>Your purchase has been processed. Here is your receipt!</b> <br><br>";
	


	echo "<table border=\"1\">
	<tr>
		<th>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</th>
		<th> Quantity </th>
		<th> Cost Per Item </th>
		<th> SubTotal </th>
	</tr>
	<tr>
		<th> Item 1 </th>
		<td> $amount1 </td>
		<td> $$item1 </td>
		<td> $$item1Total </td>
	</tr>
	<tr>
		<th> Item 2 </th>
		<td> $amount2 </td>
		<td> $$item2 </td>
		<td> $$item2Total </td>
	</tr>
	<tr>
		<th> Item 3 </th>
		<td> $amount3</td>
		<td> $$item3 </td>
		<td> $$item3Total </td>
	</tr>
	<tr>
		<th> Shipping </t>
		<td> $ship </td>
		<td> $$shipTotal </td>
	</tr>
	<tr>
		<th> Total Cost </th>
		<td> $$totalCost </td>
	<tr>";
?>
<?php
	$sp = new ShippingPriceModel();
	$city = $_GET['ship_city'];
	$price = $sp->getPriceByCity($city);
	if($price == null){
		echo 25000;
	} else {
		echo $price;
	}
?>
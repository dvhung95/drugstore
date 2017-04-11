<?php
class Order{
	public $order_id;
	public $customer_id;
	public $drug_id;
	public $shipper_id;
	public $shipping_price_id;
	public $quantity;
	public $order_date;
	public $shipped_date;
	public $ship_address;
	public $ship_city;

	public function __construct($order_id, $customer_id, $drug_id, $shipper_id, $shipping_price_id
		, $quantity, $order_date, $shipped_date, $ship_address, $ship_city) {
			$this -> order_id = $order_id;
			$this -> customer_id = $customer_id;
			$this -> drug_id = $drug_id;
			$this -> shipper_id = $shipper_id;
			$this -> shipping_price_id =  $shipping_price_id;
			$this -> quantity = $quantity;
			$this -> order_date = $order_date;
			$this -> shipped_date = $shipped_date;
			$this -> ship_address = $ship_address;
			$this -> ship_city = $ship_city;
	}
}
?>
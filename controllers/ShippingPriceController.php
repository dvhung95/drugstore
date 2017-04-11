<?php

class ShippingPriceController {
	private $model;

	
	public function __construct($model) {
		$this->model = $model;
	}

	public function addShippingPrice(){    
		$ship_city = $_POST['ship_city'];
		$price = $_POST['price'];
    	$this->model->addShippingPrice($ship_city,$price);
        echo '<script language="javascript">';
        echo "alert('Đã thêm phí chuyển.');";
        echo "window.location.href = 'dashboard.php?page=shippingprice&action=show';";
        echo '</script>';
        } 
	
	public function editShippingPrice(){
		$shipping_price_id = $_POST['shipping_price_id'];
		$ship_city = $_POST['ship_city'];
		$price = $_POST['price'];
    	$this->model->editShippingPrice($shipping_price_id,$ship_city,$price);
        echo '<script language="javascript">';
        echo "alert('Đã cập nhật thông tin.');";
        echo "window.location.href = 'dashboard.php?page=shippingprice&action=show';";
        echo '</script>';
        } 
	


}
?>
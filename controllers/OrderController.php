<?php
class OrderController {
	/**
	 * Constructs order controller
	 * @param OrderModel $model
	 * @access public
	 */
	public function __construct($model) {
		$this->model = $model;
	}

	public function addOrder(){
		$customer_id = $_POST['customer_id'];
		$drug_id = $_POST['drug_id'];
		$quantity = $_POST['quantity'];
		$order_date = $_POST['order_date'];
		$ship_address = $_POST['ship_address'];
		$ship_city = $_POST['ship_city'];
		$s = new ShippingPriceModel();
		$shipping_price_id = $s->getIdByCity($ship_city);
		if($shipping_price_id==null){
			$shipping_price_id=4;
		}
    	$this->model->addOrder($customer_id, $drug_id, $shipping_price_id
        , $quantity, $order_date, $ship_address, $ship_city);
        echo '<script language="javascript">';
        echo 'alert("Đã đặt hàng");';
        echo "window.location.href = 'index.php?page=home';";
        echo '</script>';
	}

	/**
	 * edit shipper and shipped_date
	 */
	public function editOrder(){
		$order_id = $_POST['order_id'];
		$shipper_id = $_POST['shipper_id'];
		$shipped_date = $_POST['shipped_date'];
		$this->model->updateShipper($order_id, $shipper_id);		
		$this->model->updateShippedDate($order_id, $shipped_date);		
		echo '<script language="javascript">';
        echo 'alert("Đã cập nhật thông tin đơn hàng.");';
        echo "window.location.href = 'dashboard.php?page=order&action=show';";
        echo '</script>';
	}

}
?>
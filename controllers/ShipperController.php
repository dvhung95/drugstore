<?php
class ShipperController {
	/**
	 * Constructs shipper controller
	 * @param ShipperModel $model
	 * @access public
	 */
	public function __construct($model) {
		$this->model = $model;
	}

	public function addShipper(){
		$name = $_POST['name'];
		$date_of_birth = $_POST['date_of_birth'];
		$phone_number = $_POST['phone_number'];
		$address = $_POST['address'];
    	$this->model->addShipper($name, $date_of_birth, $phone_number, $address);
        echo '<script language="javascript">';
        echo "alert('Đã thêm người giao hàng');";
        echo "window.location.href = 'dashboard.php?page=shipper&action=show';";
        echo '</script>';
	}

	public function editShipper(){
		$shipper_id = $_POST['shipper_id'];
		$name = $_POST['name'];
		$date_of_birth = $_POST['date_of_birth'];
		$phone_number = $_POST['phone_number'];
		$address = $_POST['address'];
    	$this->model->editShipper($shipper_id, $name, $date_of_birth, $phone_number, $address);
        echo '<script language="javascript">';
        echo "alert('Đã cập nhật thông tin');";
        echo "window.location.href = 'dashboard.php?page=shipper&action=show';";
        echo '</script>';
	}
}
?>
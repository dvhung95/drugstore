<?php

class AdministratorController {
	private $model;

	/**
	 * Constructs administrator controller
	 * @param AdministratorModel $model
	 * @access public
	 */
	public function __construct($model) {
		$this->model = $model;
	}

	public function addAdministrator(){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$name = $_POST['name'];
    	$this->model->addAdministrator($username,$password,$name);
        echo '<script language="javascript">';
        echo "alert('Đã thêm tài khoản.');";
        echo "window.location.href = 'dashboard.php?page=admin&action=show';";
        echo '</script>';
	}

	public function editAdministrator(){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$re_password = $_POST['re_password'];
		$name = $_POST['name'];
    	$this->model->editAdministrator($username,$password,$name);
        echo '<script language="javascript">';
        echo "alert('Đã cập nhật thông tin tài khoản.');";
        echo "window.location.href = 'dashboard.php?page=admin&action=show';";
        echo '</script>';
	}


}
?>
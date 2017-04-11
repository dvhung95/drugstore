<?php

class CustomerController {
	private $model;
	
	/**
	 * Constructs Customer controller
	 * @param CustomersModel $model
	 * @access public
	 */
	public function __construct($model){
		$this->model = $model;
	}

    /**
	 * Calls the editUser
	 * @access public
	 */
    public function editCustomer() {
        $customer_id = $_POST['customer_id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $re_password = $_POST['re_password'];
        $name = $_POST['name'];
        $date_of_birth = $_POST['date_of_birth'];
        $address = $_POST['address'];
        $phone_number = $_POST['phone_number'];
        $image = $_FILES['image'];
        //update information in db
        $this->model->editCustomer($customer_id, $password, $name, $date_of_birth, $address, $phone_number);
        if(!empty($image['name'])){
            //delete image in folder
            $this->model->deleteImage($customer_id);
            // add new image
            $this->model->addImage($username, $image);
        }
        echo '<script language="javascript">';
        echo 'alert("Thay đổi thông tin thành công");';
        $_SESSION["user_password"] = $password;
        echo "window.location.href = 'index.php?page=user&action=show';";
        echo '</script>';
    }
}
 ?>
<?php

class RegisterController {
	private $model;
	
	/**
	 * Constructs register model
	 * @param registerModel $model
	 * @access public
	 */
	public function __construct($model){
		$this->model = $model;
	}
	
	/**
	 * Calls the register function to validate registration
	 * @access public
	 */
    public function registerUser() {
        $user_name = $_POST['user_name'];
        $user_password = $_POST['user_password'];
        $repeated_user_password = $_POST['repeated_user_password'];
        $name = $_POST['name'];
        $date_of_birth = $_POST['date_of_birth'];
        $address = $_POST['address'];
        $phone_number = $_POST['phone_number'];
        $image = $_FILES['image'];
        $this->model->registerUser($user_name, $user_password, $repeated_user_password,
		$name, $date_of_birth, $address, $phone_number, $image);
    }
}


 ?>
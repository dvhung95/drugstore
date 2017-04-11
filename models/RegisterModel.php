<?php
include_once 'CustomersModel.php';

class RegisterModel {
	private $cusModel;
	/**
	 * Constrcutor for register model
	 * @access public
	 */
    public function __construct(){
    	$this->cusModel = new CustomersModel();
    }
	
	/**
	 * Validates registration
	 * @param $user_name
	 * @param $user_password
	 * @param $repeated_user_password
     * @param string $name
     * @param string $date_of_birth
     * @param string $address
     * @param int $phone_number
     * @param string $image
	 * @access public
	 */
    public function checkRegistration( $user_name, $user_password, $repeated_user_password,
        $name, $date_of_birth, $address, $phone_number, $image ) {
        global $pdo;
        $valid = true;
        $query = $pdo->prepare("SELECT * FROM customer WHERE username=?");
        $query->bindValue(1,$user_name);
        $query->execute();
        if (!empty($query->fetchAll())){
        	$valid=false;
        	echo "<div id='error'> Tên đăng nhập đã tồn tại </div>";
        }
        if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $user_name)){
            $valid=false;
            echo "<div id='error'> Tên đăng nhập không được chứa ký tự đặc biệt. </div>";
        }
        if( $user_password != $repeated_user_password ) {
            $valid=false;
            echo "<div id='error'> Mật khẩu không khớp </div>";
        } 
        if(!ctype_digit($phone_number) ) {
            $valid=false;
            echo "<div id='error'> Sai số điện thoại </div>";
        } 
        if($image['size'] != 0){
            $type_file = substr(strtolower(strrchr($image['name'], '.')), 1);
            $arr_type = array('jpg', 'jpeg', 'gif','png');
            if (!in_array($type_file, $arr_type)) {
                $valid=false;
                echo "<div id='error'>Lỗi tải hình ảnh. 
                <br/> Chỉ được tải file .jpg .jpeg .gif .png</div>";
            }
        }
        if ($valid == true){
        	$this->cusModel->addCustomer($user_name, $user_password, $name, $date_of_birth, $address, $phone_number);
            $this->cusModel->addImage($user_name, $image);
            echo '<script language="javascript">';
            echo 'alert("Đăng ký thành công");';
            echo "window.location.href = 'index.php?page=login';";
            echo '</script>';
        } 
    }
	/**
	 * Registers the user
	 * @param $user_name
	 * @param $user_password
	 * @param $repeated_user_password
     * @param string $name
     * @param string $date_of_birth
     * @param string $address
     * @param int $phone_number
     * @param string $image
	 */
    public function registerUser( $user_name, $user_password, $repeated_user_password,
		$name, $date_of_birth, $address, $phone_number, $image  ){
        global $pdo;
        $this->checkRegistration( $user_name, $user_password, $repeated_user_password,
		$name, $date_of_birth, $address, $phone_number, $image  );
    }
}

?>
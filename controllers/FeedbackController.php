<?php

class FeedbackController {
	private $model;

	/**
	 * Constructs feedback controller
	 * @param FeedbackModel $model
	 * @access public
	 */
	public function __construct($model) {
		$this->model = $model;
	}

	public function addFeedback(){
		$sender_name = $_POST['sender_name'];
		$email = $_POST['email'];
		$phone_number = $_POST['phone_number'];
		$content = $_POST['content'];
		$valid = true;
        if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $sender_name)){
            $valid=false;
            echo "<div id='error'> Tên không được chứa ký tự đặc biệt. </div>";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  	$valid=false;
            echo "<div id='error'> Sai thông tin email </div>"; 
		}
        if(!ctype_digit($phone_number) ) {
            $valid=false;
            echo "<div id='error'> Sai số điện thoại </div>";
        } 
        if ($valid == true){
        	$this->model->addFeedback($sender_name,$email,$phone_number,$content);
            echo '<script language="javascript">';
            echo 'alert("Đã gửi câu hỏi");';
            echo "window.location.href = 'index.php?page=feedback';";
            echo '</script>';
        } 
	}
}
?>
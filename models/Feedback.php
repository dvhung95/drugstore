<?php
class Feedback {
	
	public $feedback_id;
	public $sender_name;
	public $email;
	public $phone_number;
	public $content;
	public $is_replied;
	/**
	 * Constructs the Feedback class
	 * @param int  $feedback_id
	 * @param string $sender_name
	 * @param string $email
	 * @param string $phone_number
	 * @param string $content
	 * @param boolean $is_replied
	 * @access public
	 */
	public function __construct($feedback_id, $sender_name, $email,$phone_number, $content, $is_replied) {
		$this -> feedback_id = $feedback_id;
		$this -> sender_name = $sender_name;
		$this -> email = $email;
		$this -> phone_number = $phone_number;
		$this -> content = $content;
		$this -> is_replied = $is_replied;
	}
	

}
?>
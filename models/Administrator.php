<?php
class Administrator {
	
	public $admin_id;
	public $username;
	public $password;
	public $name;

	/**
	 * Constructs the Administrator
	 * @param int $admin_id
	 * @param string $username
	 * @param string $password
	 * @param string $name
	 * @access public
	 */
	public function __construct($admin_id,$username,$password,$name) {
		$this -> admin_id = $admin_id;
		$this -> username = $username;
		$this -> password = $password;
		$this -> name = $name;
	}
	

}
?>
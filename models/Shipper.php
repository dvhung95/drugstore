<?php
class Shipper{
	public $shipper_id;
	public $name;
	public $date_of_birth;
	public $phone_number;
	public $address;
	/**
	 * Constructs the Shipper class
	 * @param int $shipper_id
	 * @param string $name
	 * @param string $date_of_birth
	 * @param int $phone_number
	 * @param string $address
	 * @access public
	 */
	public function __construct($shipper_id, $name, $date_of_birth, $phone_number, $address) {
		$this -> shipper_id = $shipper_id;
		$this -> name = $name;
		$this -> date_of_birth = $date_of_birth;
		$this -> phone_number = $phone_number;
		$this -> address = $address;
	}
}
?>
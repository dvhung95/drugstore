<?php
class Customer {
	
	public $customer_id;
	public $username;
	public $password;
	public $name;
	public $date_of_birth;
	public $address;
	public $phone_number;
	public $image;
	/**
	 * Constructs the Customer class
	 * @param int $customer_id
	 * @param string $username
	 * @param string $password
	 * @param string $name
	 * @param string $date_of_birth
	 * @param string $address
	 * @param int $phone_number
	 * @param string $image
	 * @return boolean true
	 * @access public
	 */
	public function __construct($customer_id, $username, $password, $name,
	 $date_of_birth, $address, $phone_number, $image) {
		$this -> customer_id = $customer_id;
		$this -> username = $username;
		$this -> password = $password;
		$this -> name = $name;
		$this -> date_of_birth = $date_of_birth;
		$this -> address = $address;
		$this -> phone_number = $phone_number;
		$this -> image = $image;
	}
	/** Getter Methods */
	/**
	 * Getter Method: get the id of the Customer
	 * @return the id of the Customer
	 */
	public function getCustomerId() {
		return $this -> customer_id;
	}
	/**
	 * Getter Method: get the username of the Customer
	 * @return the username of the Customer
	 */
	public function getUsername() {
		return $this -> username;
	}
	/**
	 * Getter Method: get the password of the Customer
	 * @return the password of the Customer
	 */
	public function getPassword() {
		return $this -> password;
	}
	/**
	 * Getter Method: get the date of birth of the Customer
	 * @return the date of birth of the Customer
	 */
	public function getDateOfBirth() {
		return $this -> date_of_birth;
	}
	/**
	 * Getter Method: get the address of the Customer
	 * @return the address of the Customer
	 */
	public function getAddress() {
		return $this -> address;
	}
	/**
	 * Getter Method: get the phone number of the Customer
	 * @return the phone number of the Customer
	 */
	public function getPhoneNumber() {
		return $this -> phone_number;
	}
	
	/**
	 * Getter Method: get the image of the Customer
	 * @return the image of the Customer
	 */
	public function getImage() {
		return $this -> image;
	}

	/**
	 * Getter Method: get the id of the logged in Customer
	 * @return the id of the logged in Customer
	 */
	public function getLoggedCustomerId() {
		return $this -> customer_id;
	}
}
?>
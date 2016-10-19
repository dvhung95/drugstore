<?php
include_once 'Customer.php';
class CustomersModel {
  
	/**
	 * Constructor for customers model
	 * @access public
	 */
    public function __construct(){
    }


    
    /**
     * Add customer into customer table
     * @param int $customer_id
     * @param string $username
     * @param string $password
     * @param string $name
     * @param string $date_of_birth
     * @param string $address
     * @param int $phone_number
     * @access public
     */
    public function addCustomer( $username, $password, $name, 
        $date_of_birth, $address, $phone_number) {
        global $pdo;
        $sql = "INSERT INTO customer (username, password, name, 
            date_of_birth, address, phone_number) values (?,?,?,?,?,?)";
        $query = $pdo->prepare($sql);
        try {
            $query->execute(array( $username, $password, $name, 
            $date_of_birth, $address, $phone_number));
        } catch (Exception $e){
            echo "<div> Không thể đăng ký tài khoản </div>";
        }
    }

	/**
	 * Gets all customers from the customer table
	 * @return array $customers
	 * @access public
	 */
    public function getAllCustomers(){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM customer");
        $query->execute();
        $rows = $query->fetchAll();
        foreach($rows as $row){
            $customers = new Customer(
                 $row['customer_id']
                ,$row['username']
                ,$row['password']
                ,$row['name']
                ,$row['date_of_birth']
                ,$row['address']
                ,$row['phone_number']
                ,$row['image']
            );
            $customers[] = $customer;
        }
        return $customers;
    }
	
	/**
	 * Deletes a customer based on customer id 
	 * @param int $customer_id
	 * @access public
	 */
    public function deleteCustomer( $customer_id ) {
        global $pdo;
		
        $query = $pdo->prepare("DELETE FROM customer WHERE customer_id = ?");
        $query->bindValue(1, $customer_id);
        $query->execute();
    }
	
	/**
	 * Edits customer based on customer id 
	 * @param int $customer_id
     * @param string $username
     * @param string $password
     * @param string $name
     * @param string $date_of_birth
     * @param string $address
     * @param int $phone_number
     * @param string $image
	 * @access public
	 */
    public function editCustomer( $customer_id, $username, $password, $name, 
        $date_of_birth, $address, $phone_number, $image ) {
        global $pdo;
        $sql = "UPDATE customer SET username=?, password=?, name=?, $date_of_birth=?,
        address=?, phone_number=?, image=? WHERE user_id=?";
        $query = $pdo->prepare($sql);
        $query->execute(array($customer_id, $username, $password, $name, 
        $date_of_birth, $address, $phone_number, $image ));
    }
	
    /**
     * Gets the id of a customer whose session parameters username and password match
     * @param string $username
     * @param string $password
     * @return int $customer_id
     * @access public
     */
    public function getLoggedCustomerId( $username, $password ){
        global $pdo;
        $query = $pdo->prepare("SELECT customer_id FROM customer WHERE username =? AND password = ?");
        $query->bindValue(1, $username);
        $query->bindValue(2, $password);
        $query->execute();
        $user_id = $query->fetchColumn();
        return $customer_id;
    }
    /**
     * Search customer whose session parameters name or username match
     * @param string $username
     * @param string $name
     * @return array $customers
     * @access public
     */
    public function searchCustomerByName( $username, $name ){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM customer WHERE username=%?% or name=%?%");
        $query->bindValue(1, $username);
        $query->bindValue(2, $name);
        $query->execute();
        $rows = $query->fetchAll();
        foreach($rows as $row){
            $customers = new Customer(
                 $row['customer_id']
                ,$row['username']
                ,$row['password']
                ,$row['name']
                ,$row['date_of_birth']
                ,$row['address']
                ,$row['phone_number']
                ,$row['image']
            );
            $customers[] = $customer;
        }
        return $customers;
    }

    /**
     * add file according to username
     * @param string $user_name
     * @param string $file
     * @access public
     */
     public function addImage($user_name, $file ){ 
        // remove space
        $file['name'] = str_replace(" ", "",$file['name']);
            //upload directory
            $upload_dir = "images/users/".$file['name'];
            //upload file to new location
            move_uploaded_file($file['tmp_name'], $upload_dir);
            //prepare link to save to database entry
            $link = "http://localhost:81/drugstore/images/users/".$file['name'];
            //update database
            global $pdo;
            $sql = "UPDATE customer SET image=? WHERE username=?";
            $query = $pdo->prepare($sql);
            $query->bindValue(1,$link);
            $query->bindValue(2,$user_name);
            $query->execute();       
    }

}
 ?>

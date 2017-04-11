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
            if($file['name']!=""){
                $link = "http://localhost:81/drug-store/images/users/".$file['name'];
            } else {
                $link = "http://localhost:81/drug-store/images/users/user.png";
            }
            //update database
            global $pdo;
            $sql = "UPDATE customer SET image=? WHERE username=?";
            $query = $pdo->prepare($sql);
            $query->bindValue(1,$link);
            $query->bindValue(2,$user_name);
            $query->execute();       
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
        $customers = array();
        foreach($rows as $row){
            $customer = new Customer(
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
     * Deletes image based on customer id 
     * @param int $customer_id
     * @access public
     */
    public function deleteImage($id){
        global $pdo;
        $query = $pdo->prepare("SELECT image FROM customer where customer_id=?");
        $query->bindValue(1, $id);
        $query->execute();
        $rows = $query->fetchAll();
        if (!empty($rows)){
            foreach($rows as $row){
                $root = $_SERVER['DOCUMENT_ROOT'];
                $file = explode("/",$row['image']);
                $dir = $root."/drug-store/images/users/";
                if(file_exists($dir."".$file[6])){
                    unlink($dir."".$file[6]);
                }
                break;
            }
        }
    }
	
	/**
	 * Edits customer based on customer id 
	 * @param int $customer_id
     * @param string $password
     * @param string $name
     * @param string $date_of_birth
     * @param string $address
     * @param int $phone_number
	 * @access public
	 */
    public function editCustomer( $customer_id, $password, $name, 
        $date_of_birth, $address, $phone_number) {
        global $pdo;
        $sql = "UPDATE customer SET password=?, name=?, date_of_birth=?,
        address=?, phone_number=? WHERE customer_id=?";
        $query = $pdo->prepare($sql);
        $query->bindValue(1,$password);
        $query->bindValue(2,$name);
        $query->bindValue(3,$date_of_birth);
        $query->bindValue(4,$address);
        $query->bindValue(5,$phone_number);
        $query->bindValue(6,$customer_id);
        $query->execute();
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
        $query = $pdo->prepare("SELECT * FROM customer WHERE username=? AND password=?");
        $query->bindValue(1, $username);
        $query->bindValue(2, $password);
        $query->execute();
        $rows = $query->fetchAll();
        foreach($rows as $row){
            return $row['customer_id'];
        }
        return null;;
    }
    /**
     * Search customer whose session parameters name or username match
     * @param string $username
     * @param string $name
     * @return array $customers
     * @access public
     */
    public function getCustomerByUsername($username){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM customer WHERE username=?");
        $query->bindValue(1, $username);
        $query->execute();
        $rows = $query->fetchAll();
        foreach($rows as $row){
            $customer = new Customer(
                 $row['customer_id']
                ,$row['username']
                ,$row['password']
                ,$row['name']
                ,$row['date_of_birth']
                ,$row['address']
                ,$row['phone_number']
                ,$row['image']
            );
            return $customer;
        }
    }

    /**
     * Search customer whose session parameters id match
     * @param int $id
     * @return Customer $customer
     * @access public
     */
    public function getCustomerById($id){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM customer WHERE customer_id=?");
        $query->bindValue(1, $id);
        $query->execute();
        $rows = $query->fetchAll();
        foreach($rows as $row){
            $customer = new Customer(
                 $row['customer_id']
                ,$row['username']
                ,$row['password']
                ,$row['name']
                ,$row['date_of_birth']
                ,$row['address']
                ,$row['phone_number']
                ,$row['image']
            );
            return $customer;
        }
        return null;
    }

}
 ?>

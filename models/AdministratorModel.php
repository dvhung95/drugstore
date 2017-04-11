<?php
include 'Administrator.php';
class AdministratorModel {
  
	/**
	 * Constructor for Administrator model
	 * @access public
	 */
    public function __construct(){
    }


    
    /**
     * Add admistrator
     * @param int $admin_id
     * @param string $username
     * @param string $password
     * @param string $name
     * @access public
     */
    public function addAdministrator($username,$password,$name) {
        global $pdo;
        $sql = "INSERT INTO administrator (username, password, name) 
            values (?,?,?)";  
        $query = $pdo->prepare($sql);
        $query->bindValue(1, $username);
        $query->bindValue(2, $password);
        $query->bindValue(3, $name);
        $query->execute();
    }
    
    /**
     * Edit admistrator
     * @param int $admin_id
     * @param string $username
     * @param string $password
     * @param string $name
     * @access public
     */
    public function editAdministrator($username,$password,$name) {
        global $pdo;
        $sql = "UPDATE administrator SET password=?, name=? WHERE username=?";
        $query = $pdo->prepare($sql);
        $query->bindValue(1,$password);
        $query->bindValue(2,$name);
        $query->bindValue(3,$username);
        $query->execute();
    }

    /**
     * Gets all administrator from the administrator table
     * @return array $admins
     * @access public
     */
    public function getAllAdministrator(){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM administrator");
        $query->execute();
        $rows = $query->fetchAll();
        $admins = array();
        if (!empty($rows)){
            foreach($rows as $row){
                $admin = new Administrator(
                     $row['admin_id']
                    ,$row['username']
                    ,$row['password']
                    ,$row['name']
                );
             $admins[] = $admin;
            }
        }
        return $admins;
    }

	/**
	 * Gets administrator from the administrator table
	 * @return Administrator $admin
	 * @access public
	 */
    public function getAdminById($id){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM administrator where admin_id=?");
        $query->bindValue(1,$id);
        $query->execute();
        $rows = $query->fetchAll();
        if (!empty($rows)){
            foreach($rows as $row){
                $admin = new Administrator(
                     $row['admin_id']
                    ,$row['username']
                    ,$row['password']
                    ,$row['name']
                );
             return $admin;
            }
        }
        return null;
    }


	/**
	 * Deletes a admn based on admin id 
	 * @param int $admin_id
	 * @access public
	 */
    public function deleteAdmin( $id ) {
        global $pdo;
        $query = $pdo->prepare("DELETE FROM administrator WHERE admin_id=?");
        $query->bindValue(1, $id);
        try {
            $query->execute();
        } catch (Exception $e){
            echo "Không thể xóa tài khoản.";
        }
    }

}
 ?>

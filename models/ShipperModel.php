<?php
include 'Shipper.php';
class ShipperModel {
	public function __construct(){
    }

    public function addShipper($name, $date_of_birth, $phone_number, $address){
    	global $pdo;
    	$sql = "insert into shipper (name, date_of_birth, phone_number, address) values (?,?,?,?)";
    	$query = $pdo->prepare($sql);
    	$query->bindValue(1,$name);
    	$query->bindValue(2,$date_of_birth);
    	$query->bindValue(3,$phone_number);
    	$query->bindValue(4,$address);
    	$query->execute();
    }

   	public function editShipper($shipper_id, $name, $date_of_birth, $phone_number, $address){
   		global $pdo;
   		$sql = "Update shipper set name=?, date_of_birth=?, phone_number=?, address=? where shipper_id=?";
   		$query = $pdo->prepare($sql);
   		$query->bindValue(1,$name);
    	$query->bindValue(2,$date_of_birth);
    	$query->bindValue(3,$phone_number);
    	$query->bindValue(4,$address);
    	$query->bindValue(5,$shipper_id);
    	$query->execute();
   	}

   	public function getAllShippers(){
   		global $pdo;
   		$query = $pdo->prepare("SELECT * FROM shipper");
        $query->execute();
        $rows = $query->fetchAll();
        foreach($rows as $row){
            $shipper = new Shipper(
                 $row['shipper_id']
                ,$row['name']
                ,$row['date_of_birth']
                ,$row['phone_number']
                ,$row['address']
            );
            $shippers[] = $shipper;
        }
        return $shippers;
   	}

    /**
     * Gets details of shipper by id
     * @return Shipper $shipper
     * @access public
     */
    public function getShipper($shipper_id){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM shipper WHERE shipper_id = ?");
        $query->bindValue(1, $shipper_id);
        $query->execute();
        $rows = $query->fetchAll();
        foreach($rows as $row){
            $shipper = new Shipper(
                 $row['shipper_id']
                ,$row['name']
                ,$row['date_of_birth']
                ,$row['phone_number']
                ,$row['address']
            );
            return $shipper;
        }
    }

    public function deleteShipper($shipper_id){
    	global $pdo;
    	$sql = "delete from shipper where shipper_id=?";
    	$query = $pdo->prepare($sql);
    	$query->bindValue(1,$shipper_id);
    	$query->execute();
    }
    
}
?>
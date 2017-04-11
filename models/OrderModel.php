<?php
include 'Order.php';
class OrderModel {
	public function __construct(){
    }

    public function addOrder($customer_id, $drug_id, $shipping_price_id
        , $quantity, $order_date, $ship_address, $ship_city){
    	global $pdo;
    	$sql = "insert into orders (customer_id, drug_id, shipping_price_id
        , quantity, order_date, ship_address, ship_city) values (?,?,?,?,?,?,?)";
    	$query = $pdo->prepare($sql);
        $query->bindValue(1,$customer_id);
        $query->bindValue(2,$drug_id);
        $query->bindValue(3,$shipping_price_id);
    	$query->bindValue(4,$quantity);
    	$query->bindValue(5,$order_date);
    	$query->bindValue(6,$ship_address);
    	$query->bindValue(7,$ship_city);
    	$query->execute();
    }

    public function updateShipper($order_id, $shipper_id){
        global $pdo;
        $sql = "Update orders set shipper_id=? where order_id=?";
        $query = $pdo->prepare($sql);
        $query->bindValue(1,$shipper_id);
        $query->bindValue(2,$order_id);
        $query->execute();
    }

    public function updateShippedDate($order_id, $shipped_date){
        global $pdo;
        $sql = "Update orders set shipped_date=? where order_id=?";
        $query = $pdo->prepare($sql);
        $query->bindValue(1,$shipped_date);
        $query->bindValue(2,$order_id);
        $query->execute();
    }

    public function getAllOrders(){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM orders");
        $query->execute();
        $rows = $query->fetchAll();
        foreach($rows as $row){
            $order = new Order(
                 $row['order_id']
                ,$row['customer_id']
                ,$row['drug_id']
                ,$row['shipper_id']
                ,$row['shipping_price_id']
                ,$row['quantity']
                ,$row['order_date']
                ,$row['shipped_date']
                ,$row['ship_address']
                ,$row['ship_city']
            );
            $orders[] = $order;

        }
        return $orders;
    }

   	public function getOrdersByCustomer($customer_id){
   		global $pdo;
   		$query = $pdo->prepare("SELECT * FROM orders where customer_id=?");
        $query->bindValue(1,$customer_id);
        $query->execute();
        $rows = $query->fetchAll();
        foreach($rows as $row){
            $order = new Order(
                 $row['order_id']
                ,$row['customer_id']
                ,$row['drug_id']
                ,$row['shipper_id']
                ,$row['shipping_price_id']
                ,$row['quantity']
                ,$row['order_date']
                ,$row['shipped_date']
                ,$row['ship_address']
                ,$row['ship_city']
            );
            $orders[] = $order;
        }
        return $orders;
   	}

    /**
     * Gets details of order by id
     * @return Order $order
     * @access public
     */
    public function getOrder($order_id){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM orders WHERE order_id = ?");
        $query->bindValue(1, $order_id);
        $query->execute();
        $rows = $query->fetchAll();
        foreach($rows as $row){
            $order = new Order(
                 $row['order_id']
                ,$row['customer_id']
                ,$row['drug_id']
                ,$row['shipper_id']
                ,$row['shipping_price_id']
                ,$row['quantity']
                ,$row['order_date']
                ,$row['shipped_date']
                ,$row['ship_address']
                ,$row['ship_city']
            );
            return $order;
        }
    }

    public function deleteOrder($order_id){
    	global $pdo;
    	$sql = "delete from orders where order_id=?";
    	$query = $pdo->prepare($sql);
    	$query->bindValue(1,$order_id);
    	$query->execute();
    }
    
}
?>
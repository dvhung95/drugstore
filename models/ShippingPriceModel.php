<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'ShippingPrice.php';
class ShippingPriceModel{
    public function __construct(){
        
}

    public function addShippingPrice($ship_city,$price){
        global $pdo;
        $sql = "INSERT INTO shipping_price (ship_city,price) values (?,?)";
        $query = $pdo ->prepare($sql);
        $query->BindValue(1,$ship_city);
        $query->BindValue(2,$price);
        $query->execute();
}
    
    public function editShippingPrice($shipping_price_id,$ship_city,$price){
        global $pdo;
        $sql = "UPDATE shipping_price SET ship_city =?,price =? where shipping_price_id=?";
        $query = $pdo ->prepare($sql);
        $query->BindValue(1,$ship_city);
        $query->BindValue(2,$price);
        $query->BindValue(3,$shipping_price_id);
        $query->execute();      
    }
    public function getAllShippingPrice(){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM shipping_price");
        $query->execute();
        $rows = $query->fetchAll();
        $shippingprices = array();
        if (!empty($rows)){
            foreach($rows as $row){
                $shippingprice = new ShippingPrice(
                     $row['shipping_price_id']
                    ,$row['ship_city']
                    ,$row['price']
                );
             $shippingprices[] = $shippingprice;
            }
        }
        return $shippingprices;
    }

	
    public function getShippingPriceById($id){
        global $pdo;
        $query = $pdo->prepare("SELECT * FROM shipping_price where shipping_price_id=?");
        $query->bindValue(1,$id);
        $query->execute();
        $rows = $query->fetchAll();
        if (!empty($rows)){
            foreach($rows as $row){
                $shippingprice = new ShippingPrice(
                     $row['shipping_price_id']
                    ,$row['ship_city']
                    ,$row['price']
                );
             return $shippingprice;
            }
        } 
        return null;
    }

    public function getPriceByCity($ship_city){
        global $pdo;
        $query = $pdo->prepare("SELECT price FROM shipping_price where ship_city=?");
        $query->bindValue(1,$ship_city);
        $query->execute();
        $rows = $query->fetchAll();
        if (!empty($rows)){
            foreach($rows as $row){
                return $row['price'];
            }
        }
        return null;
    }

    public function getIdByCity($ship_city){
        global $pdo;
        $query = $pdo->prepare("SELECT shipping_price_id FROM shipping_price where ship_city=?");
        $query->bindValue(1,$ship_city);
        $query->execute();
        $rows = $query->fetchAll();
        if (!empty($rows)){
            foreach($rows as $row){
                return $row['shipping_price_id'];
            }
        }
        return null;
    }


	
    public function deleteShippingPrice( $id ) {
        global $pdo;
        $query = $pdo->prepare("DELETE FROM shipping_price WHERE shipping_price_id=?");
        $query->bindValue(1, $id);
        $query->execute();
    }




}

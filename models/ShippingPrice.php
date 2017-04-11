<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ShippingPrice {
    public $shipping_price_id;
    public $ship_city;
    public $price;
    
    public function __construct($shipping_price_id,$ship_city,$price) {
       $this->shipping_price_id = $shipping_price_id ;
       $this->ship_city = $ship_city;
       $this->price = $price;
    }
}

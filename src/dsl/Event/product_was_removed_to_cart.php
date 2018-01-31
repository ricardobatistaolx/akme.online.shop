<?php
                namespace ShoppingKart\dsl\Event;

                class product_was_removed_to_cart implements \JsonSerializable {

                public function __construct($customer_id,$cart_id,$price,$sku,$remove_time)
                {
                    $this->customer_id =  $customer_id; 
$this->cart_id =  $cart_id; 
$this->price =  $price; 
$this->sku =  $sku; 
$this->remove_time =  $remove_time; 

                }

                public function jsonSerialize() {
                    return [
                        'customer_id' =>  $this->customer_id,'cart_id' =>  $this->cart_id,'price' =>  $this->price,'sku' =>  $this->sku,'remove_time' =>  $this->remove_time
                    ];
                }
            
            private $customer_id;

            public function getcustomer_id()
            {
                return $this->customer_id;
            }
        
            private $cart_id;

            public function getcart_id()
            {
                return $this->cart_id;
            }
        
            private $price;

            public function getprice()
            {
                return $this->price;
            }
        
            private $sku;

            public function getsku()
            {
                return $this->sku;
            }
        
            private $remove_time;

            public function getremove_time()
            {
                return $this->remove_time;
            }
        }
<?php
                namespace ShoppingKart\dsl\Event;

                class customer_place_order implements \JsonSerializable {

                public function __construct($customer_id,$cart_id,$products,$ordered_at)
                {
                    $this->customer_id =  $customer_id; 
$this->cart_id =  $cart_id; 
$this->products =  $products; 
$this->ordered_at =  $ordered_at; 

                }

                public function jsonSerialize() {
                    return [
                        'customer_id' =>  $this->customer_id,'cart_id' =>  $this->cart_id,'products' =>  $this->products,'ordered_at' =>  $this->ordered_at
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
        
            private $products;

            public function getproducts()
            {
                return $this->products;
            }
        
            private $ordered_at;

            public function getordered_at()
            {
                return $this->ordered_at;
            }
        }
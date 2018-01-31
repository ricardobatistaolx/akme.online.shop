<?php
                namespace ShoppingKart\dsl\Command;

                class start_shopping implements \JsonSerializable {

                public function __construct($customer_id,$cart_id,$start_time)
                {
                    $this->customer_id =  $customer_id; 
$this->cart_id =  $cart_id; 
$this->start_time =  $start_time; 

                }

                public function jsonSerialize() {
                    return [
                        'customer_id' =>  $this->customer_id,'cart_id' =>  $this->cart_id,'start_time' =>  $this->start_time
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
        
            private $start_time;

            public function getstart_time()
            {
                return $this->start_time;
            }
        }
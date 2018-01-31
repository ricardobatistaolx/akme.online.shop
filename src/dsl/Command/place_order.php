<?php
                namespace ShoppingKart\dsl\Command;

                class place_order implements \JsonSerializable {

                public function __construct($customer_id,$cart_id,$order_time)
                {
                    $this->customer_id =  $customer_id; 
$this->cart_id =  $cart_id; 
$this->order_time =  $order_time; 

                }

                public function jsonSerialize() {
                    return [
                        'customer_id' =>  $this->customer_id,'cart_id' =>  $this->cart_id,'order_time' =>  $this->order_time
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
        
            private $order_time;

            public function getorder_time()
            {
                return $this->order_time;
            }
        }
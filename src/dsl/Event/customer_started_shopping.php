<?php
                namespace ShoppingKart\dsl\Event;
                
                class customer_started_shopping {

                public function __construct($customer_id,$cart_id)
                {
                    $this->customer_id =  $customer_id; 
$this->cart_id =  $cart_id; 

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
        }
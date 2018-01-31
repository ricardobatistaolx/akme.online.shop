<?php
                namespace ShoppingKart\dsl\Event;

                use ShoppingKart\dsl\EventInterface;

                class customer_started_shopping implements \JsonSerializable, EventInterface {

                public function __construct($customer_id,$cart_id)
                {
                    $this->customer_id =  $customer_id; 
$this->cart_id =  $cart_id; 

                }

                public function jsonSerialize() {
                    return [
                        'name' => 'customer_started_shopping',
                        'customer_id' =>  $this->customer_id,'cart_id' =>  $this->cart_id
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
        }
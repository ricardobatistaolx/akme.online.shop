<?php
                namespace ShoppingKart\dsl\Event;

                use ShoppingKart\dsl\EventInterface;

                class product_was_added_to_cart implements \JsonSerializable, EventInterface {

                public function __construct($customer_id,$cart_id,$price,$sku,$add_time)
                {
                    $this->customer_id =  $customer_id; 
$this->cart_id =  $cart_id; 
$this->price =  $price; 
$this->sku =  $sku; 
$this->add_time =  $add_time; 

                }

                public function jsonSerialize() {
                    return [
                        'name' => 'product_was_added_to_cart',
                        'customer_id' =>  $this->customer_id,'cart_id' =>  $this->cart_id,'price' =>  $this->price,'sku' =>  $this->sku,'add_time' =>  $this->add_time
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
        
            private $add_time;

            public function getadd_time()
            {
                return $this->add_time;
            }
        }
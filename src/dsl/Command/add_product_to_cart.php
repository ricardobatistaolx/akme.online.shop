<?php

namespace ShoppingKart\dsl\Command;

class add_product_to_cart
{

    private $customer_id;
    private $cart_id;
    private $sku;
    private $remove_time;

    public function __construct($customer_id, $cart_id, $sku, $remove_time)
    {
        $this->customer_id = $customer_id;
        $this->cart_id = $cart_id;
        $this->sku = $sku;
        $this->remove_time = $remove_time;

    }

    public function getcustomer_id()
    {
        return $this->customer_id;
    }

    public function getcart_id()
    {
        return $this->cart_id;
    }

    public function getsku()
    {
        return $this->sku;
    }

    public function getremove_time()
    {
        return $this->remove_time;
    }
}
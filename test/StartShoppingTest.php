<?php
/**
 * Created by PhpStorm.
 * User: ricardo.batista
 * Date: 30/01/2018
 * Time: 14:36
 */

namespace ShoppingKart;


use ShoppingKart\dsl\Command\start_shopping;
use ShoppingKart\dsl\Event\customer_started_shopping;


class StartShoppingTest extends EventSourcedCommandTestCase
{

    public function startShoppingTest()
    {
        $this->scenario()
            ->when(new start_shopping(1, 1, 1))
            ->then(new customer_started_shopping(1, 1));
    }
}
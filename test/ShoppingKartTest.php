<?php

namespace ShoppingKart;

use ShoppingKart\dsl\Model;
use PHPUnit\Framework\TestCase;

class ShoppingKartTest extends TestCase
{
    private $shoppingKart;

    public function setUp()
    {
        $this->shoppingKart = new ShoppingKart();
    }


    public function testHelloWorld()
    {
        $this->assertEquals("helloworld", $this->shoppingKart->helloworld());
    }

    public function testReadfromFile()
    {
        $this->assertTrue(true);
        $model =
            new Model(
                $this->shoppingKart->readFromFile()
            );

        foreach ($model->getCommands()->getItems() as $command ) {
            $command->writeToFile();
        }

        foreach ($model->getEvents()->getItems() as $event ) {
            $event->writeToFile();
        }
    }
}

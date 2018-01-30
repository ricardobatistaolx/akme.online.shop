<?php
/**
 * Created by PhpStorm.
 * User: ricardo.batista
 * Date: 30/01/2018
 * Time: 14:31
 */

namespace ShoppingKart;

use PHPUnit\Framework\TestCase;

class AddProductToCartTest extends TestCase
{

    protected $inputEvent;
    protected $outputEvent;
    protected $command;

    public function given($inputEvent)
    {
        $this->inputEvent[] = $inputEvent;
        return $this;
    }

    public function when($command)
    {
        $this->command[] = $command;
        return $this;
    }

    public function then($outputEvent)
    {
        $this->outputEvent[] = $outputEvent;
        return $this;
    }


    public function assert()
    {
    }
}
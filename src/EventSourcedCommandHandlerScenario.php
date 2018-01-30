<?php
/**
 * Created by PhpStorm.
 * User: ricardo.batista
 * Date: 30/01/2018
 * Time: 15:04
 */

namespace ShoppingKart;


class EventSourcedCommandHandlerScenario // implements TestScenario
{
    protected $inputEvent;
    protected $outputEvent;
    protected $command;

    public function given($inputEvent)
    {
        return $this;
    }

    public function when($command)
    {
        return $this;
    }

    public function then($outputEvent)
    {
        return $this;
    }


    public function assert()
    {
    }

}
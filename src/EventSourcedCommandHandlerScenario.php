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
    protected $calls;

    public function given($inputEvent)
    {
        $this->calls[] = $inputEvent;
        return $this;
    }

    public function when($command)
    {
        $this->calls[] = $command;
        return $this;
    }

    public function then($outputEvent)
    {
        $this->calls[] = $outputEvent;
        return $this;
    }

    public function thenNothing()
    {
        return $this;
    }

    public function calls()
    {
        return $this->calls;
    }

    public function assert()
    {
    }
}

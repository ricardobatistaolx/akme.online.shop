<?php

namespace ShoppingKart;

use ShoppingKart\store\EventStore;

class EventSourcedCommandHandlerScenario // implements TestScenario
{
    protected $calls;

    public function __construct()
    {
        $this->calls = EventStore::fromFile();
    }

    public function given($inputEvent)
    {
        $this->calls->addEvent($inputEvent);
        return $this;
    }

    public function when($command)
    {
        $this->calls->addEvent($command);
        return $this;
    }

    public function then($outputEvent)
    {
        $this->calls->addEvent($outputEvent);
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
        $this->calls->flush();
    }
}

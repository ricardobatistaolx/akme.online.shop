<?php
/**
 * Created by PhpStorm.
 * User: ricardo.batista
 * Date: 30/01/2018
 * Time: 14:58
 */

namespace ShoppingKart;


use PHPUnit\Framework\TestCase;

abstract class EventSourcedCommandTestCase extends TestCase
{

    protected $scenario;

    public function setUp()
    {
        parent::setUp();

        $this->scenario = new EventSourcedCommandHandlerScenario();
    }

    protected function assertPostConditions()
    {
        parent::assertPostConditions();
    }

    public function scenario(): EventSourcedCommandHandlerScenario
    {
        return $this->scenario;
    }
}

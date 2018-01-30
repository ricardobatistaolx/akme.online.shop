<?php
/**
 * Created by PhpStorm.
 * User: ricardo.batista
 * Date: 30/01/2018
 * Time: 12:24
 */

namespace ShoppingKart\dsl;


class Model
{
    private $model;
    private $commands;
    private $events;

    public function __construct(string $model)
    {
        $this->model = json_decode($model, true);
        $this->commands =
            new CommandsCollection(
                $this->model['acme.online.shop']['commands']
            );
        $this->events =
            new EventsCollection(
                $this->model['acme.online.shop']['events']
            );
    }

    public function getModel(): array
    {
        return $this->model;
    }


    public function getCommands()
    {
        return $this->commands;
    }

    public function getEvents()
    {
        return $this->events;
    }
}
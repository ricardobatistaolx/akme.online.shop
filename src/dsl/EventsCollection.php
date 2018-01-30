<?php
/**
 * Created by PhpStorm.
 * User: ricardo.batista
 * Date: 30/01/2018
 * Time: 12:32
 */

namespace ShoppingKart\dsl;


class EventsCollection
{
    private $items = [];

    public function __construct(array $items)
    {
        foreach ($items as $item) {
            $this->items[] = new Event(
                $item['type'],
                $item['properties']
            );
        }
    }

    public function getItems(): array
    {
        return $this->items;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: ricardo.batista
 * Date: 30/01/2018
 * Time: 12:50
 */

namespace ShoppingKart\dsl;


class PropertiesCollection
{
    private $items = [];

    public function __construct(array $items)
    {
        foreach ($items as $item) {
            $this->items[] = new Property(
                $item['type'],
                $item['name'],
                $item['value']
            );
        }
    }

    public function getItems(): array
    {
        return $this->items;
    }
}
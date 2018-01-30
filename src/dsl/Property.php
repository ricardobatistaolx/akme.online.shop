<?php
/**
 * Created by PhpStorm.
 * User: ricardo.batista
 * Date: 30/01/2018
 * Time: 12:52
 */

namespace ShoppingKart\dsl;


class Property
{
    private $type;
    private $name;
    private $value;

    public function __construct(
        string $type,
        string $name,
        $value
    ) {
        $this->type = $type;
        $this->name = $name;

        if (is_array($value)) {
            $this->values = new PropertiesCollection($value);
            return;
        }

        $this->value = $value;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getType()
    {
        return $this->type;
    }

    public function __toString()
    {
        return "
            private \$$this->name;

            public function get$this->name()
            {
                return \$this->$this->name;
            }
        ";
    }
}

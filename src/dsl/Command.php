<?php
/**
 * Created by PhpStorm.
 * User: ricardo.batista
 * Date: 30/01/2018
 * Time: 12:36
 */

namespace ShoppingKart\dsl;


class Command
{
    private $name;
    private $properties;

    public function __construct(string $name, array $properties)
    {
        $this->name = $name;
        $this->properties = new PropertiesCollection($properties);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getProperties()
    {
        return $this->properties;
    }

    public function writeToFile()
    {
        $handle = fopen(dirname(__DIR__) . "/dsl/Command/$this->name.php", 'w+');
        fwrite($handle, $this);
        fclose($handle);
    }



    public function __toString()
    {
        $methods = "";
        $variables = [];
        $serialized = [];
        $sets = "";

        foreach ($this->properties->getItems() as $property) {
            $methods .= $property;
            $variables[] = '$' . $property->getName();
            $serialized[] = "'{$property->getName()}' =>  \$this->{$property->getName()}";
            $sets .= "\$this->{$property->getName()} =  \${$property->getName()}; \n";
        }

        $variablesString = implode($variables, ',');
        $serializedString = implode($serialized, ',');
        $class = "<?php
                namespace ShoppingKart\dsl\Command;

                use ShoppingKart\dsl\CommandInterface;

                class $this->name implements \JsonSerializable, CommandInterface {

                public function __construct($variablesString)
                {
                    $sets
                }

                public function jsonSerialize() {
                    return [
                        'name' => '$this->name',
                        $serializedString
                    ];
                }
            ";

        $class .= $methods;
        $class .= "}";

        return $class;
    }
}

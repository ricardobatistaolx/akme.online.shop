<?php

namespace ShoppingKart;

class ShoppingKart
{

    public function helloworld(): string
    {
        return "helloworld";
    }

    public function readFromFile(): string
    {
        $filename = dirname(__DIR__) . '/dsl/schema.json';
        $handle = fopen($filename, 'r');
        $contents = fread($handle, filesize($filename));
        fclose($handle);
        return $contents;
    }

}

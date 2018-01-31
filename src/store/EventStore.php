<?php

namespace ShoppingKart\store;

class EventStore
{
    private $metaevents = [];

    public function __construct($metaevents)
    {
        $this->metaevents = $metaevents;
    }

    public function getEvents()
    {
        return $this->metaevents;
    }

    public function addEvent($event)
    {
        $name = explode(get_class($event), '\\');
        $this->metaevents[] = [
            'name' => end($name),
            'payload' => $event,
            'metadata' => 'something something'
        ];
    }

    public static function fromFile()
    {
        $filename = dirname(dirname(__dir__)) . '/resources/events.json';
        $handle = fopen($filename, 'r');
        $contents = fread($handle, filesize($filename));
        fclose($handle);
        return new EventStore(json_decode($contents, true));
    }

    public function flush()
    {
        $filename = dirname(dirname(__dir__)) . '/resources/events.json';
        $handle = fopen($filename, 'w+');
        fwrite($handle, json_encode($this->metaevents));
        fclose($handle);
    }
}

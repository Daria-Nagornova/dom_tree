<?php

namespace DomTree\App\CSS\Styles;

abstract class Property
{

    protected $property;
    protected $value;

    public function __construct($property, $value)
    {
        $this->property = $property;
        $this->value = $value;
    }


    public function property()
    {
        return $this->property;
    }

    public function getProperty()
    {
        return "{$this->property}: {$this->value};";
    }
}

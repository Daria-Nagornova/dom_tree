<?php

namespace DomTree\App\CSS\Styles;

class ColorProperty extends Property
{
    public function __construct($value)
    {
        parent::__construct('color', $value);
    }
}
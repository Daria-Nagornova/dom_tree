<?php

namespace DomTree\App\CSS\Styles;

class BackgroundColorProperty extends Property
{
    public function __construct($value)
    {
        parent::__construct('background-color', $value);
    }
}
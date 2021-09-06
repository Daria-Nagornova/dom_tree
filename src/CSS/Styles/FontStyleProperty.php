<?php

namespace DomTree\App\CSS\Styles;

class FontStyleProperty extends Property
{
    public function __construct($value)
    {
        parent::__construct('font-style', $value);
    }
}
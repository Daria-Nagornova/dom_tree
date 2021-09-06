<?php

namespace DomTree\App\CSS\Selectors;

use DomTree\App\CSS\PropertyList;

class ClassSelector extends Selector
{
    public function __construct($selector, PropertyList $properties = null)
    {
        parent::__construct('.' . $selector, $properties);
    }
}
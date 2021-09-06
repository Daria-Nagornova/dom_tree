<?php

namespace DomTree\App\CSS\Selectors;

use DomTree\App\CSS\PropertyList;

class IdSelector extends Selector
{
    public function __construct($selector, PropertyList $properties=null)
    {
        parent::__construct('#' . $selector, $properties);
    }
}
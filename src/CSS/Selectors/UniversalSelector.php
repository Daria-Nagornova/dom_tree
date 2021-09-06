<?php

namespace DomTree\App\CSS\Selectors;

use DomTree\App\CSS\PropertyList;

class UniversalSelector extends Selector
{
    public function __construct(PropertyList $properties=null)
    {
        parent::__construct('*', $properties);
    }
}
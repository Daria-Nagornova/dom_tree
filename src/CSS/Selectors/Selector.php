<?php

namespace DomTree\App\CSS\Selectors;

use DomTree\App\CSS\PropertyList;
use DomTree\App\CSS\Selectors\PseudoClass\PseudoClass;

abstract class Selector
{
    protected $selector;

    /**
     * @var PropertyList
     */
    protected $properties;

    public function __construct($selector, $properties)
    {
        $this->selector = $selector;
        if (isset($properties)) {
            $this->properties = $properties;
        } else {
            $this->properties = new PropertyList;
        }
    }


    public function css()
    {
        return $this->selector . ' ' . $this->properties->propertyList();
    }
}

<?php

namespace DomTree\App\CSS;

use DomTree\App\CSS\Styles\Property;

class PropertyList
{
    /**
     * @var Property[]
     */
    protected $styles;

    public function __construct(array $styles = [])
    {
        $this->styles = $styles;
    }

    public function propertyList()
    {
        $properties = '{';

        foreach ($this->styles as $style) {
            $properties .= " {$style->getProperty()} ";
        }
        $properties .= '}';

        return $properties;
    }
}
<?php

namespace DomTree\App\CSS\Selectors;

use DomTree\App\CSS\PropertyList;

class ListSelector extends Selector
{
    protected $selectors;

    public function __construct(array $selectors, PropertyList $properties)
    {
        parent::__construct($this->getStringSelectors($selectors), $properties);
    }

    private function getStringSelectors($selectors)
    {
        $stringSelectors = '';

        foreach ($selectors as $selector) {
            $stringSelectors .= "{$selector->selector}, ";
        }

        return $stringSelectors;
    }
}
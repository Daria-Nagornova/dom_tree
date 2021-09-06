<?php

namespace DomTree\App\CSS\Selectors;

use DomTree\App\CSS\PropertyList;

class GroupedSelectors extends Selector
{
    protected $selectors;

    public function __construct(array $selectors, PropertyList $properties=null)
    {
        parent::__construct($this->groupSelectors($selectors), $properties);
    }

    private function groupSelectors($selectors)
    {
        $groupedSelectors = '';

        foreach ($selectors as $selector) {
            if($selector->selector[0] !== '.')
            $groupedSelectors = "{$selector->selector}";
        }

        foreach ($selectors as $selector) {
            if($selector->selector[0] === '.') {
                $groupedSelectors .= "{$selector->selector}";
            }
        }

        return $groupedSelectors;
    }
}
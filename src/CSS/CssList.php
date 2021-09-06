<?php

namespace DomTree\App\CSS;

use DomTree\App\CSS\Selectors\Selector;
use DomTree\App\CSS\Styles\Property;

class CssList
{
    /**
     * @var Selector[]
     */
    protected $items;

    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    public function cssList()
    {
        $css = '';

        foreach ($this->items as $item) {
            $css .= " {$item->css()} ";
        }

        return $css;
    }
}
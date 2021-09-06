<?php

namespace DomTree\App\CSS\Selectors\PseudoClass;

class Hover extends PseudoClass
{
    public function __construct($selector)
    {
        parent::__construct('hover', $selector);
    }
}
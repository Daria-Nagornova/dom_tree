<?php

namespace DomTree\App\CSS\Selectors\PseudoClass;

abstract class PseudoClass
{
    protected $name;
    protected $selector;

    public function __construct($name, $selector)
    {
        $this->name = $name;
        $this->selector = $selector;
    }

    public function pseudoClass()
    {
        return $this->selector . ':' . $this->name;
    }
}

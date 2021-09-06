<?php

namespace DomTree\App\CSS\Selectors;

use DomTree\App\CSS\PropertyList;
use InvalidArgumentException;

class TagSelector extends Selector
{
    public function __construct($selector, PropertyList $properties=null)
    {
        $tags = ['a', 'div', 'span', 'li', 'ul', 'p', 'img', 'th', 'td', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'];

        if (!in_array($selector, $tags)) {
            throw new InvalidArgumentException('Не верное имя тега');
        }
        else parent::__construct($selector, $properties);
    }
}
<?php

namespace DomTree\App\Tag;

class A extends Tag
{
    protected $href;

    public function  __construct($href, $id = null, $class = null, $content = null) {
        parent::__construct($id, $class, $content);

        $this->href = $href;
    }

    public function getHref() {
        return ('href="' . $this->href . '"');
    }

    public function getA() {
        $result = '&lt;a';
        if(isset($this->href)) {
            $result .= ' ' . $this->getHref();
        }
        if(isset($this->id)) {
            $result .= ' ' . $this->getId();
        }
        if(isset($this->class)) {
            $result .= ' ' . $this->getClass();
        }

        $result .= '&gt;';

        if(isset($this->content)) {
            $result .= $this->getContent();
        }
        $result .= '&lt;/a&gt;';

        return $result;
    }
}
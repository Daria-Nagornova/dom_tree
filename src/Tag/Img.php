<?php

namespace DomTree\App\Tag;

class Img extends Tag
{
    protected $src;

    public function  __construct($src, $id = null, $class = null, $content = null) {
        parent::__construct($id, $class, $content);

        $this->src = $src;
    }

    public function getSrc() {
        return ('src="' . $this->src . '"');
    }

    public function getImg() {
        $result = '&lt;img';
        if(isset($this->src)) {
            $result .= ' ' . $this->getSrc();
        }
        if(isset($this->id)) {
            $result .= ' ' . $this->getId();
        }
        if(isset($this->class)) {
            $result .= ' ' . $this->getClass();
        }
        if(isset($this->content)) {
            $result .= ' alt="' . $this->getContent() . '"';
        }
        $result .= '&gt;';

        return $result;
    }
}
<?php


namespace DomTree\App\Tag;


class Div extends Tag
{

    public function  __construct($id = null, $class = null, $content = null) {
        parent::__construct($id, $class, $content);
    }

    public function getDiv() {
        $result = '&lt;div';
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
        $result .= '&lt;/div&gt;';

        return $result;
    }
}
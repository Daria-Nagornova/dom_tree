<?php


namespace DomTree\App\Tag;


class Tag
{
    public $id;
    public $class;
    public $content;

    public function  __construct($id = null, $class = null, $content = null) {
        $this->id = $id;
        $this->class = $class;
        $this->content = $content;
    }

    public function getId() {
        return ('id="' . $this->id . '"');
    }

    public function getClass() {
        return ('class="' . $this->class . '"');
    }

    public function getContent() {
        return $this->content;
    }
}
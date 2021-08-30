<?php

require_once '../vendor/autoload.php';

use DomTree\App\Tag\A;
use DomTree\App\Tag\Div;
use DomTree\App\Tag\Img;

$img = new Img('https://my.prostoy.ru/', 'img', 'image', 'картинка');
$a = new A('https://my.prostoy.ru/', 'a', 'link', 'ссылка');
$div = new Div('div', 'block', $img->getImg() . $a->getA());
echo $div->getDiv();



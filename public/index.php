<?php

require_once '../vendor/autoload.php';

use DomTree\App\CSS\CssList;
use DomTree\App\CSS\PropertyList;
use DomTree\App\CSS\Selectors\ClassSelector;
use DomTree\App\CSS\Selectors\GroupedSelectors;
use DomTree\App\CSS\Selectors\IdSelector;
use DomTree\App\CSS\Selectors\ListSelector;
use DomTree\App\CSS\Selectors\PseudoClass\Hover;
use DomTree\App\CSS\Selectors\TagSelector;
use DomTree\App\CSS\Selectors\UniversalSelector;
use DomTree\App\CSS\Styles\BackgroundColorProperty;
use DomTree\App\CSS\Styles\ColorProperty;
use DomTree\App\CSS\Styles\FontStyleProperty;
use DomTree\App\CSS\Styles\Property;
use DomTree\App\Tag\A;
use DomTree\App\Tag\Div;
use DomTree\App\Tag\Img;

/*$img = new Img('https://my.prostoy.ru/', 'img', 'image', 'картинка');
$a = new A('https://my.prostoy.ru/', 'a', 'link', 'ссылка');
$div = new Div('div', 'block', $img->getImg() . $a->getA());
echo $div->getDiv();*/

$css = new CssList([
    new UniversalSelector(new PropertyList([
        new ColorProperty('green'),
    ])),
    new TagSelector('div', new PropertyList([
        new FontStyleProperty('bold'),
        new ColorProperty('green'),
        new BackgroundColorProperty('red')
    ])),
    new IdSelector('id', new PropertyList([
        new FontStyleProperty('bold'),
        new ColorProperty('green'),
        new BackgroundColorProperty('red')
    ])),
    new ClassSelector((new Hover('class'))->pseudoClass(), new PropertyList([
        new FontStyleProperty('bold'),
        new ColorProperty('green'),
        new BackgroundColorProperty('red')
    ])),
    new ListSelector([new GroupedSelectors([new ClassSelector('new'), new TagSelector('span')]), new ClassSelector('class1'), new ClassSelector('class2')], new PropertyList([
        new FontStyleProperty('bold'),
        new ColorProperty('green'),
        new BackgroundColorProperty('red')
    ])),
]);
echo $css->cssList();



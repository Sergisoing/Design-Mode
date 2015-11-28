<?php

/**
* 装饰器模式
*/

/**
* 需要被装饰的抽象类
*/
interface Component{
    public function operation();
}

/**
* 具体被装饰的类
*/
class ConComponent implements Component{
    public function operation () {
        echo '<div>装饰器模式</div>';
    }
}


/**
* 装饰器
*/
class Decorator{
    protected $_widget = null;
    public function __construct(Component &$obj) {
        $this->widget = $obj;
    }

    public function _before() {

    }
    public function _after() {

    }
    public function decocate() {
        $this->_before();
        $this->widget->operation();
        $this->_after();
    }
}

class ColorDecorator extends Decorator{
    public function _before() {
        echo '<style>div{color: red;}</style>';
    }
}

class Client {
    public function __construct() {
        $c = new ConComponent();
        $Color = new ColorDecorator($c);
        $Color->decocate();
    }
}


new Client();

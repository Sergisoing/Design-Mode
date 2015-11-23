<?php

    /**
    * 适配器模式
    * 分为三个角色
    */

    /**
    * 被适应者(Adaptee)
    */
    class Adaptee{
        public function hello() {
            echo 'hello';
        }

        public function world() {
            echo 'world';
        }
    }

    /**
    * 目标接口(target),需要最终转化的接口
    */
    interface ITarget {
        public function helloWorld();
    }

    /**
    * Adapter(适配器)，转化器
    */
    class Adapter extends Adaptee implements ITarget{
        public function helloWorld() {
            echo $this->hello(), ' ', $this->world(), "\n";
        }
    }

    /**
    * client
    */
    class Client{
        public function __construct() {
            $a = new Adapter();
            $a->helloWorld();
        }
    }

    new Client();


<?php
    /**
    * 简单工厂
    */

    class SimpleFactory{
        //对象创建器
        public function create($className) {
            return new $className();
        }
    }

    class A {
        public function printClassName() {
            echo 'A', "\n";
        }
    }

    class B {
        public function printClassName() {
            echo 'B', "\n";
        }
    }

    /**
    * 客户端类
    */
    class Client{
        public function __construct() {
            $fac =  new SimpleFactory();
            $aClass = $fac->create('A');
            $bClass = $fac->create('B');
            $aClass->printClassName();
            $bClass->printClassName();
        }
    }


    //eg
    $cl = new Client();




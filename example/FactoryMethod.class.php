<?php

    /**
    * 工厂方法模式
    */

    /**
    * 定义个工场接口
    */
    interface IFactoryMethod{
        function create();
    }

    /**
    * A类的工厂创建方法
    */
    class CreateAFactory implements IFactoryMethod{
        public function create() {
            return new A();
        }
    }
    /**
    * A类的工厂创建方法
    */
    class CreateBFactory implements IFactoryMethod{
        public function create() {
            return new B();
        }
    }


    /**
    * 产品接口
    */
    interface Product{
        function printClassName();
    }

    /**
    * A
    */
    class A implements Product{
        public function printClassName() {
            echo 'A', "\n";
        }
    }

    /**
    * B
    */
    class B implements Product {
        public function printClassName() {
            echo 'B', "\n";
        }
    }

    /**
    * 客户端类
    */
    class Client {
        public function __construct() {
            $facA = new CreateAFactory();
            $aClass = $facA->create();
            $facB = new CreateBFactory();
            $bClass = $facB->create();
            $aClass->printClassName();
            $bClass->printClassName();
        }
    }

    new Client();

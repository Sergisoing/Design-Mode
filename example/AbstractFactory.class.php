<?php

    /**
    * 抽象工厂模式
    */

    /**
    * 抽象工场，定义了创建Cat，Dog两种产品的方法
    */
    interface AbstractFactory{
        function createCat();
        function createDog();
    }

    /**
    * 创建白色动物的工厂
    */
    class WhiteFactory implements AbstractFactory{
        /**
        * 创建白猫
        */
        public function createCat() {
            return new WhiteCat();
        }
        /**
        * 创建白狗
        */
        public function createDog() {
            return new WhiteDog();
        }
    }

    /**
    * 创建黑色动物的工厂
    */
    class BlackFactory implements AbstractFactory{
        /**
        * 创建黑猫
        */
        public function createCat() {
            return new BlackCat();
        }
        /**
        * 创建黑狗
        */
        public function createDog() {
            return new BlackDog();
        }
    }


    interface Cat{
        function name();
    }

    class WhiteCat implements Cat{
        public function name() {
            echo '小白猫', "\n";
        }
    }

    class BlackCat implements Cat{
        public function name() {
            echo '小黑猫', "\n";
        }
    }

    interface Dog{
        function name();
    }

    class WhiteDog implements Dog{
        public function name() {
            echo '小白狗', "\n";
        }
    }

    class BlackDog implements Dog{
        public function name() {
            echo '小黑狗', "\n";
        }
    }

    class Client{
        public function __construct() {
            $wFac = new WhiteFactory();
            $bFac = new BlackFactory();
            $wDog = $wFac->createDog();
            $wCat = $wFac->createCat();
            $bDog = $bFac->createDog();
            $bCat = $bFac->createCat();
            $wDog->name();
            $wCat->name();
            $bDog->name();
            $bCat->name();
        }
    }

    new Client();

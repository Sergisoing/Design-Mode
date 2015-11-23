<?php

    /**
    * 建造者模式
    */

    // 分为四个角色
    /**
    * 抽象建造者角色，定义抽象接口，规范各部分的对象的制造
    */
    interface Builder{
        public function buildFGColor();
        public function buildBGColor();
        public function buildWidth();
        public function buildHeight();
    }
    /**
    * 建造者角色，定义抽象接口，规范产品各个部分的建造，必须包括建造方法和返回方法
    */
    class ProductBuilder implements Builder{
        private $product;
        public function __construct() {
            $this->product = new Product();
        }

        public function buildFGColor(){
            $this->product->setFGColor('red');
        }
        public function buildBGColor(){
            $this->product->setBGColor('black');
        }
        public function buildWidth(){
            $this->product->setWidth('100px');
        }
        public function buildHeight(){
            $this->product->setHeight('100px');
        }
        public function getResult() {
            return $this->product;
        }

    }


    /**
    * 导演者的角色，具体生成对象的角色，调用具体的建造者角色创造产品
    */
    class Director{
        public function __construct(Builder $build) {
            $build->buildFGColor();
            $build->buildBGColor();
            $build->buildWidth();
            $build->buildHeight();
        }
    }

    /**
    * 产品角色，在导演者的指导下所创建的复杂的产品对象
    */
    class Product{
        private $fGColor;
        private $bGColor;
        private $width;
        private $height;

        public function setFGColor($color) {
            $this->fGColor = $color;
        }

        public function setBGColor($color) {
            $this->bGColor = $color;
        }

        public function setWidth($width) {
            $this->width = $width;
        }

        public function setHeight($height) {
            $this->height = $height;
        }
    }


    class Client{
        public function __construct() {
            $builder = new ProductBuilder();
            new Director($builder);
            $productObj = $builder->getResult();
            var_dump($productObj);
        }
    }



    new Client();

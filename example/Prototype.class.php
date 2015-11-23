<?php

    /**
    * 原型模式
    */
    interface IPrototype{
        function copy();
    }

    class Person{
        private $name;
        private $age;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        public function printInfo() {
            echo 'name: ', $this->name, "\n";
            echo 'age: ', $this->age, "\n";
        }

        public function copy() {
            return clone $this;
        }
    }

    class Client{
        public function __construct() {
            $p1 = new Person('name', '100');
            $p1->printInfo();
            $p2 = $p1->copy();
            $p2->printInfo();
        }
    }


    new Client();


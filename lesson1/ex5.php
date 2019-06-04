<?php
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();// выедит 1
$a2->foo();// выведит 2 потому-что методд статичный и инкрименция происходит у класса а не у объекта
$a1->foo();// 3
$a2->foo();// 4
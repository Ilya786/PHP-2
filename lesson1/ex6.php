<?php
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo();// выведет 1
$b1->foo();// выведет 1 потому-что при наследование класса создается новоя статичная переменная
$a1->foo();// 2
$b1->foo();// 2
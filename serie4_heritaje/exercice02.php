<?php
abstract class A{
    public function methode(){
        echo"hello world";
    }
}
class B extends A{
}
$object = new B();
$object->methode();
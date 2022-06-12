<?php
/**
 * Traits support the use of abstract methods in order to impose requirements upon the exhibiting class. Public, protected, and private methods are supported. Prior to PHP 8.0.0, only public and protected abstract methods were supported.

*Caution: 
*   A concrete class fulfills this requirement by defining a concrete method with the same name; its signature may be different.
 */

trait Hello {
    public function sayHelloWorld() {
        echo 'Hello'.$this->getWorld();
    }
    abstract public function getWorld();
}

class MyHelloWorld {
    private $world;
    use Hello;
    public function getWorld() {
        return $this->world;
    }
    public function setWorld($val) {
        $this->world = $val;
    }
}
<?php
/**
 * Traits can define static variables, static methods and static properties.

*Note:
*   As of PHP 8.1.0, calling a static method, or accessing a static property directly on a trait is deprecated. Static methods and properties should only be accessed on a class using the trait.
 */

// Example: 1
trait Counter {
    public function inc() {
        static $c = 0;
        $c = $c + 1;
        echo "$c\n";
    }
}

class C1 {
    use Counter;
}

class C2 {
    use Counter;
}

$o = new C1(); $o->inc(); // echo 1
$p = new C2(); $p->inc(); // echo 1




// Example: 2
trait StaticExample2 {
    public static function doSomething() {
        return 'Doing something';
    }
}

class Example2 {
    use StaticExample2;
}

Example2::doSomething();


// Example: 3
trait StaticExample3 {
    public static $static = 'foo';
}

class Example3 {
    use StaticExample3;
}

echo Example3::$static;
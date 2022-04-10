<?php 
// declare(strict_types=1)
/**
 * Final Keyword: 
 *      The final keyword prevents child classes from overriding a method or constant by prefixing the definition with final. If the class itself is being defined final then it cannot be extended.
 * 
 * Note: Properties cannot be declared final: only classes, methods, and constants (as of PHP 8.1.0) may be declared as final. As of PHP 8.0.0, private methods may not be declared final except for the constructor.
 */

// Example-1
class BaseClass1 {
    public function test() {
        echo "BaseClass1::test() called\n";
    }
    
    final public function moreTesting() {
        echo "BaseClass1::moreTesting() called\n";
    }
 }
 
 class ChildClass extends BaseClass1 {
    public function moreTesting() {
        echo "ChildClass::moreTesting() called\n";
    }
 }
 // Results in Fatal error: Cannot override final method BaseClass::moreTesting()

 // Example-2
 final class BaseClass2 {
    public function test() {
        echo "BaseClass2::test() called\n";
    }
 
    // As the class is already final, the final keyword is redundant
    final public function moreTesting() {
        echo "BaseClass2::moreTesting() called\n";
    }
 }
 
 class ChildClass extends BaseClass2 {
 }
 // Results in Fatal error: Class ChildClass may not inherit from final class (BaseClass)


 // Example-3
 class Foo
{
    final public const X = "foo";
}

class Bar extends Foo
{
    public const X = "bar";
}

// Fatal error: Bar::X cannot override final constant Foo::X
?>
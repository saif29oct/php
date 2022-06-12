<?php
/**
 * If two Traits insert a method with the same name, a fatal error is produced, if the conflict is not explicitly resolved.
 * 
 * To resolve naming conflicts between Traits used in the same class, the insteadof operator needs to be used to choose exactly one of the conflicting methods.
 * 
 * Since this only allows one to exclude methods, the as operator can be used to add an alias to one of the methods. Note the as operator does not rename the method and it does not affect any other method either.
 */

 // Example: 1
trait A {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}

trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

class Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }
}

class Aliased_Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        B::bigTalk as talk;
    }
}

$at = new Aliased_Talker();
$at->bigTalk();


// Example: 2
/**
 * If a trait defines a property then a class can not define a property with the same name unless it is compatible (same visibility and initial value), otherwise a fatal error is issued.
 */
trait PropertiesTrait {
    public $same = true;
    public $different = false;
}

class PropertiesExample {
    use PropertiesTrait;
    public $same = true;
    public $different = true; // Fatal error
}

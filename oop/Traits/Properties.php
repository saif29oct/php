<?php
// Example: Defining Properties
trait PropertiesTrait1 {
    public $x = 1;
}

class PropertiesExample1 {
    use PropertiesTrait1;
}

$example = new PropertiesExample1;
$example->x;

/**
 * If a trait defines a property then a class can not define a property with the same name unless it is compatible (same visibility and initial value), otherwise a fatal error is issued.
 */
trait PropertiesTrait2 {
    public $same = true;
    public $different = false;
}

class PropertiesExample2 {
    use PropertiesTrait2;
    public $same = true;
    public $different = true; // Fatal error
}
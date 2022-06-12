<?php
/**
 * HP only supports single inheritance: a child class can inherit only from one single parent.

 *So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.

 *  Traits are used to declare methods that can be used in multiple classes. 
 *  Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).
 
 *Rules:
 *  - Cann't instantiate the instance of Trait Object
 *  - If A class use multiple traits and more than one traits have the same function name there will be an error. To solve this problem use InseteadOf keyword or refactor the trait funciton with an alias

 */

trait ezcReflectionReturnInfo {
function getReturnType() { /*1*/ }
function getReturnDescription() { /*2*/ }
}

class ezcReflectionMethod extends ReflectionMethod {
use ezcReflectionReturnInfo;
/* ... */
}

class ezcReflectionFunction extends ReflectionFunction {
use ezcReflectionReturnInfo;
/* ... */
}
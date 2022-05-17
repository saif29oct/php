<?php
/**
 * Overloading in PHP provides means to dynamically create properties and methods. These dynamic entities are processed via magic methods one can establish in a class for various action types.
 * 
 * The overloading methods are invoked when interacting with properties or methods that have not been declared or are not visible in the current scope. The rest of this section will use the terms inaccessible properties and inaccessible methods to refer to this combination of declaration and visibility.
 * 
 * All overloading methods must be defined as public.
 * 
 * Note: 
 *      None of the arguments of these magic methods can be passed by reference.
 * 
 * Note: 
 *      PHP's interpretation of overloading is different than most object-oriented languages. Overloading traditionally provides the ability to have multiple methods with the same name but different quantities and types of arguments.
 * 
 * In PHP we use __call($fn, $arguments ) magic method for function overloading.
 * 
 * Compile time vs Runtime:
 *      Compile-time and Runtime are the two programming terms used in the software development. Compile-time is the time at which the source code is converted into an executable code while the run time is the time at which the executable code is started running. Both the compile-time and runtime refer to different types of error.
 * 
 */

 class Demo{
    //  function add ($a, $b){
    //      echo "The addition is: " .$a + $b;
    //  }

     function __call($name, $arg){
        // Check the function name
        // Count the arguments
        // Design the depending on the arguments
        if($name == "add"){
            $c = count($arg);
            switch($c){
                case 2:
                    echo $arg[0] + $arg[1];
                    echo PHP_EOL;
                    break;
                case 3:
                    echo $arg[0] + $arg[1] + $arg[2];
                    echo PHP_EOL;
                    break;
                default:
                    break;
            }
        }
          
     }
 }

 $obj1 = new Demo();
 $obj1->add(1, 2, 3);
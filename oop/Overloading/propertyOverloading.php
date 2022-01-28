<?php
/**
 * Overloading in PHP provides means to dynamically create properties and methods. These dynamic entities are processed via magic methods one can establish in a class for various action types.
 * The overloading methods are invoked when interacting with properties or methods that have not been declared or are not visible in the current scope. The rest of this section will use the terms inaccessible properties and inaccessible methods to refer to this combination of declaration and visibility.
 * 
 * All overloading methods must be defined as public.
 * 
 * All magic methods, with the exception of __construct(), __destruct(), and __clone(), must be declared as public.  __construct() and __destruct() must not declare a return type; otherwise a fatal error is emitted.
 * 
 * Note: 
 *      None of the arguments of these magic methods can be passed by reference.
 * 
 * 
 * Note: 
 *      PHP's interpretation of overloading is different than most object-oriented languages. Overloading traditionally provides the ability to have multiple methods with the same name but different quantities and types of arguments.
 * 
 * public __set(string $name, mixed $value): void   ( is run when writing data to inaccessible (protected or private) or non-existing properties. )
 * public __get(string $name): mixed    ( is utilized for reading data from inaccessible (protected or private) or non-existing properties. )
 * public __isset(string $name): bool   ( is triggered by calling isset() or empty() on inaccessible (protected or private) or non-existing properties. )
 * public __unset(string $name): void   (  invoked when unset() is used on inaccessible (protected or private) or non-existing properties. )
 * 
 * 
 * Note: The return value of __set() is ignored because of the way PHP processes the assignment operator. Similarly, __get() is never called when chaining assignments together like this: 
 *  $a = $obj->b = 8; 

 */
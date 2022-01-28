<?php
/**
 * Overloading in PHP provides means to dynamically create properties and methods. These dynamic entities are processed via magic methods one can establish in a class for various action types.
 * The overloading methods are invoked when interacting with properties or methods that have not been declared or are not visible in the current scope. The rest of this section will use the terms inaccessible properties and inaccessible methods to refer to this combination of declaration and visibility.
 * 
 * All overloading methods must be defined as public.
 * 
 * Note: 
 *      None of the arguments of these magic methods can be passed by reference.
 * 
 * 
 * Note: 
 *      PHP's interpretation of overloading is different than most object-oriented languages. Overloading traditionally provides the ability to have multiple methods with the same name but different quantities and types of arguments.

 */
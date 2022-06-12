<?php
/**
 * *
 * Interfaces allow you to specify what methods a class should implement.

 * Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".

 * Object interfaces allow us to create code which specifies which methods a class must implement, without having to define how these methods are implemented. Interfaces share a namespace with classes and traits, so they may not use the same name.
 *
 *Interfaces are defined in the same way as a class, but with the interface keyword replacing the class keyword and without any of the methods having their contents defined.
 *
 *All methods declared in an interface must be public; this is the nature of an interface.
 *
 *In practice, interfaces serve two complementary purposes:
 *
 *To allow developers to create objects of different classes that may be used interchangeably because they implement the same interface or interfaces. A common example is multiple database access services, multiple payment gateways, or different caching strategies. Different implementations may be swapped out without requiring any changes to the code that uses them.
 *To allow a function or method to accept and operate on a parameter that conforms to an interface, while not caring what else the object may do or how it is implemented. These interfaces are often named like Iterable, Cacheable, Renderable, or so on to describe the significance of the behavior.
 *Interfaces may define magic methods to require implementing classes to implement those methods.
 *
 *Note:
 *
 *Although they are supported, including constructors in interfaces is strongly discouraged. Doing so significantly reduces the flexibility of the object implementing the interface. Additionally, constructors are not enforced by inheritance rules, which can cause inconsistent and unexpected behavior.
 * 
 * 
 * 
 * 
 * 
 *PHP - Interfaces vs. Abstract Classes
 *Interface are similar to abstract classes. The difference between interfaces and abstract classes are:

 *Interfaces cannot have properties, while abstract classes can
 *All interface methods must be public, while abstract class methods is public or protected
 *Interface can only contain method declaration, while Abstract class can contain method implementations
 *All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
 *Classes can implement an interface while inheriting from another class at the same time
 *A Class can implement multiple Interfaces, where a Class can only extends a single Abstract Class



 *Warning
 *A class can implement two interfaces which define a method with the same name, only if the method declaration in both interfaces is identical.
 *
 *Warning
 *  A class that implements an interface may use a different name for its parameters than the interface. However, as of PHP 8.0 the language supports named arguments, which means callers may rely on the parameter name in the interface. For that reason, it is strongly recommended that developers use the same parameter names as the interface being implemented.
 *
 *Note:
 *  Interfaces can be extended like classes using the extends operator.
 *
 *Note:
 *  The class implementing the interface must declare all methods in the interface with a compatible signature.
 */
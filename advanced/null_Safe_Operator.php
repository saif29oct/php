<?php
/**Null-Safe Operator  ?->
 * Null-safe operator is a new syntax in PHP 8.0, that provides optional chaining feature to PHP. The null-safe operator allows reading the value of property and method return value chaining, where the null-safe operator short-circuits the retrieval if the value is null , without causing any errors
 * 
 * Null-Safe Operator( ?-> ) works with both properties and Methods where Null-Colasing Operator( ?? ) won't work with methods
 * 
 */
declare(strict_types=1);

class Customer{
    public ?PaymentProfile $paymentProfile = null;
}

class PaymentProfile{
    public function __construct(public int $id){
        return 30;
    }
}

class Transection{
    public ?Customer $Customer = null;
    public function __construct(private float $amount, private 
    
    string $description){
    }

}

$obj = new Transection(23, "Transection-1");
echo $obj->Customer?->PaymentProfile?->id;

// without null-safe operator
// echo $obj->Customer->PaymentProfile->id;

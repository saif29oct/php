<?php
// Access modifier also called visibility modifier
class A{
    public $val1;
    protected $val2;
    private $val3;
    public function __construct($val1,$val2,$val3)
    {
        $this->val1 = $val1;
        $this->val2 = $val2;
        $this->val3 = $val3;
    }
}

class B extends A{
    public function __construct($val1,$val2,$val3,$val4)
    {
        parent::__construct($val1,$val2,$val3);
        $this->val = $val4; 
        /*
            Here val varialbe is not pre-decalared but it's a valid expression.
            By default its a public property if we not use any access modifier with pre-declared value.
        */
    }

    public function show_message(){
        $ary[] = $this->val;
        $ary[] = $this->val1;
        $ary[] = $this->val2;
        $ary[] = $this->val3;   # Can't access the private property. But instead showing an error
                                # it showing an Warning assigned as a NULL value.
        return $ary;
        /*
            class B cant access the private property of class A.
            (means a class can't access the private property of it's parent class)
            It can access only public and protected property of it's parent class.
        */
    }
}


class C extends B{
    public function show_parent_protected_properties(){
        return $this->val2;
    }
}


// Test 1
$call_A = new A('val1','val2',"val3");
// print_r($call_A);           # return a object reference
// echo $call_A->val1."\n";
// echo $call_A->val2."\n";    #  Fatal Error cannot access the protected property
// echo $call_A->val3."\n";    #  Fatal Error cannot access the private property


// Test 2
$call_B = new B("val1","val2","val3","val4");
// print_r($call_B);
// echo $call_B->val."\n";   #  though it is not pre-declared inside the call but intialized inside
                             #  the constructor we can access it as a public property of that class.
// $ary = $call_B->show_message();
// print_r($ary);
// echo sizeof($ary)."\n";
// echo gettype($ary[3])."\n";
// echo $ary[3];

// Test 3
$call_C = new C("val1","val2","val3","val4");
echo $call_C->show_parent_protected_properties();

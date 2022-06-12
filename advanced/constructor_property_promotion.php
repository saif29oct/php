<?php

// Traditional Constructor Setup
class A{
    private int $var_1;
    private int $var_2;

    public function __construct(int $a, int $b){
        $this->var_1 = $a;
        $this->var_2 = $b;
    }

    public function getData(): array{
        return [$this->var_1, $this->var_2];
    }
}

$obj_A = (new A(2,4))->getData();
echo "<pre>";
print_r($obj_A);



// Using constructor property promotion
class B{
    public function __construct(private int $var_1, private int $var_2){}
    
    public function getData(): array{
        return [$this->var_1, $this->var_2];
    }
}

$obj_A = (new B(2,4))->getData();
echo "<pre>";
print_r($obj_A);

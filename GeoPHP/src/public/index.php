<?php
declare(strict_types=1);

require_once '../Transaction.php';

$transaction = (new Transaction(300, "Transection 1"))
                ->addDiscount(50)
                ->addTax(5)
                ->getPrice();

echo "<pre>";
print_r($transaction);            
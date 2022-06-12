<?php
declare(strict_types=1);

class Transaction{
    private $baseAmount;
    private $description;
    private $finalAmount;
    private $discountPrice;

    public function __construct(float $baseAmount, string $description){
        $this->baseAmount = $baseAmount;
        $this->description = $description;
    }

    public function addTax(float $tax): Transaction{
        $this->finalAmount = $this->discountPrice + (($this->discountPrice * $tax) / 100);
        return $this;
    }

    public function addDiscount(float $discount): Transaction{
        $this->discountPrice = $this->baseAmount - (($this->baseAmount * $discount) / 100);
        return $this;
    }

    public function getPrice(): array{
        return [$this->finalAmount, $this->description];
    }

    public function getBaseAmount(): float{
        return $this->baseAmount;
    }
}
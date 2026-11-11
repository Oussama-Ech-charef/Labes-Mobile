<?php

declare(strict_types=1);

abstract class Product
{
    public function __construct(
        protected readonly string $name,
        protected readonly float $price,
    ) {
    }

    abstract public function typeLabel(): string;

    public function summary(): string
    {
        return "{$this->typeLabel()} : {$this->name} ({$this->price} DH)";
    }
}

final class PhysicalProduct extends Product
{
    public function typeLabel(): string
    {
        return 'Produit physique';
    }
}

$product = new PhysicalProduct('Clavier', 249.90);

echo $product->summary() . PHP_EOL;

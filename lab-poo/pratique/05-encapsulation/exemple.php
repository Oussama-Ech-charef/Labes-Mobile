<?php

declare(strict_types=1);

final class Category
{
    public function __construct(
        private string $name,
    ) {
        $this->rename($name);
    }

    public function name(): string
    {
        return $this->name;
    }

    public function rename(string $name): void
    {
        $name = trim($name);

        if ($name === '') {
            throw new InvalidArgumentException('Le nom est obligatoire.');
        }

        $this->name = $name;
    }
}

$category = new Category('  Informatique  ');
$category->rename('Accessoires');

echo "Catégorie : {$category->name()}" . PHP_EOL;

<?php

declare(strict_types=1);

trait HasDisplayName
{
    public function displayName(): string
    {
        return trim($this->name);
    }
}

final class Category
{
    use HasDisplayName;

    public function __construct(private readonly string $name)
    {
    }
}

final class User
{
    use HasDisplayName;

    public function __construct(private readonly string $name)
    {
    }
}

$category = new Category('  Électronique  ');
$user = new User('  Oussama  ');

echo "Catégorie : {$category->displayName()}" . PHP_EOL;
echo "Utilisateur : {$user->displayName()}" . PHP_EOL;


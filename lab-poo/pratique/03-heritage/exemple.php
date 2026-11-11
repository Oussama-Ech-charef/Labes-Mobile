<?php

declare(strict_types=1);

class User
{
    public function __construct(
        protected readonly string $name,
    ) {
    }

    public function label(): string
    {
        return "Utilisateur : {$this->name}";
    }
}

final class Administrator extends User
{
    public function label(): string
    {
        return parent::label() . ' (administrateur)';
    }
}

$administrator = new Administrator('Oussama');

echo $administrator->label() . PHP_EOL;

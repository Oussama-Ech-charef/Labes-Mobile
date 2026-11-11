<?php

declare(strict_types=1);

interface Exportable
{
    public function export(): string;
}

final class Category implements Exportable
{
    public function __construct(
        private readonly int $id,
        private readonly string $name,
    ) {
    }

    public function export(): string
    {
        return json_encode(
            ['id' => $this->id, 'name' => $this->name],
            JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE
        );
    }
}

$category = new Category(1, 'Électronique');

echo $category->export() . PHP_EOL;

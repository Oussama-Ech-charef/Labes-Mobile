<?php

declare(strict_types=1);

final class InvalidCategoryName extends InvalidArgumentException
{
}

function createCategory(string $name): string
{
    $name = trim($name);

    if ($name === '') {
        throw new InvalidCategoryName('Le nom de la catégorie est obligatoire.');
    }

    if (mb_strlen($name) < 3) {
        throw new InvalidCategoryName(
            'Le nom de la catégorie doit contenir au moins 3 caractères.'
        );
    }

    return "Catégorie créée : {$name}";
}

$categoryNames = ['Produits', ''];

foreach ($categoryNames as $categoryName) {
    try {
        echo createCategory($categoryName) . PHP_EOL;
    } catch (InvalidCategoryName $exception) {
        echo "Création refusée : {$exception->getMessage()}" . PHP_EOL;
    }
}


<?php

function diviser(float $nombre, float $diviseur): float
{
    if ($diviseur === 0.0) {
        throw new InvalidArgumentException('Le diviseur ne peut pas être zéro.');
    }

    return $nombre / $diviseur;
}

try {
    echo diviser(10, 2) . PHP_EOL;
    echo diviser(10, 0) . PHP_EOL;
} catch (InvalidArgumentException $exception) {
    echo 'Erreur traitée : ' . $exception->getMessage() . PHP_EOL;
}

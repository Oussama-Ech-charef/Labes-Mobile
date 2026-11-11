<?php

declare(strict_types=1);

final class CategoryCode
{
    private static int $nextId = 1;

    public static function generate(string $name): string
    {
        $code = sprintf('CAT-%03d', self::$nextId);
        self::$nextId++;

        return $code . '-' . strtoupper(substr(trim($name), 0, 3));
    }
}

echo CategoryCode::generate('Informatique') . PHP_EOL;
echo CategoryCode::generate('Maison') . PHP_EOL;

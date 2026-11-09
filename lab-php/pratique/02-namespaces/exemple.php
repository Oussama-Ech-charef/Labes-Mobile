<?php

declare(strict_types=1);

namespace App\Models {
    final class Category
    {
        public function __construct(private readonly string $name)
        {
        }

        public function label(): string
        {
            return "Modèle : {$this->name}";
        }
    }
}

namespace App\Http\Resources {
    final class Category
    {
        public function __construct(private readonly string $name)
        {
        }

        public function label(): string
        {
            return "Ressource HTTP : {$this->name}";
        }
    }
}

namespace {
    use App\Http\Resources\Category as CategoryResource;
    use App\Models\Category as CategoryModel;

    $model = new CategoryModel('Électronique');
    $resource = new CategoryResource('Électronique');

    echo $model->label() . PHP_EOL;
    echo $resource->label() . PHP_EOL;
}


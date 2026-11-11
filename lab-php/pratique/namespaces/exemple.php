<?php

namespace Boutique {
    class Produit
    {
        public function nom(): string
        {
            return 'Produit de la boutique';
        }
    }
}

namespace Stock {
    class Produit
    {
        public function nom(): string
        {
            return 'Produit du stock';
        }
    }
}

namespace {
    $produitBoutique = new \Boutique\Produit();
    $produitStock = new \Stock\Produit();

    echo $produitBoutique->nom() . PHP_EOL;
    echo $produitStock->nom() . PHP_EOL;
}

# Exemple 1 : classe abstraite

## Objectif

Créer une classe modèle `Product` qui rassemble les données et le
comportement communs à plusieurs produits, sans autoriser son instanciation
directe.

## Exécution

Depuis `lab-poo` :

```bash
php pratique/01-classe-abstraite/exemple.php
```

Résultat attendu :

```text
Produit physique : Clavier (249.9 DH)
```

## Lecture du code

1. `abstract class Product` déclare une classe abstraite. Elle sert de modèle
   et ne peut pas être créée avec `new Product(...)`.
2. Le constructeur initialise les propriétés communes `name` et `price`.
   `protected` permet aux classes filles d'y accéder.
3. `abstract public function typeLabel()` impose une méthode que chaque type
   de produit doit fournir.
4. `summary()` réutilise ces données et la méthode abstraite pour produire un
   résumé commun.
5. `PhysicalProduct extends Product` hérite du constructeur et de
   `summary()`, puis fournit son libellé spécifique.

## Lien avec l'architecture

Cet exemple est autonome. Dans une application Laravel, une classe abstraite
pourrait factoriser les règles communes de plusieurs modèles ou services,
mais elle n'est pas ajoutée automatiquement à l'application réelle.

## Limite et exercice

Ajoutez une classe `DigitalProduct` avec un libellé différent et vérifiez que
la méthode `summary()` reste réutilisable.

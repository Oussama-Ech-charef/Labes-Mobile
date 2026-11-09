# Exemple 1 : exceptions

## Objectif

Refuser une catégorie invalide sans mélanger la validation et l'affichage du
résultat. Cette démonstration autonome représente une règle qui pourrait être
placée dans un contrôleur ou un service Laravel avant l'enregistrement d'une
catégorie.

## Exécution

Depuis `lab-php` :

```bash
php pratique/01-exceptions/exemple.php
```

Résultat attendu :

```text
Catégorie créée : Produits
Création refusée : Le nom de la catégorie est obligatoire.
```

## Lecture du code

1. `declare(strict_types=1)` demande à PHP d'appliquer les types stricts.
2. `InvalidCategoryName` décrit précisément l'erreur de validation. Elle
   étend `InvalidArgumentException`, une exception standard de PHP.
3. `createCategory()` nettoie le nom avec `trim()`, puis vérifie qu'il n'est
   pas vide et qu'il contient au moins trois caractères.
4. `throw` interrompt la fonction et transmet l'erreur à l'appelant.
5. La boucle `foreach` simule deux entrées utilisateur.
6. Le bloc `try` tente l'opération et le bloc `catch` transforme l'erreur en
   message compréhensible sans arrêter tout le programme.

## Lien avec l'architecture

L'exemple est autonome : il n'utilise pas Laravel. Dans l'application réelle,
la validation pourrait être faite par une Form Request et l'exception traitée
par le mécanisme de réponse HTTP de Laravel. Ici, le parcours est simplifié
pour rendre la frontière d'erreur visible.

## Limite et exercice

La fonction ne persiste aucune donnée. Ajoutez une classe `CategoryRepository`
qui reçoit le nom validé et simule son enregistrement.


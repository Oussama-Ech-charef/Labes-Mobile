# Exemple : namespaces

## Objectif

Utiliser deux classes qui portent le même nom sans conflit. Cet exemple est
autonome et simule deux domaines possibles d'une application : la boutique et
le stock. Il n'utilise pas encore l'autoload Composer du projet.

## Fichier concerné

- `namespaces/exemple.php`

## Exécution

Depuis le dossier `lab-php` :

```bash
php namespaces/exemple.php
```

## Déroulement

1. `namespace Boutique` place la première classe `Produit` dans l'espace
   `Boutique`.
2. `namespace Stock` place une deuxième classe `Produit` dans l'espace `Stock`.
3. Les deux classes peuvent donc avoir le même nom court.
4. Dans l'espace global, `new \Boutique\Produit()` et `new \Stock\Produit()`
   désignent précisément les classes voulues.
5. Chaque appel à `nom()` affiche le texte de son namespace.

## Résultat attendu

```text
Produit de la boutique
Produit du stock
```

## Lien avec le projet

Dans un projet organisé, les namespaces peuvent séparer les contrôleurs,
services et modèles, et éviter les collisions de noms. Ici, deux classes sont
déclarées dans un seul fichier uniquement pour rendre la démonstration facile à
exécuter.

## Limite et exercice

L'exemple n'utilise pas Composer. Séparez les classes dans deux fichiers et
ajoutez un autoload PSR-4 lorsque le projet aura un `composer.json` adapté.

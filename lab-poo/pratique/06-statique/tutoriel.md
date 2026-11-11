# Exemple 6 : méthodes et propriétés statiques

## Objectif

Conserver un compteur partagé par la classe et appeler une méthode sans créer
un objet `CategoryCode`.

## Exécution

Depuis `lab-poo` :

```bash
php pratique/06-statique/exemple.php
```

Résultat attendu :

```text
CAT-001-INF
CAT-002-MAI
```

## Lecture du code

1. `private static int $nextId` appartient à la classe, et non à une instance
   particulière.
2. `CategoryCode::generate(...)` appelle directement la méthode statique avec
   l'opérateur `::`.
3. `self::$nextId` lit puis incrémente le compteur partagé après chaque code.
4. `sprintf()` garantit un numéro sur trois chiffres et `strtoupper()` produit
   un préfixe lisible.
5. Les deux appels successifs montrent que la propriété statique conserve son
   état pendant l'exécution du script.

## Lien avec l'architecture

Cet exemple est autonome et simule un générateur de codes. Dans Laravel, les
identifiants persistants doivent normalement être gérés par la base de
données ; une propriété statique ne remplace donc pas une séquence fiable.

## Limite et exercice

Ajoutez une méthode statique `reset()` pour les tests, puis expliquez pourquoi
son usage doit rester contrôlé en production.

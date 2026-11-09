# Exemple 2 : namespaces

## Objectif

Montrer comment deux classes portant le même nom peuvent coexister lorsqu'elles
appartiennent à des espaces de noms différents. Cette organisation reprend une
convention Laravel fréquente : les modèles sont dans `App\Models` et les
ressources HTTP dans `App\Http\Resources`.

## Exécution

Depuis `lab-php` :

```bash
php pratique/02-namespaces/exemple.php
```

Résultat attendu :

```text
Modèle : Électronique
Ressource HTTP : Électronique
```

## Lecture du code

1. Le bloc `namespace App\Models` déclare une classe `Category` représentant
   les données métier.
2. Le bloc `namespace App\Http\Resources` déclare une autre classe `Category`,
   destinée à représenter une réponse HTTP.
3. Les deux classes ont volontairement le même nom court, mais leur nom
   complet est différent : `App\Models\Category` et
   `App\Http\Resources\Category`.
4. Dans le bloc global, `use ... as ...` importe les classes et leur donne des
   alias explicites.
5. Les deux objets peuvent ensuite être instanciés sans collision.

## Lien avec l'architecture

L'exemple est autonome et ne charge pas Composer. Dans Laravel, l'autoload
PSR-4 de `composer.json` associe généralement `App\` au dossier `app/`. Les
fichiers seraient alors séparés, par exemple dans `app/Models/Category.php`
et `app/Http/Resources/Category.php`.

## Limite et exercice

Les classes ne contiennent qu'une méthode d'affichage. Ajoutez une propriété
`id` au modèle et une méthode `toArray()` à la ressource pour montrer comment
une réponse HTTP peut sélectionner les champs exposés.


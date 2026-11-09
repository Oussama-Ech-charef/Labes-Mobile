# lab-php

## Objectif

Ce lab présente trois notions de PHP utiles pour structurer le code d'une
application Laravel :

- la gestion des erreurs et des exceptions ;
- les namespaces ;
- les traits.

Les exemples du dossier `pratique` sont autonomes. Ils illustrent des
situations proches du projet Laravel, mais ne modifient pas directement son
code applicatif.

## Démarrage

Depuis le dossier `lab-php` :

```bash
php pratique/01-exceptions/exemple.php
php pratique/02-namespaces/exemple.php
php pratique/03-traits/exemple.php
```

PHP 8.3 ou une version compatible avec la syntaxe utilisée est recommandée,
comme dans `lab-laravel/hello-world`.

## Exemples pratiques

| Notion | Exemple | Tutoriel |
|---|---|---|
| Exceptions | Validation d'une catégorie avant son enregistrement | [01-exceptions/tutoriel.md](pratique/01-exceptions/tutoriel.md) |
| Namespaces | Deux classes `Category` organisées dans des espaces distincts | [02-namespaces/tutoriel.md](pratique/02-namespaces/tutoriel.md) |
| Traits | Formatage partagé entre une catégorie et un utilisateur | [03-traits/tutoriel.md](pratique/03-traits/tutoriel.md) |

Chaque exemple se trouve dans son propre dossier et contient un fichier
`exemple.php` exécutable ainsi qu'un `tutoriel.md`.


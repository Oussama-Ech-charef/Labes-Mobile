# Lab PHP - POO

## Objectif

Dans ce lab, nous allons apprendre six nouvelles notions de la programmation orientée objet (POO) en PHP.

Ces notions ne sont pas encore étudiées dans les tutoriels.

Pour chaque notion, nous allons expliquer son rôle et faire un exemple pratique dans notre projet technique.

Les six notions sont :

- **Classe abstraite :** créer une classe modèle.
- **Interface :** définir les méthodes d'une classe.
- **Héritage :** utiliser les propriétés et les méthodes d'une autre classe.
- **Polymorphisme :** utiliser une même méthode avec des résultats différents.
- **Encapsulation :** protéger les données d'une classe.
- **Méthodes et propriétés statiques :** utiliser des éléments directement avec une classe.

## Démarrage

Les exemples sont autonomes et ne modifient pas directement l'application
Laravel. Depuis le dossier `lab-poo`, exécutez un exemple avec :

```bash
php pratique/01-classe-abstraite/exemple.php
```

PHP 8.3 ou une version compatible avec la syntaxe utilisée est recommandée,
comme dans `lab-laravel/hello-world`.

## Exemples pratiques

| Notion | Exemple | Tutoriel |
|---|---|---|
| Classe abstraite | Modèle commun pour des produits | [01-classe-abstraite/tutoriel.md](pratique/01-classe-abstraite/tutoriel.md) |
| Interface | Contrat d'export JSON d'une catégorie | [02-interface/tutoriel.md](pratique/02-interface/tutoriel.md) |
| Héritage | Spécialisation d'un utilisateur administrateur | [03-heritage/tutoriel.md](pratique/03-heritage/tutoriel.md) |
| Polymorphisme | Envoi par e-mail ou SMS avec `send()` | [04-polymorphisme/tutoriel.md](pratique/04-polymorphisme/tutoriel.md) |
| Encapsulation | Validation du nom d'une catégorie | [05-encapsulation/tutoriel.md](pratique/05-encapsulation/tutoriel.md) |
| Méthodes et propriétés statiques | Génération de codes de catégories | [06-statique/tutoriel.md](pratique/06-statique/tutoriel.md) |

Chaque dossier contient un fichier `exemple.php` exécutable et un
`tutoriel.md` associé.

## Travail demandé

1. Rechercher les six notions et comprendre leur rôle.
2. Expliquer chaque notion avec des mots simples.
3. Réaliser un exemple pratique pour chaque notion dans le projet technique.
4. Tester les exemples et vérifier les résultats.
5. Présenter le rôle et le fonctionnement de chaque notion.
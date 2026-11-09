# Exemple 3 : traits

## Objectif

Partager un comportement simple entre plusieurs classes sans créer une
hiérarchie artificielle. Ici, une catégorie et un utilisateur doivent tous
deux afficher un nom nettoyé.

## Exécution

Depuis `lab-php` :

```bash
php pratique/03-traits/exemple.php
```

Résultat attendu :

```text
Catégorie : Électronique
Utilisateur : Oussama
```

## Lecture du code

1. `HasDisplayName` est un trait : il contient une méthode réutilisable, mais
   ce n'est pas une classe que l'on instancie directement.
2. La méthode `displayName()` utilise `trim()` pour retirer les espaces
   autour de la propriété `name`.
3. `Category` et `User` utilisent le trait avec `use HasDisplayName`.
4. Chaque constructeur reçoit son nom et le conserve dans une propriété
   privée en lecture seule.
5. Les deux objets peuvent appeler la même méthode, ce qui évite de dupliquer
   le code de nettoyage.

## Lien avec l'architecture

L'exemple est autonome. Dans Laravel, un trait de ce type pourrait être placé
dans un dossier partagé de l'application et utilisé par plusieurs modèles,
mais il ne doit contenir que des comportements réellement communs.

## Limite et exercice

Le trait dépend implicitement d'une propriété `name`. Rendez ce contrat plus
explicite en ajoutant une interface `HasName` ou en adaptant le trait à une
méthode `name()` commune.


# Exemple : traits

## Objectif

Partager une méthode de journalisation entre deux services sans copier son
code. L'exemple est autonome : `UtilisateurService` et `CommandeService`
simulent deux services d'une application.

## Fichier concerné

- `traits/exemple.php`

## Exécution

Depuis le dossier `lab-php` :

```bash
php traits/exemple.php
```

## Déroulement

1. Le trait `Journalisation` définit la méthode `journaliser()`.
2. `UtilisateurService` utilise le trait avec `use Journalisation`.
3. `CommandeService` utilise le même trait.
4. `creer()` et `enregistrer()` appellent la méthode partagée.
5. Le préfixe `[LOG]` rend les deux messages observables.

## Résultat attendu

```text
[LOG] Utilisateur créé
[LOG] Commande enregistrée
```

## Lien avec le projet

Un trait peut regrouper un comportement court et réellement commun à plusieurs
classes, comme une journalisation simple. Ici, les services sont fictifs et ne
représentent pas encore des classes intégrées au projet.

## Limite et exercice

Le message est écrit dans la sortie standard. Remplacez `echo` par une écriture
dans un fichier ou par le composant de journalisation du framework si le projet
en utilise un.

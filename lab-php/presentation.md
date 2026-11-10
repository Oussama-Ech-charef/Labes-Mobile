---
marp: true
theme: default
paginate: true
size: 16:9
---

<style>
@import url('./style.css');
</style>

<!-- _class: cover -->
<!-- _paginate: false -->

<div class="logos">
  <div class="logo ofppt" role="img" aria-label="OFPPT logo"></div>
  <div class="logo solicode" role="img" aria-label="Solicode logo"></div>
</div>

# lab-php

**Nom de l'étudiant :** Oussama Ech-charef<br>
**Nom de l'encadrant :** ES-Sarraj Fouad

---

## Plan

1. Introduction et outils
2. Définitions
3. Problème
4. Solution
5. Exemples pratiques

---

## 1. Introduction et outils

- **But :** apprendre trois notions de PHP.
- **Notions :** exceptions, namespaces et traits.
- Les exemples sont simples et autonomes.
- Ils sont proches d'un projet Laravel.
- **Version :** PHP 8.3.

### Démarrage rapide

Depuis le dossier `lab-php` :

```bash
php pratique/01-exceptions/exemple.php
```

---

## Bonjour PHP

Un premier programme PHP :

```php
<?php

echo "Bonjour PHP !" . PHP_EOL;
```

Commande :

```bash
php exemple.php
```

Résultat :

```text
Bonjour PHP !
```

---

## 2. Définitions

### Exception

Une exception indique un problème dans le programme.

### Namespace

Un namespace organise les classes.
Il évite les noms en double.

### Trait

Un trait partage une méthode entre plusieurs classes.

---

## 3. Problème

> À compléter avec le problème concret rencontré pendant le travail.

---

## 4. Solution

> À compléter avec la solution proposée par l'étudiant.

---

## 5. Exceptions

- `throw` signale un problème.
- `try` essaie une action.
- `catch` traite le problème.
- Exemple : refuser une catégorie vide.

```bash
php pratique/01-exceptions/exemple.php
```

Résultat :

```text
Catégorie créée : Produits
Création refusée : Le nom de la catégorie est obligatoire.
```

---

## Namespaces

- Ils rangent les classes.
- Deux classes peuvent avoir le même nom court.
- Exemple : `App\Models\Category`.
- Exemple : `App\Http\Resources\Category`.

```bash
php pratique/02-namespaces/exemple.php
```

---

## Traits

- Un trait contient une méthode commune.
- `Category` et `User` utilisent `displayName()`.
- Le code est écrit une seule fois.

```bash
php pratique/03-traits/exemple.php
```

---

## Exemples pratiques

Depuis le dossier `lab-php` :

```bash
php pratique/01-exceptions/exemple.php
php pratique/02-namespaces/exemple.php
php pratique/03-traits/exemple.php
```

Les explications sont dans les trois fichiers `tutoriel.md` du dossier
`pratique`.

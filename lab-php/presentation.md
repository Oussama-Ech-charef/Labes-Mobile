---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    background-color: #ffffff;
    color: #111827;
    font-family: 'Inter', system-ui, sans-serif;
    padding: 40px 60px;
  }
  h1, h2, h3 { color: #1d4ed8; letter-spacing: 0.5px; }
  pre, code { background-color: #eff6ff; color: #111827; border-radius: 6px; }
  strong, a { color: #1d4ed8; }
---

# lab-php

---

## Plan

1. Introduction
2. Problème rencontré
3. Solution proposée
4. Exceptions
5. Namespaces
6. Traits
7. Mise en pratique

---

## 1. Introduction

- **Objectif :** comprendre trois mécanismes de PHP utiles à l'organisation du
  code.
- **Notions :** exceptions, namespaces et traits.
- **Périmètre :** exemples autonomes inspirés de l'architecture Laravel.
- **Version ciblée :** PHP 8.3, comme le projet Laravel voisin.

---

## 2. Problème rencontré

> À compléter avec le problème concret rencontré pendant le travail.

---

## 3. Solution proposée

> À compléter avec la solution proposée par l'étudiant.

---

## 4. Exceptions

- Une exception signale qu'une opération ne peut pas aboutir normalement.
- `throw` transmet l'erreur.
- `try/catch` permet de traiter l'erreur à la frontière appropriée.
- Exemple : refuser une catégorie vide ou trop courte.

```bash
php pratique/01-exceptions/exemple.php
```

---

## 5. Namespaces

- Ils organisent les classes et évitent les collisions de noms.
- `App\Models\Category` et `App\Http\Resources\Category` sont deux classes
  distinctes.
- `use ... as ...` rend leur utilisation explicite.

```bash
php pratique/02-namespaces/exemple.php
```

---

## 6. Traits

- Un trait partage une implémentation entre plusieurs classes.
- `Category` et `User` réutilisent `displayName()`.
- Un trait doit rester limité à un comportement réellement commun.

```bash
php pratique/03-traits/exemple.php
```

---

## 7. Mise en pratique

Depuis `lab-php`, exécuter les trois commandes :

```bash
php pratique/01-exceptions/exemple.php
php pratique/02-namespaces/exemple.php
php pratique/03-traits/exemple.php
```

Les explications détaillées et les résultats attendus sont disponibles dans
les trois fichiers `tutoriel.md` du dossier `pratique`.


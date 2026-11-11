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

# Lab PHP

## Erreurs, namespaces et traits

<div class="logos">
  <img src="./ofppt.jpg" alt="Logo OFPPT">
  <img src="./solicode.png" alt="Logo Solicode">
</div>

**Étudiant :** Oussama Ech-charef  
**Encadrant :** ES-Sarraj Fouad

---

<!-- _class: light -->

## Plan de présentation

1. Introduction & Stack Technique
2. Définitions
3. Problème
4. Solution

---

<!-- _class: light -->

## Introduction & Stack Technique

- PHP sert à créer des applications web.
- Ce lab étudie trois notions de PHP.
- Les exemples sont exécutés avec PHP en ligne de commande.

| Outil | Version vérifiée |
|---|---:|
| PHP | 8.5.10 |
| Composer | 2.10.3 |

---

<!-- _class: light -->

## Définition : erreurs et exceptions

- Une erreur indique un problème pendant l'exécution.
- Une exception est un objet qui décrit un problème.
- `try` exécute le code à surveiller.
- `catch` traite l'exception.
- `finally` peut exécuter une action finale.

```php
<?php

try {
    throw new Exception("Exemple d'erreur");
} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
}
```

---

## Définition : namespaces

- Un namespace organise les classes.
- Il évite les conflits de noms.
- `use` permet d'importer une classe.

```php
<?php

namespace App\Demo;

class Message
{
    public function text(): string
    {
        return "Bonjour";
    }
}
```

---

<!-- _class: light -->

## Définition : traits

- Un trait contient des méthodes réutilisables.
- Une classe utilise un trait avec `use`.
- Un trait évite de copier le même code.

```php
<?php

trait LogsMessages
{
    public function log(string $message): void
    {
        echo $message . PHP_EOL;
    }
}

class Service
{
    use LogsMessages;
}
```

---

## Problèmes simulés

Ces problèmes sont pédagogiques. Ils ne décrivent pas un problème vécu dans
le projet réel.

- Un diviseur nul peut arrêter un calcul.
- Deux domaines peuvent avoir des classes portant le même nom.
- Deux services peuvent répéter le même code de journalisation.

---

<!-- _class: light -->

## Solution : erreurs et exceptions

- Vérifier le diviseur avant le calcul.
- Lancer `InvalidArgumentException` si la valeur est invalide.
- Traiter l'exception avec `try` et `catch`.

```bash
php exceptions/exemple.php
```

Résultat : `5`, puis `Erreur traitée : Le diviseur ne peut pas être zéro.`

---

## Solution : namespaces

- Placer chaque domaine dans son namespace.
- Utiliser le nom complet de la classe.
- Éviter les conflits entre `Boutique\Produit` et `Stock\Produit`.

```bash
php namespaces/exemple.php
```

Résultat : deux noms de produits différents.

---

<!-- _class: light -->

## Solution : traits

- Mettre la journalisation commune dans `Journalisation`.
- Réutiliser le trait dans deux services.
- Garder une seule méthode à maintenir.

```bash
php traits/exemple.php
```

Résultat :

```text
[LOG] Utilisateur créé
[LOG] Commande enregistrée
```

Les trois démonstrations sont autonomes. Leur intégration dans le projet réel
reste à faire après identification de son architecture.

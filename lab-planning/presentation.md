---
marp: true
theme: default
paginate: true
size: 16:9
header: "PROJET TECHNIQUE · BILLETTERIE D’ÉVÉNEMENTS"
footer: "Présentation du projet"
---

<style>
@import url("./style.css");
</style>

<!-- _class: cover -->
<!-- _paginate: false -->

<div class="logos">
  <div class="logo ofppt" role="img" aria-label="Logo OFPPT"></div>
  <div class="logo solicode" role="img" aria-label="Logo Solicode"></div>
</div>

# Billetterie d’événements

## Présentation du projet technique

**Apprenant :** Oussama Ech-charef  
**Encadrant :** ES-Sarraj Fouad

---
<!-- _class: light -->

## Plan

1. Stack technique
2. Définitions
3. Problème et besoin
4. Solution et pratique
5. Résultats et démonstration
6. Conclusion et apprentissages

Un parcours de présentation adapté à la billetterie d’événements.

---

## Stack technique

| Technologie | Rôle dans le projet |
| :--- | :--- |
| **PHP** | Traiter les données côté serveur |
| **JavaScript** | Ajouter le comportement interactif aux pages |
| **JSON** | Organiser et échanger les données |
| **Tailwind CSS** | Construire l'interface utilisateur |
| **Table de données** | Conserver les événements, catégories et organisateurs |
| **Git / GitHub** | Versionner et partager le projet |

Cette stack est présentée selon les technologies documentées pour le projet.

---
<!-- _class: light -->

## Définitions

- **Billetterie d’événements** — plateforme qui permet de gérer et d'afficher des événements.
- **Événement** — information sur une activité proposée sur la plateforme.
- **Catégorie** — classification utilisée pour organiser les événements.
- **Organisateur** — personne ou entité associée à un événement.
- **Tableau de bord** — espace qui permet de gérer les données du projet.
- **Base de données** — structure qui conserve les informations de manière organisée.

---

## Problème et besoin

### Problème

- Les informations sur les événements peuvent être dispersées.
- Il peut être difficile de trouver rapidement un événement.
- Les événements doivent être organisés par catégorie et organisateur.

### Besoin

- Regrouper les informations dans une seule plateforme.
- Ajouter et afficher les événements facilement.
- Organiser les événements avec des catégories et des organisateurs.

---
<!-- _class: light -->

## Solution · architecture

### Structure des données

```text
Organisateur → Événement ← Catégorie
```

- **Événement** — contient les informations de l'événement.
- **Catégorie** — permet de classer les événements.
- **Organisateur** — représente l'organisateur de l'événement.

Cette organisation relie chaque événement à une catégorie et à un organisateur.

---

## Solution · étapes et pratique

1. Définir le besoin de la billetterie d’événements.
2. Organiser les données autour des trois tables.
3. Préparer l'interface du tableau de bord.
4. Ajouter une catégorie depuis le tableau de bord.
5. Afficher les catégories enregistrées.
6. Préparer l'ajout et l'affichage des événements.

### Fonctionnalité démontrée

Le tableau de bord permet actuellement **d'ajouter et de voir les catégories**.

---
<!-- _class: light -->

## Résultats et démonstration

### Résultats réalisés

- Les catégories peuvent être ajoutées depuis le tableau de bord.
- Les catégories ajoutées peuvent être affichées.
- Les données du projet sont organisées autour de trois tables.

### Vérification

| Action | Résultat attendu |
| :--- | :--- |
| Ajouter une catégorie | La catégorie est enregistrée |
| Ouvrir la liste des catégories | La catégorie apparaît dans le tableau de bord |
| Vérifier la structure | Les tables sont `Événement`, `Catégorie` et `Organisateur` |

---

## Conclusion et apprentissages

### Bilan

- Le besoin d'une plateforme centralisée est clairement défini.
- La structure des données du projet est identifiée.
- La gestion des catégories est réalisée dans le tableau de bord.
- La présentation relie le besoin, la solution et la démonstration.

### Améliorations possibles

- Ajouter et afficher les événements.
- Ajouter la gestion des organisateurs.
- Ajouter une recherche ou des filtres.

---
<!-- _class: light -->

## Conseils de présentation

### Avant

- Préparer une catégorie de démonstration.
- Vérifier son ajout et son affichage dans le tableau de bord.
- Préparer une explication simple des trois tables.

### Pendant

- Présenter le besoin avant les détails techniques.
- Montrer la relation entre événement, catégorie et organisateur.
- Démontrer une fonctionnalité réellement disponible.
- Distinguer les fonctionnalités réalisées des améliorations futures.

**Repère :** 15 à 20 minutes, selon les consignes.

---

## À retenir

- La billetterie d’événements centralise les informations des événements.
- Le projet utilise les notions d'événement, catégorie et organisateur.
- Le tableau de bord permet d'ajouter et d'afficher les catégories.
- La structure des données suit la relation :
  `Organisateur → Événement ← Catégorie`.
- Les prochaines étapes concernent la gestion complète des événements.

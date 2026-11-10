---
name: marp
description: "Rédiger, structurer ou corriger des présentations Marp en Markdown, avec des diapositives lisibles et un frontmatter valide."
---

# Présentations Marp

Utiliser cette skill pour créer ou modifier un fichier de présentation Marp (`.md`).

## Structure

- Commencer par un frontmatter YAML valide avec `marp: true`, un thème, la pagination et le format `16:9`.
- Séparer chaque diapositive par `---`.
- Pour un lab, suivre cet ordre :
  1. Titre du lab et identification de l'étudiant et de l'encadrant.
  2. Plan de présentation.
  3. Introduction et stack technique.
  4. Définitions des notions clés.
  5. Problème réel fourni par l'étudiant.
  6. Solution et démonstrations; ajouter des diapositives pratiques si nécessaire.
- Pour le plan d'un lab, utiliser les rubriques : Introduction & Stack Technique, Définitions, Problème, Solution.
- Ne pas ajouter de conclusion ou de remerciements; terminer par la solution ou le livrable.
- Rédiger le contenu en français niveau A1, avec des phrases courtes et des mots simples.
- Garder le contenu des slides dans `presentation.md` et le design dans `style.css`.
- Ajouter toujours cet import CSS dans `presentation.md` et ne pas le supprimer ni le modifier :

  ```html
  <style>
  @import url('./style.css');
  </style>
  ```

- Créer un design simple, moderne et professionnel dans `style.css`, sans placer le CSS directement dans `presentation.md`.
- Ajouter les logos OFPPT et Solicode dans la première slide, avec la classe `cover`, en utilisant les images disponibles dans le dossier du lab.
- Ajouter toujours dans la première slide : **Étudiant :** Oussama Ech-charef et **Encadrant :** ES-Sarraj Fouad.
- Préserver le design existant lors d'une modification, sauf demande explicite de changement visuel.

### Design de référence

- Utiliser un design CSS simple, moderne et professionnel.
- Créer `style.css` avec cette identité visuelle comme base :
  - fond clair : `#f7f9fc` ;
  - texte : `#173050` ;
  - bleu principal : `#164b89` ;
  - rouge secondaire : `#d44352` ;
  - police : `Segoe UI`, Arial, sans-serif.
- Garder des titres clairs, des tableaux simples avec des couleurs alternées et
  des blocs de code faciles à lire.
- Garder la même identité visuelle dans toutes les présentations et adapter
  les styles au contenu sans la perdre.
- Ne pas utiliser Bootstrap ni Tailwind CSS.

## Exactitude et contenu

- Rédiger en français et adapter le contenu aux sources du lab.
- Ne pas inventer le problème ou la solution de l'étudiant. Lui demander ces informations avant de rédiger les diapositives correspondantes; à défaut, laisser des emplacements explicites à compléter.
- Pour un lab technique, inclure un Quick Start et un Hello World fonctionnel. Déclarer le langage de chaque bloc de code et vérifier que les commandes et exemples correspondent à l'environnement réel.
- Expliquer clairement les termes techniques; ne pas présumer que le public les connaît.

## Lisibilité

- Maintenir une hiérarchie visuelle cohérente, un contraste suffisant et une quantité de texte adaptée à chaque diapositive.
- Alterner les diapositives sombres et claires lorsque le thème le permet; utiliser `<!-- _class: light -->` pour une diapositive claire.
- Déclarer le langage des blocs de code (`bash`, `php`, `html`, etc.) et aligner explicitement les colonnes des tableaux Markdown.
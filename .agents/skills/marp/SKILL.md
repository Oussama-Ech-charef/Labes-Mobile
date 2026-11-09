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

## Exactitude et contenu

- Rédiger en français et adapter le contenu aux sources du lab.
- Ne pas inventer le problème ou la solution de l'étudiant. Lui demander ces informations avant de rédiger les diapositives correspondantes; à défaut, laisser des emplacements explicites à compléter.
- Pour un lab technique, inclure un Quick Start et un Hello World fonctionnel. Déclarer le langage de chaque bloc de code et vérifier que les commandes et exemples correspondent à l'environnement réel.
- Expliquer clairement les termes techniques; ne pas présumer que le public les connaît.

## Lisibilité

- Maintenir une hiérarchie visuelle cohérente, un contraste suffisant et une quantité de texte adaptée à chaque diapositive.
- Alterner les diapositives sombres et claires lorsque le thème le permet; utiliser `<!-- _class: light -->` pour une diapositive claire.
- Déclarer le langage des blocs de code (`bash`, `php`, `html`, etc.) et aligner explicitement les colonnes des tableaux Markdown.
# Event Ticketing

## Sujet du projet

<!-- Event Ticketing est une plateforme pour les événements. -->

**Event Ticketing** est une plateforme pour gérer et afficher des événements. Elle met les informations des événements dans *un seul endroit*.

Le projet concerne ~~seulement les catégories~~ les événements, les catégories et les organisateurs.

- **Event :** information sur un événement
- **Category :** la catégorie de l'événement
- **Organizer :** l'organisateur de l'événement



> Event Ticketing aide les personnes à voir les événements.

---

## Objectif du projet

<!-- Le but est de trouver les événements facilement. -->

Le but est d'ajouter et de voir les événements facilement.

1. Ajouter un événement.
2. Afficher les événements.
3. Ajouter et voir les catégories sur le tableau de bord.

### Tâches du projet

- [x] Ajouter les catégories au tableau de bord.
- [x] Afficher les catégories sur le tableau de bord.
- [ ] Ajouter et afficher les événements.

### Base de données

| Table | Information |
| --- | --- |
| Event | Événements |
| Category | Catégories |
| Organizer | Organisateurs |

La base de données a trois tables. Une table est `Category`.

```text
Organizer → Event ← Category
```

Pour apprendre Markdown, lis le [guide Markdown](https://www.markdownguide.org/).




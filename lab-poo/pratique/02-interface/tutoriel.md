# Exemple 2 : interface

## Objectif

Définir un contrat commun pour tout objet qui doit être exporté.

## Exécution

Depuis `lab-poo` :

```bash
php pratique/02-interface/exemple.php
```

Résultat attendu :

```text
{"id":1,"name":"Électronique"}
```

## Lecture du code

1. `Exportable` est une interface : elle déclare la méthode obligatoire
   `export()`, sans fournir son implémentation.
2. `Category implements Exportable` promet de respecter ce contrat. PHP
   signale une erreur si la classe n'implémente pas `export()`.
3. Les propriétés privées protègent l'identifiant et le nom de la catégorie.
4. `json_encode()` transforme les données en JSON. L'option
   `JSON_THROW_ON_ERROR` demande à PHP de signaler explicitement une erreur
   d'encodage.
5. Le code appelant peut utiliser `export()` sans connaître les détails de la
   classe `Category`.

## Lien avec l'architecture

L'exemple est autonome. Dans Laravel, un tel contrat peut être partagé par
des services d'export CSV, JSON ou API, avec une implémentation différente
pour chaque besoin.

## Limite et exercice

Créez une classe `User` qui implémente aussi `Exportable`, puis exportez-la
avec les mêmes appels.

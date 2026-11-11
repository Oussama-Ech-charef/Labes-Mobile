# Exemple : erreurs et exceptions

## Objectif

Éviter qu'une division par zéro arrête le programme sans explication.
Cet exemple est autonome : il simule une validation d'entrée avant un calcul.
Il n'est pas encore intégré à une application réelle du projet.

## Fichier concerné

- `exceptions/exemple.php`

## Exécution

Depuis le dossier `lab-php` :

```bash
php exceptions/exemple.php
```

## Déroulement

1. `diviser()` reçoit deux nombres et annonce un résultat `float`.
2. Le test `if` vérifie si le diviseur vaut `0.0`.
3. Dans ce cas, `throw` crée une `InvalidArgumentException` avec un message clair.
4. Le premier appel (`10 / 2`) affiche `5`.
5. Le second appel déclenche l'exception.
6. Le bloc `catch` récupère l'exception et affiche son message au lieu de laisser
   le programme échouer silencieusement.

## Résultat attendu

```text
5
Erreur traitée : Le diviseur ne peut pas être zéro.
```

## Lien avec le projet

Dans une application réelle, la même idée peut valider une donnée reçue par un
formulaire ou un service avant de continuer le traitement. Ici, le cas est
seulement simulé pour montrer la frontière entre validation et traitement.

## Limite et exercice

L'exemple ne vérifie pas les données provenant d'un formulaire. Ajoutez une
fonction qui valide aussi une valeur non numérique avant l'appel à `diviser()`.

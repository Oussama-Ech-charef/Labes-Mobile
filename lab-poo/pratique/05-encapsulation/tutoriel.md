# Exemple 5 : encapsulation

## Objectif

Protéger l'état interne d'une catégorie et imposer une règle de validation
lorsque son nom est créé ou modifié.

## Exécution

Depuis `lab-poo` :

```bash
php pratique/05-encapsulation/exemple.php
```

Résultat attendu :

```text
Catégorie : Accessoires
```

## Lecture du code

1. La propriété `name` est `private` : du code extérieur ne peut pas la
   modifier directement.
2. Le constructeur délègue la validation à `rename()`, ce qui évite de
   maintenir deux règles différentes.
3. `rename()` nettoie la valeur avec `trim()` et refuse un nom vide en
   lançant une exception.
4. `name()` est un accesseur en lecture seule pour exposer la valeur validée.
5. Toute modification passe par `rename()`, donc l'objet conserve toujours un
   état cohérent.

## Lien avec l'architecture

La démonstration est autonome, mais cette règle pourrait être placée dans un
modèle ou un objet métier Laravel selon l'architecture retenue.

## Limite et exercice

Ajoutez une longueur minimale et testez le comportement avec un nom invalide
dans un bloc `try/catch`.

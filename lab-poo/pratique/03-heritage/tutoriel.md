# Exemple 3 : héritage

## Objectif

Réutiliser les propriétés et le comportement d'une classe parent dans une
classe spécialisée.

## Exécution

Depuis `lab-poo` :

```bash
php pratique/03-heritage/exemple.php
```

Résultat attendu :

```text
Utilisateur : Oussama (administrateur)
```

## Lecture du code

1. `User` définit la donnée commune `name` et la méthode `label()`.
2. La propriété `protected` reste inaccessible depuis l'extérieur, mais elle
   peut être utilisée par une classe fille.
3. `Administrator extends User` récupère le constructeur et la propriété du
   parent.
4. La méthode `label()` est redéfinie pour ajouter la précision du rôle.
5. `parent::label()` appelle la version de la classe `User`, ce qui évite de
   recopier son message.

## Lien avec l'architecture

Cette démonstration autonome représente une relation possible entre un
utilisateur standard et un administrateur. Elle ne modifie pas le modèle
`User` de Laravel.

## Limite et exercice

Ajoutez une classe `Editor` et donnez-lui un libellé spécifique sans dupliquer
le constructeur.

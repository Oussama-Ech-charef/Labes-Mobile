# Exemple 4 : polymorphisme

## Objectif

Appeler une même méthode sur des objets différents et obtenir un résultat
adapté à leur classe réelle.

## Exécution

Depuis `lab-poo` :

```bash
php pratique/04-polymorphisme/exemple.php
```

Résultat attendu :

```text
E-mail envoyé à client@example.com : Votre commande est prête.
SMS envoyé à +212600000000 : Votre commande est prête.
```

## Lecture du code

1. `Notification` fixe la donnée commune et le contrat `send()`.
2. `EmailNotification` et `SmsNotification` implémentent `send()` avec un
   canal différent.
3. Le tableau est typé comme une liste de `Notification` : chaque objet peut
   être manipulé par son contrat commun.
4. La boucle appelle toujours `$notification->send(...)`. PHP choisit
   automatiquement l'implémentation de l'objet courant.

## Lien avec l'architecture

L'exemple est autonome et simule l'envoi d'une notification de commande.
Dans un projet Laravel, le même principe peut permettre de remplacer un
canal d'envoi sans changer le code qui déclenche la notification.

## Limite et exercice

Ajoutez une notification `PushNotification` et vérifiez que la boucle n'a pas
besoin d'être modifiée.

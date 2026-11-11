<?php

trait Journalisation
{
    public function journaliser(string $message): void
    {
        echo '[LOG] ' . $message . PHP_EOL;
    }
}

class UtilisateurService
{
    use Journalisation;

    public function creer(): void
    {
        $this->journaliser('Utilisateur créé');
    }
}

class CommandeService
{
    use Journalisation;

    public function enregistrer(): void
    {
        $this->journaliser('Commande enregistrée');
    }
}

(new UtilisateurService())->creer();
(new CommandeService())->enregistrer();

<?php

declare(strict_types=1);

abstract class Notification
{
    public function __construct(
        protected readonly string $recipient,
    ) {
    }

    abstract public function send(string $message): string;
}

final class EmailNotification extends Notification
{
    public function send(string $message): string
    {
        return "E-mail envoyé à {$this->recipient} : {$message}";
    }
}

final class SmsNotification extends Notification
{
    public function send(string $message): string
    {
        return "SMS envoyé à {$this->recipient} : {$message}";
    }
}

/** @var Notification[] $notifications */
$notifications = [
    new EmailNotification('client@example.com'),
    new SmsNotification('+212600000000'),
];

foreach ($notifications as $notification) {
    echo $notification->send('Votre commande est prête.') . PHP_EOL;
}

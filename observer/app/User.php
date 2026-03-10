<?php

namespace App;


use SplSubject;

class User implements \SplObserver
{
    // Hors exercice mais notable:
    // Promotion du constructeur: https://www.php.net/manual/fr/language.oop5.decon.php#language.oop5.decon.constructor.promotion
    public function __construct(
        private string $name,
        private bool $notified = false
    ) {}


    public function isNotified(): bool
    {
        return $this->notified;
    }

    public function update(SplSubject $subject): void{
        echo $this->name . " Une date à été mise à jour !" . "<br>";
        $this->notified = true;
    }
}
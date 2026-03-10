<?php

namespace App;

class MusicBand implements \SplSubject
{
    private $_observers = [];
    private $_name;
    private $_concerts = [];
    // Hors exercice mais notable:
    // Promotion du constructeur: https://www.php.net/manual/fr/language.oop5.decon.php#language.oop5.decon.constructor.promotion
    public function __construct(
        private string $name,
        private array $concerts = []
    ) {
        $this->_observers = new \SplObjectStorage();
        $this->_name = $name;
        $this->_concerts = [];
    }


    public function addNewConcertDate(string $date, string $location):void
    {
        $this->concerts = [
            'date' =>  $date,
            'location' => $location
        ];
        $this->notify();
    }

    public function attach(\SplObserver $observer): void
    {
        $this->_observers->attach($observer);
    }

    public function detach(\SplObserver $observer): void
    {
        $this->_observers->detach($observer);
    }

    public function notify(): void
    {
        foreach ($this->_observers as $observer) {
            $observer->update($this);
        }
    }
}
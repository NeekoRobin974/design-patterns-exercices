<?php
namespace App;

class OLEDscreen implements Computer{
    protected $laptop;

    public function __construct(Laptop $laptop){
        $this->laptop = $laptop;
    }

    public function getPrice(): int{
        return $this->laptop->getPrice() + 100;
    }

    public function getDescription(): string{
        return $this->laptop->getDescription() . " avec écran OLED pour de belles couleurs";
    }
}
<?php
namespace App;

class GPU implements Computer{
    protected $laptop;

    public function __construct(Laptop $laptop){
        $this->laptop = $laptop;
    }

    public function getPrice(): int{
        return $this->laptop->getPrice() + 200;
    }

    public function getDescription(): string{
        return $this->laptop->getDescription() . " avec un belle carte graphique pas chère";
    }
}
<?php

namespace Test;

use App\GPU;
use App\OLEDscreen;
use PHPUnit\Framework\TestCase;

use App\Laptop;

class ComputerDecoratorTest extends TestCase
{
    public function testBasicLaptop()
    {
        $laptop = new Laptop();
        
        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());
    }

    public function testLaptopWithGPU()
    {
        $laptop = new Laptop();
        $laptopGPU = new GPU($laptop);
        $this->assertSame(600, $laptopGPU->getPrice());
        $this->assertSame("A laptop computer avec un belle carte graphique pas chère", $laptopGPU->getDescription());
    }

    public function testLaptopWithOLEDScreen()
    {
        $laptop = new Laptop();
        $laptopOLED = new OLEDscreen($laptop);
        $this->assertSame(500, $laptopOLED->getPrice());
        $this->assertSame("A laptop computer avec écran OLED pour de belles couleurs", $laptopOLED->getDescription());
    }
}
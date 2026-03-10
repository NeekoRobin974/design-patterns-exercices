<?php

# TODO: Créer une classe Config en Singleton

namespace App;

class Config{
    private static $instance;
    private $settings = [];

    private function __construct(){
        $this->settings = require('../config/config.php');
    }

    public static function getInstance(): Config{
        if (!self::$instance) {
            self::$instance = new Config();
        }
        return self::$instance;
    }

    public function get(){
        return $this->settings['apiKey'];
    }
}
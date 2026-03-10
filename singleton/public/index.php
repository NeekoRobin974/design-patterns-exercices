<?php
require('../vendor/autoload.php');


# TODO: Récuperer une instance de Config
# Afficher une valeur contenu dans config.php
# Récupérer une seconde instance de Config et vérifié que les deux instances sont identiques

use App\Config;

$config1 = Config::getInstance();
echo "API Key: " . $config1->get() . "<br>";

$config2 = Config::getInstance();
if ($config1 === $config2) {
    echo "Instances identiques";
} else {
    echo "Instances différentes.";
}
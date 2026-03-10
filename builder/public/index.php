<?php
require('../vendor/autoload.php');


# TODO: Creer un QueryBuilder
# Ecrire une requête en chainant des methodes
# Afficher la requête

$queryBuilder = (new \App\MySQLQueryBuilder())
    ->select(['testselect'])
    ->from('test')
    ->build();
echo $queryBuilder . "<br>";

$queryBuilder = (new \App\MySQLQueryBuilder())
    ->select(['testselect', 'testselect2'])
    ->from('test')
    ->where('testfield', '=', 'testvalue')
    ->build();
echo $queryBuilder . "<br>";
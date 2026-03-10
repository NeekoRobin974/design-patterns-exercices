<?php

# TODO: Créer une classe QueryBuilder en utilisant le design pattern Builder

namespace App;

interface QueryBuilderInterface{
    public function select(array $fields): self;
    public function from(string $table): self;
    public function where(string $fields, string $operator, $values): self;
    public function build();
}
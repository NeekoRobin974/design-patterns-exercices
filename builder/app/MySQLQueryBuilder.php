<?php

namespace App;

class MySQLQueryBuilder implements QueryBuilderInterface {
    private string $table;
    private array $fields;
    private array $conditions;

    public function select(array $fields): self{
        $this->fields = $fields;
        return $this;
    }

    public function from(string $table): self{
        $this->table = $table;
        return $this;
    }

    public function where(string $fields, string $operator, $values): self{
        $this->conditions[] = "$fields $operator '$values'";
        return $this;
    }

    public function build(): string{
        $fields = implode(', ', $this->fields);
        $query = "SELECT $fields FROM $this->table";
        if (!empty($this->conditions)) {
            $conditions = implode(' AND ', $this->conditions);
            $query .= " WHERE $conditions";
        }
        return $query;
    }
}
<?php

namespace Core;

class Select {

    private string $tableName = '';
    private array $fields = [];

    public function setTableName(string $name):void {
    $this->tableName = $name;
    }

    public function setFields(array $fields):void {
    $this->fields = $fields;
    }

    private function getFields():string {
    
        if(empty($this->fields)){
                return '*';
        }

        return implode(', ', $this->fields);
    }

    public function buildQuery():string {
        $query = 'SELECT ';
        $query.= $this->getFields();

        $query.= ' FROM '.$this->tableName;

        return $query;
    }

    public function execute():array {

        $dbh = new \PDO('mysql:host=localhost;dbname=testBase', 'root', 'root');

        $query = $this->buildQuery();

        $sth = $dbh->query($query);
        $rows = $sth->fetchAll(\PDO::FETCH_ASSOC);

        return $rows;

    }

}
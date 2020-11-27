<?php

class QueryBuilder

{
    //this is what the class depends on, what it needs to work
    
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoClass)
    {
        $statement = $this->pdo->prepare("select * from $table");

        $statement->execute();
    
        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }

}
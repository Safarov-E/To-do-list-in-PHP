<?php
    class QueryBuilder {
        public $pdo;
        function __construct() {
            $this->pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
        }
        function all($table) {
            $statement = $this->pdo->prepare("SELECT * FROM  $table");
            $statement->execute();
            return $statement->fetchAll(2);
        }
        function getOne($table, $id) {
            $statement = $this->pdo->prepare("SELECT * FROM $table WHERE id=:id");
            $statement->bindParam(":id", $id);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_ASSOC);
        }
        function delete($table, $id) {
            $statement = $this->pdo->prepare("DELETE FROM $table WHERE id=:id");
            $statement->bindParam(":id", $id);
            $statement->execute();
        }
        function store($table, $data) {
            $keys = array_keys($data);
            $stringOfKeys = implode(',', $keys);
            $placeholders = ":" . implode(', :', $keys);
            $statement = $this->pdo->prepare("INSERT INTO $table ($stringOfKeys) VALUES ($placeholders)");
            $statement->execute($data);
        }
        function updateTask($data) {
            $statement = $this->pdo->prepare("UPDATE tasks SET title=:title, content=:content WHERE id=:id");
            $statement->execute($data);
        }
    }
?>
<?php

class Database
{
    private ?PDO $pdo;

    public function __construct(string $host, string $dbname, string $user, string $password)
    {
        $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function __destruct()
    {
        $this->pdo = null;
    }

    public function getProducts()
    {
        $sql = "SELECT * FROM Products";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Products');

        return $stmt->fetchAll();
    }

    public function getUsers()
    {
        $sql = "SELECT * FROM Users";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Users');

        return $stmt->fetchAll();
    }
}
<?php


require_once 'Database.php';

$database = new Database('127.0.0.1', 'grupa_s', 'root', '');

var_dump($database->getProducts());


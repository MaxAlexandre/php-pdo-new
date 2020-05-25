<?php

use Alura\Pdo\Infraestructure\Persistence\ConnectionCreator;

$pdo = ConnectionCreator::createConnection();

echo 'Conectado!';


$pdo->exec("CREATE TABLE  students (id INTEGER PRIMARY KEY, name varchar(250), birth_date date );");

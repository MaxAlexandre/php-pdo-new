<?php


namespace Alura\Pdo\Infraestructure\Persistence;


use PDO;

class ConnectionCreator
{
    public static function createConnection(): PDO
    {
       $connection = new PDO('mysql:host=localhost;dbname=pdo', 'root', 'root');
       $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

       return $connection;
    }
}

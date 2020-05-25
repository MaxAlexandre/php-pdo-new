<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infraestructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$student = new Student(null,'Mark Dacascos', new DateTimeImmutable('1985-12-09'));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name,:birth_date);";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(':name',$student->name());
$statement->bindValue(':birth_date',$student->birthDate()->format('Y-m-d'));

if ($statement->execute()){
    echo "Aluno incluído com sucesso!";
}


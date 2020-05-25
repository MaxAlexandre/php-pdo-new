<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infraestructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infraestructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$studentRepository = new PdoStudentRepository($connection);

// realizo processos de definição da turma

$connection->beginTransaction();
try {
    $aStudent = new Student(
        null,
        'Beto Jamaica',
        new DateTimeImmutable('1989-05-23'),
    );
    $studentRepository->save($aStudent);

    $anotherStudent = new Student(
        null,
        'Alex Kidd',
        new DateTimeImmutable('1989-05-23'),
    );
    $studentRepository->save($anotherStudent);
    $connection->commit();

} catch (\PDOException $e) {
    echo $e->getMessage();
    $connection->rollBack();
}


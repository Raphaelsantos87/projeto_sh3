<?php



try {
    $pdo = new PDO('mysql:host=localhost;dbname=avaliacao', 'root', 'root');
} catch (PDOException $e) {
    echo $e->getMessage();
}

<?php

include_once('Conexion.php');

try {
    $pdo = conectar();
    //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("INSERT INTO Tarea(title, descripcion) VALUES (:title, :desc)");

    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':desc', $descripcion);

    $title = $_REQUEST['title'];
    $descripcion = $_REQUEST['descripcion'];
    $stmt->execute();

    header('Location: listaTareas.php');

}catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
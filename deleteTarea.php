<?php

include_once('Conexion.php');

try {
    $pdo = conectar();


    $stmt = $pdo->prepare("DELETE FROM Tarea WHERE id=:id");

    $stmt->bindParam(':id', $id);

    $id = $_REQUEST['id'];
    $stmt->execute();

    header('Location: listaTareas.php');

}catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
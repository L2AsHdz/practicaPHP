<?php

function conectar() {
    try {
        $conn = new PDO('mysql:host=localhost;dbname=TareasDB', 'userDB', '123');
        return $conn;
    } catch (PDOException $pe) {
        echo "No se pudo conectar: " . $pe->getMessage();
    }
}
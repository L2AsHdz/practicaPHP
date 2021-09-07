<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TareasApp</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
<div>
    <ul>
        <li><a href="index.php">Agregar tarea</a></li>
        <li><a href="listaTareas.php">Ver tareas</a></li>
    </ul>

    <h3>Lista de tareas</h3>
    <?php

        include_once('Conexion.php');

        try {

            $pdo = conectar();

            $stmt = $pdo->prepare("SELECT id, title, descripcion FROM Tarea");
            $stmt->execute();

        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

    ?>

    <table class= "container size-container">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while (($result = $stmt->fetch()) !== false): ?>
                <tr>
                    <td><?php echo $result[0]; ?></td>
                    <td><?php echo $result[1]; ?></td>
                    <td><?php echo $result[2]; ?></td>
                    <td><a onclick="confirm('Esta seguro de borrar esta tarea?');" href="deleteTarea.php?id=<?php echo $result[0]; ?>"><i class="fas fa-trash"></i> Eliminar</a></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
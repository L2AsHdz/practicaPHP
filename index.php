<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TareasApp</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <ul>
        <li><a href="index.php">Agregar tarea</a></li>
        <li><a href="listaTareas.php">Ver tareas</a></li>
    </ul>

    <h3>Agregar nueva tarea</h3>

    <div class="container size-container">
        <form id="formulario" action="createTarea.php" method="post">
            <label for="title">Titulo de la tarea:</label>
            <input type="text" id="title" name="title" placeholder="Titulo de la tarea">
            <label for="descripcion">Descripcion:</label><br>
            <textarea id="descripcion" name="descripcion" placeholder="Descripcion de la tarea" rows="5" cols="21"></textarea><br><br>
            <button type="submit" class="button">Agregar</button>
        </form>
    </div>

    <script src="validaciones.js"></script>
</body>

</html>
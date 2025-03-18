<?php include 'conexion.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Jugador</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <h1>Agregar Nuevo Jugador</h1>
        <form action="" method="post" class="formulario">
            <label for="jugador">Nombre de Jugador</label>
            <input type="text" name="jugador" required>
            <label for="estatura">Estatura (m)</label>
            <input type="text" name="estatura">
            <label for="posicion">Posición</label>
            <input type="text" name="posicion" required>
            <label for="numero">Número</label>
            <input type="number" name="numero" min="1" max="99" required>
            <button type="submit" class="btn">Guardar</button>
        </form>
        <a href="index.php" class="btn btn-back">Volver</a>

        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $jugador = $_POST['jugador'];
                $estatura = $_POST['estatura'];
                $posicion = $_POST['posicion'];
                $numero = $_POST['numero'];

                $insertar = $conexion->prepare(
                    'INSERT INTO tblJugadores (jugador, estatura, posicion, numero) VALUES (?, ?, ?, ?)'
                );
                $insertar->bind_param('ssss', $jugador, $estatura, $posicion, $numero);
                
                if ($insertar->execute()) {
                    echo "<p class='mensaje'>Jugador agregado correctamente.</p>";
                    header("refresh:1;url=index.php");
                } else {
                    echo "<p class='mensaje error'>Error al agregar el jugador.</p>";
                }
            }
        ?>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
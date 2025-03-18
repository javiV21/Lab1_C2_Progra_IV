<?php 
include 'conexion.php'; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $resultado = $conexion->query("SELECT * FROM tblJugadores WHERE id=$id");
    $jugadorData = $resultado->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jugador = $_POST['jugador'];
    $estatura = $_POST['estatura'];
    $posicion = $_POST['posicion'];
    $numero = $_POST['numero'];

    $actualizar = $conexion->prepare(
        "UPDATE tblJugadores SET jugador=?, estatura=?, posicion=?, numero=? WHERE id=?"
    );
    $actualizar->bind_param('ssssi', $jugador, $estatura, $posicion, $numero, $id);

    if ($actualizar->execute()) {
        echo "<p class='mensaje'>Jugador actualizado correctamente.</p>";
        header("refresh:1;url=index.php");
    } else {
        echo "<p class='mensaje error'>Error al actualizar el jugador.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Jugador</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <h1>Modificar Jugador</h1>
        <form action="" method="post" class="formulario">
            <label for="jugador">Nombre de Jugador</label>
            <input type="text" name="jugador" value="<?php echo $jugadorData['jugador']; ?>" required>
            <label for="estatura">Estatura (m)</label>
            <input type="text" name="estatura" value="<?php echo $jugadorData['estatura']; ?>" required>
            <label for="posicion">Posición</label>
            <input type="text" name="posicion" value="<?php echo $jugadorData['posicion']; ?>" required>
            <label for="numero">Número</label>
            <input type="number" name="numero" min="1" max="99" value="<?php echo $jugadorData['numero']; ?>" required>
            <button type="submit" class="btn">Actualizar</button>
        </form>
        <a href="index.php" class="btn btn-back">Volver</a>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugadores del Real Madrid</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>        
        <table>
            <thead>
                <tr>
                    <th>Jugador</th>
                    <th>Número</th>
                    <th>Posición</th>
                    <th>Estatura</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $result = $conexion->query("SELECT * FROM tblJugadores");
                    while ($fila = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$fila['jugador']}</td>
                                <td>{$fila['numero']}</td>
                                <td>{$fila['posicion']}</td>
                                <td>{$fila['estatura']} m</td>
                                <td>
                                    <a href='modificar.php?id={$fila['id']}' class='btn btn-edit'>Modificar</a>
                                    <a href='eliminar.php?id={$fila['id']}' class='btn btn-delete'>Eliminar</a>
                                </td>
                            </tr>";
                    }
                ?>
            </tbody>
        </table>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
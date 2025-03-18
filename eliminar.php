<?php include 'conexion.php'; 
include 'header.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    echo "<script>
        var confirmacion = confirm('¿Estás seguro de que deseas eliminar este jugador?');
        if (confirmacion) {
            window.location.href = 'eliminar.php?confirmar=1&id=$id';
        } else {
            window.location.href = 'index.php';
        }
    </script>";
}

if(isset($_GET['confirmar']) && $_GET['confirmar'] == 1 && isset($_GET['id'])){
    $id = $_GET['id'];
    $conexion->query("DELETE FROM tblJugadores WHERE id=$id");
    header("Location: index.php");
    exit();
}
include 'footer.php' ?>
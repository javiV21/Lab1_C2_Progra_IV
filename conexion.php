<?php
    $conexion = mysqli_connect(
        "localhost","root","","real_madrid");
    if(mysqli_connect_errno()){
        die("Error: ".mysqli_connect_error());
    }
?>
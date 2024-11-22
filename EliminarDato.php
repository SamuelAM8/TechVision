<?php
    include_once('Conexion.php');

    $Id = $_REQUEST['Id'];
    $sql = "DELETE FROM ideas WHERE Id = '$Id'";
    $query = mysqli_query($conexion, $sql);

    if ($query) {
        header('location: Crud.php');
    }
?>
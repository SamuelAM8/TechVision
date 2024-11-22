<?php 

    include_once("Conexion.php");

    $Id = $_POST['Id'];
    $Tema = $_POST['Tema'];
    $Descripcion = $_POST['Descripcion'];
  
    $sql = "UPDATE ideas SET Id='$Id', Tema ='$Tema ',  Descripcion=' $Descripcion' WHERE Id='$Id'";

    $query = mysqli_query($conexion, $sql);

    if ($query) {
        header('Location:Crud.php');
    }

?>
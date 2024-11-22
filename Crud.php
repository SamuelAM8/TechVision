<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ideas para la apertura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
</head>

<body>
    <h1 class="bg-warning p-2 text-white text-center">IDEAS PARA LA APERTURA DE NUESTRA PÁGINA!!!</h1>
    <a href="Index.php" class="btn btn-danger">Regresar</a>
    <br>
    
    <br>
    <div class="container bg-light p-3 border border-dark rounded">
        <h1>Lista de Ideas</h1>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Tema</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Opciones</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php
                include("Conexion.php");

                $sql = "SELECT * FROM ideas";
                $query = mysqli_query($conexion, $sql);

                while ($fila = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $fila['Id']?></th>
                        <th scope="row"><?php echo $fila['Tema']?></th>
                        <th scope="row"><?php echo $fila['Descripcion']?></th>
                        
                        <th scope="row">
                            <a href="EditarDato.php?Id=<?php echo $fila['Id']?>" class="btn btn-warning">Edita la idea</a>
                            <a href="EliminarDato.php?Id=<?php echo $fila['Id']?>" class="btn btn-danger">Descarta la idea</a>
                        </th>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
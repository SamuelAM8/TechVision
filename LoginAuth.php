<?php

    session_start();

    include_once('Conexion.php');

     if (isset($_POST['Usuario']) && isset($_POST['Clave'])) {
        
        function Validar($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }

        $Usuario = Validar($_POST['Usuario']);
        $Clave = Validar($_POST['Clave']);

        if (empty($Usuario)) {
            header('location: iniciosesion.php?error=El usuario es requerido');
            exit();
        }elseif (empty($Clave)) {
            header('location: iniciosesion.php?error=La clave es requerida');
            exit();
        }else {
           // $clave=md5($clave)
            $Sql = "SELECT * FROM usuarios WHERE Usuario = '$Usuario' AND Clave='$Clave'";
            $result = mysqli_query($conexion, $Sql);

            if (mysqli_num_rows($result)===1) {
                $row = mysqli_fetch_assoc($result );
                if($row['Usuario']===$Usuario && $row['Clave']===$Clave){

                    $_SESSION['Usuario'] = $row['Usuario'];
                    $_SESSION['Nombre_Completo'] = $row['Nombre_Completo'];
                    $_SESSION['Id'] = $row['Id'];
                    header("location:Crud.php");
                        exit();
                }else {
                        header("Location:iniciosesion.php?error=Usuario o clave incorrecta");
                        exit();
                    }
                    
                }else {
                    header("Location:iniciosesion.php?error=Usuario o clave incorrecta");
                    exit();


                }  }}
            else {
                header("Location:Index.php");
                exit();
            }
        
        
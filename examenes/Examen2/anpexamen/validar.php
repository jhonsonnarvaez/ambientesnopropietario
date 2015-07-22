<?php

   $conn = new mysqli($host, $usuario, $contrasena, $bdd);
       
       $usua=$_POST['usuario'];
       $contra = $_POST['contrasena'];
       
       $consulta = "SELECT * FROM examen WHERE usuario = '$usua' AND contrasena = '$contra'";
       if(mysqli_num_rows($consulta)>0){
           $row = mysqli_fetch_array($consulta);
           $_SESSION['usuario'] = $row['usuario'];
           echo $_SESSION['usuario'];
           echo '<script> window.location="inicio.php"; </script>';
       }
       else{
            echo 'Usuario o Contraseña Incorrecto';
           echo '<script> window.location="index.php"; </script>';
       }
?>

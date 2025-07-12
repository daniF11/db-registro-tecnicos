<?php
include("conexion.php");


if (isset($_POST['register'])) {
        
    
    if (strlen($_POST['cod_persona']) >= 1 &&
     strlen($_POST['dni']) >= 1 &&
      strlen($_POST['nombres']) >= 1 &&
       strlen($_POST['apellidos']) >= 1) {

        $cod_persona = trim($_POST["cod_persona"]);
        $dni = trim($_POST["dni"]);
        $nombres = trim($_POST["nombres"]);
        $apellidos = trim($_POST["apellidos"]);
        $fecha_reg = date("d/m/y");
        

        $sql= "INSERT INTO datos (cod_persona, dni, nombres, apellidos, fecha_reg) VALUES ('$cod_persona','$dni','$nombres','$apellidos','$fecha_reg')";

        $query = mysqli_query($con,$sql);

        if($query){
     Header("Location: ../index.php");
    
}else {
}

        if ($query) {
            ?>
            <h3>Datos Cargados!</h3>
            <?php
        }else{
            ?>
            <h3>ERROR!</h3>
            <?php
        }

     }else {
        ?>

            
        <script>
            alert("Complete los campos");
            window.location.href = "../index.php";
        </script>


        
        <?php
        
    }
}


?>






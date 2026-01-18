<<<<<<< HEAD
<?php

include("conexion.php");


$cod_persona=$_POST['cod_persona'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$sql="UPDATE datos SET  dni='$dni',nombres='$nombres',apellidos='$apellidos' WHERE cod_persona='$cod_persona'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../index.php");
    }
=======
<?php

include("conexion.php");


$cod_persona=$_POST['cod_persona'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$sql="UPDATE datos SET  dni='$dni',nombres='$nombres',apellidos='$apellidos' WHERE cod_persona='$cod_persona'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../index.php");
    }
>>>>>>> 7ef01fa5966f64d43e8076cbce9485e8746828cf
?>
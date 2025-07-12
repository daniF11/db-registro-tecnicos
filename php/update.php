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
?>
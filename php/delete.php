<?php

include("conexion.php");


$cod_persona=$_GET['id'];

$sql="DELETE FROM datos  WHERE cod_persona='$cod_persona'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../index.php");
    }
?>

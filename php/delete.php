<<<<<<< HEAD
<?php

include("conexion.php");


$cod_persona=$_GET['id'];

$sql="DELETE FROM datos  WHERE cod_persona='$cod_persona'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../index.php");
    }
?>
=======
<?php

include("conexion.php");


$cod_persona=$_GET['id'];

$sql="DELETE FROM datos  WHERE cod_persona='$cod_persona'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../index.php");
    }
?>
>>>>>>> 7ef01fa5966f64d43e8076cbce9485e8746828cf

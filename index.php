<?php 
include("php/conexion.php");


$sql="SELECT *  FROM datos";
$query=mysqli_query($con,$sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title> Registro de Técnicos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
</head>
<body>
    <div class="container mt-5">
        <div class="row"> 
            
            <div class="col-md-3">
                <h1>Ingrese datos</h1>
                <form action="php/insertar.php" method="POST">

                    <input type="text" class="form-control mb-3" name="cod_persona" placeholder="Código">
                    <input type="text" class="form-control mb-3" name="dni" placeholder="Dni">
                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                    
                    <input type="submit" class="btn btn-primary" name="register">
                </form>
            </div>

            <div class="col-md-8">
                <table class="table" >
                    <thead class="table-success table-striped" >
                        <tr>
                            <th>Código</th>
                            <th>Dni</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Fecha Registro</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while($row=mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <th><?php  echo $row['cod_persona']?></th>
                                <th><?php  echo $row['dni']?></th>
                                <th><?php  echo $row['nombres']?></th>
                                <th><?php  echo $row['apellidos']?></th>    
                                <th><a href="php/actualizar.php?id=<?php echo $row['cod_persona'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="php/delete.php?id=<?php echo $row['cod_persona'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                            </tr>
                            <?php 
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>  
    </div>
</body>
</html>
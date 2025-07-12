<?php

   
    $con=mysqli_connect("localhost","root","", "personas");

   if ($con){
      ?>
          <h5 style="color:green">Conectado a Base de Datos</h5>
      <?php
   }else{
    ?>
          <h2 style="color:red">error</h2>
      <?php
   }

    
?>

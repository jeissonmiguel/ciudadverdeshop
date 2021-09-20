<?php
 include("../conexion/conexion.php");
  $id=(isset($_GET['id'])    ? $_GET['id']    : '');
      $traeid=$id;

    echo "<script type='text/javascript'>window.close();</script>";          
            
  echo "<script type='text/javascript'>alert('Cerrado correctamente')</script>";
  ?>









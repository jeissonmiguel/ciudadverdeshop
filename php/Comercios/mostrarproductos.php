<?php
 session_start();
 include("../conexion/conexion.php"); 
 $usuario= (isset($_SESSION['logueado'])    ? $_SESSION['logueado']    : '');
 if ($usuario == "") {
      echo "<h5  class='btn-warning letrat1'> no estas logueado navegas como invitado  ,que esperas registrate = ) <a href='../registrate/registrate.php'><button class='btn btn-success'> a un click </button></a></h5>";
      }else{
        echo "<h5 class='btn-warning letrat1'style='height:38px'> esta logueado como: ". $usuario."<a href='../almacenProductos/desloguearte.php'><button style='float:right;'class='btn btn-danger'>Cerrar sesion</button></a><a href='../almacenProductos/desloguearte.php'><button style='float:right;'class='btn btn-danger'></button></a></h5>";     
      } 

      $id=(isset($_GET['id'])    ? $_GET['id']    : '');
$traeid=$id;
$_SESSION["id"]=$id;
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>ingreso de productos</title>  
  <link rel="stylesheet" href="../../css/comercios/mostrarproductos.css">
  <!-- <link rel="stylesheet" href="../..//css/crearTienda/mostrarTienda.css"> -->
  <!-- <link rel="stylesheet" href="../../css/crearTienda/mostrarProductos.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- javascript -->
    
</head>
<body class="auau col-12" style="background-color: #DFFAD6">
  <?php         
     //traer nombre tienda    
      $busqueda="SELECT * FROM registrotienda WHERE numRegistroTienda=$id";
      $result = mysqli_query($conexion,$busqueda);
      while($row = mysqli_fetch_row($result)){
        $seccion =$row[6];

        $tienda =$row[5];
        $_SESSION["tienda"]=$tienda;
        // $tienda1 = $_SESSION["tienda"];

        $numregistrotienda =$row[0];
        $_SESSION["numregistrotienda"]=$numregistrotienda;
        $numregistrotienda = $_SESSION["numregistrotienda"];
         }

      //tarer nombre empresa
      $busqueda1="SELECT * FROM registroempresa WHERE numRegistroEmpresa=$id";
      $result1 = mysqli_query($conexion,$busqueda1);
      while($row = mysqli_fetch_row($result1)){
        $seccion =$row[6];
        $empresa=$row[5];
        $_SESSION["empresa"]=$empresa;
        // $empresa1 = $_SESSION["empresa"];

        $numregistroempresa =$row[0];
        $_SESSION["numregistroempresa"]=$numregistroempresa;
        $numregistroempresa = $_SESSION["numregistroempresa"];
         }
         

     ?>
  <header class="">
   <div class="col-2 badge badge-success bordes"><</div>
   <div class="col-6 col-md-8 col-xs-8 btn btn-success bordes letrat1"><h2><?php if(!empty($tienda)){ echo $tienda; } if(!empty($empresa)){ echo $empresa; }?></h2></div>
<form action="">  

      <button type="submit" onclick=this.form.action="volver.php" class=" col-4 col-md-2 col-xs-2 btn btn-success btn btn-warning bordes letrat1">Volver a Sección <?php echo $seccion ?></button>
</form>
<div class="col-3 float-left">.</div>
<div class="col-3 btn btn-success bordes letrat1"><h2>Usuario</h2></div>
<div class="col-3 btn btn-success bordes letrat1"><h2><?php if(empty($usuario)){echo "invitado";}else{echo $usuario;}?></h2></div>
<div class="col-3 float-right">.</div>    

    
</header>

<?php include("../crearTienda/modoCliente.php") ?>
        
         
            
            
</div>  

</body>
</html>
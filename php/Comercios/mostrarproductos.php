<?php
 session_start();
 include("../conexion/conexion.php"); 
 $usuario= (isset($_SESSION['logueado'])    ? $_SESSION['logueado']    : '');
 if ($usuario == "") {
      echo "<div style='height:50px;width:100%;'><h5 class='bg-light float-left' style='padding:5px;color:black;'>Navegas como invitado,que esperas registrate !! </h5><a href='../login/login.php'><button class='btn btn-success float-right'>iniciar session</button></a><a href='../registrate/registrate.php'><button class='btn btn-light float-right'>Registrate </button></a></div>";
      }else{
       echo "<div style='height:60px;width:100%;'><h5 class='bg-light float-left' style='padding:5px;color:black;'> esta logueado como usuario: ". $usuario."</h5></div>";     
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
    <script src="../../js/comercio/volver.js"></script>
    
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
   
   <label class="col-lg-8 col-sm-6 col-md-6 btn border border-light bordes" style="height:100px;"><h2><?php if(!empty($tienda)){ echo $tienda; } if(!empty($empresa)){ echo $empresa; }?></h2></label>
<form action="">  

      <button type="submit"  style="text-transform: capitalize;" onclick=this.form.action="volver2.php" class=" col-lg-2 col-sm-3 col-md-3 btn btn-light border border-dark bordes">Solo Volver a <?php if(!empty($tienda)){ echo $tienda; } if(!empty($empresa)){ echo $empresa; }?></button>
        <button type="submit" onclick=this.form.action="volver.php" class=" col-lg-2 col-sm-3 col-md-3 btn btn-success btn btn-warning bordes border border-success">Volver a Sección <?php echo $seccion ?></button>
       

<div>
<label class="col-lg-6 col-sm-6 col-md-6 btn btn-success bordes rounded border"><h2>Usuario Conectado :</h2></label>
<label class="col-lg-6 col-sm-6 col-md-6 btn btn-success bordes rounded border"><h2><?php if(empty($usuario)){echo "invitado";}else{echo $usuario;}?></h2></label>

</div>  
</form>   

    
</header>

<?php include("../crearTienda/modoCliente.php") ?>
        
         
            
            
</div>  

</body>
</html>
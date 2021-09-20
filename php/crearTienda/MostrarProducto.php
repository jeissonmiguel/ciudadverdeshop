<?php
 session_start();
 include("../conexion/conexion.php"); 
 $usuario= (isset($_SESSION['logueado'])    ? $_SESSION['logueado']    : '');
 
  if ($usuario == "") {
     echo "<script>alert('no esta autenticado sera direccionado al pagina principal');</script>"."<script type='text/javascript'>"."window.location='../../index.html'"."</script>";
     session_destroy();
         echo "<h5 class='btn-warning '> no estas logueado que esperas registrate = )<a href='../registrate/registrate.php'></a><button class='btn btn-success'>a un click</button></h5>";
           }else{
            echo "<h5 class='btn-warning 'style='height:38px'> esta logueado como: ". $usuario."<a href='../almacenProductos/desloguearte.php'><button style='float:right;'class='btn btn-danger'>Cerrar sesión</button></a><a href='../almacenProductos/desloguearte.php'><button style='float:right;'class='btn btn-danger'></button></a></h5>";
           } 

$id=(isset($_GET['id'])    ? $_GET['id']    : '');
$traeid=$id;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edita Productos</title>
  <!-- <link rel="stylesheet" href="../../css/almacenProductos/almacenProductos.css"> -->
  <link rel="stylesheet" href="../../css/crearTienda/mostrarTienda.css">
  <link rel="stylesheet" href="css/letra/letra.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="shortcut icon" href="../../img/index/body/actualizacion3/logo.png" type="image/png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- javascript -->
     <script src="../../js/almacenarProductos/almacenarProductos.js"></script>
     <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <!-- <script src="jquery-3.5.1.min.js"></script> -->
   
    <?php 
   

    //mensaje de inicio
     // $busqueda = "SELECT * FROM registrotienda WHERE usuario='$usuario'";
     //  $nombre = mysqli_query($conexion,$busqueda);

     //      while ($row = mysqli_fetch_row($nombre)) {
     //        $nombretienda=$row[4];                      
     //        }
    
     $usuario =$_SESSION['logueado'];
     // echo "<script>alert('Ingrese sus datos manualmente desde la interfaz o en modo lista usuario $usuario ');</script>";

     ?>
</head>

<header class="">
     <div class="col-lg-2 col-sm-6 col-md-3 btn btn-success bordes bordes"><</div>
     <div class="col-lg-6 col-sm-6 col-md-3 btn btn-success bordes"><h4>Interfaz Usuario</h4></div>
     <!-- <a href="../login/login.php" class="btn btn-success letra"></a> -->
     <form action="">
      <button type="submit" onclick=this.form.action="../login/selecionperfil.php" class="col-lg-2 col-md-3 col-sm-3  btn btn-light bordes bordes btn-success"><h4>ir a Home</button>
      <button type="submit" onclick=this.form.action="ingresarTienda.php" class="col-lg-2 col-md-3 col-sm-3  btn btn-danger bordes bordes btn-danger"><h4>volver</button>
     </form>
     <br>
              
     <div class="col-4 float-left">.</div>
     <div class="col-lg-2 col-md-3 col-sm-3 btn btn-danger bordes bordes"><h4>Usuario:</h4></div>
     <div class="col-lg-2 col-md-3 col-sm-3 btn btn-danger bordes bordes"><h4><?php echo $usuario; ?></h4></div>
     <div class="col-4 float-left">.</div>     
<?php
     
     //traer nombre tienda
       $busqueda="SELECT * FROM registrotienda WHERE numRegistroTienda=$id";
      $result = mysqli_query($conexion,$busqueda);
      while($row = mysqli_fetch_row($result)){

        $tienda =$row[5];
        $_SESSION["tienda"]=$tienda;
        $tienda1 = $_SESSION["tienda"];

        $numregistrotienda =$row[0];
        $_SESSION["numregistrotienda"]=$numregistrotienda;
        $numregistrotienda = $_SESSION["numregistrotienda"];
         }

      //tarer nombre empresa
      $busqueda="SELECT * FROM registroempresa WHERE numRegistroEmpresa=$id";
      $result = mysqli_query($conexion,$busqueda);
      while($row = mysqli_fetch_row($result)){
        $empresa = $row[5];
        $_SESSION["empresa"]=$empresa;
        $empresa1 = $_SESSION["empresa"];

        $numregistroempresa =$row[0];
        $_SESSION["numregistroempresa"]=$numregistroempresa;
        $numregistroempresa = $_SESSION["numregistroempresa"];
         }


      $busqueda="SELECT * FROM registroproductoindividual WHERE numRegistroProductoIndividual=$id";
      $result = mysqli_query($conexion,$busqueda);
      while($row = mysqli_fetch_row($result)){
        $producto = $row[5];
        $_SESSION["producto"]=$producto;
        $producto1 = $_SESSION["producto"];

        $numregistroproductoindividual =$row[0];
        $_SESSION["numregistroproductoindividual"]=$numregistroproductoindividual;
        $numregistroproductoindividual = $_SESSION["numregistroproductoindividual"];
         }
         

     ?>    
    
</header>

<body class="" style="background-color: #DFFAD6;">
    

 
<br><br>
    <!-- <div class="col-3 float-left"><button onclick=this.form.action="" name="b1"  id="b1" class=" btn btn-success bordes bordes w-75"><h4 style="font-size:100%">Modo lista</h4></button></div>
    <div class="col-3 float-left"><button onclick=this.form.action="" name="b2"  id="b2" class=" btn btn-success bordes bordes w-75 "><h4 style="font-size:100%">Modo cliente</h4></button></div>
    <div class="col-3 float-left"><button onclick=this.form.action="" name="b3"  id="b3" class=" btn btn-success bordes bordes w-75"><h4 style="font-size:100%">Ingresar productos</h4></button></div>
    <div class="col-3 float-left"><button onclick=this.form.action="" name="b4"  id="b4" class=" btn btn-success bordes bordes w-75"><h4 style="font-size:100%">Editar datos Comercio</h4></button></div>
    <br><br> -->

 <?php  

  //ingreso edicion datos empresa--> 
include("../almacenProductos/modificarestablindproductosindividuales.php");



//ingreso modolista-->  
include("modoLista.php");

//ingreso Productos-->  
include("ingresoProductos.php");

//modo modocliente-->
 // include("modoClienteEdicion.php"); 

//ingreso modolista-->  
include("modoComercio.php");





?>

</body>
</html>
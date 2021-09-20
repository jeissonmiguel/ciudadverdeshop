<?php
session_start();
 include("../login/cambiarcontrasena.php"); 
 include("../conexion/conexion.php");


// error_reporting(0);
$usuario=$_SESSION['logueado'];
// echo $usuario;
if($usuario == null || $usuario==""){
echo "<script>alert('no esta logueado es necesario que ingrese su usuario y contraseña'); window.location='../login/login.php'</script>";
session_destroy(); 	
die();
}else{

}
// $conexion=mysqli_connect("localhost","root","","citygreen");
// $usuario=$_SESSION['logueado'];
// $contrasena=$_SESSION['logueado1'];



$busqueda = "SELECT * FROM registrousuario WHERE documento='$usuario'";
      $nombre = mysqli_query($conexion,$busqueda);

          while ($row = mysqli_fetch_row($nombre)) {
            $documento= $row[4];
            $nombre1= $row[5];
            $nombre2= $row[6];
            }

?>

<head>
	<meta charset="UTF-8">
	<title>Logueate</title>
	<link rel="stylesheet" href="../../css/letra/letra.css" type="text/css"/>
	<link rel="stylesheet" href="../../css/login/selecionperfil.css" type="text/css"/>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../../img/index/body/Ciudad Verde Shop.gif"/>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body class="container-fluid col-12 col-lg-6 letrat" style="zoom: 100%;">
	
<br>
	 <form action="login.php">
		 <button type="submit" onclick=this.form.action="login.php" class="padding badge badge-success btn btn-success float-right col-6"style="font-size:200%">Desloguearte</button>
       </form>

	<br><br>	
	<div>
		<div class="padding badge badge-success col-12" style="border-radius:40%;width:100%;"><h3 class="display-5">Ciudad Verde Shop <br> HOME</h3></div>
	 
	 <br><br>

	   <form  method="post" action="">
	   
            <label class="padding  trans badge badge-success" style="font-size:130%"><b class="text-dark">Estas logueado como usuario</b> <b class="text-dark"><?php echo $documento?></b></label>
		    <label class="padding  trans badge badge-light" style="font-size:130%"><b class="text-danger">Que quieres hacer?</b>  <b class="text-dark"><?php echo $nombre1," ", $nombre2?></b></label>
		    
			<button type="submit" class="btn btn-danger border-secondary" style="width:32%;height:33%;" onclick=this.form.action="../Comercios/Comercios.php"><b style="font-size:150%">Solo deseas comprar click =></b></button>
		    
			<button type="submit" class="btn btn-warning border-secondary" style="width:32%;height:33%;" onclick=this.form.action="../crearTienda/crearTienda.php"><b style="font-size:150%">Crear Producto Tienda ó Empresa =></b></button>
			
			<button type="submit" class="btn btn-info border-secondary" style="width:32%;height:33%;" onclick=this.form.action="../crearTienda/ingresarTienda.php"><b style="font-size:150%">Ingresa a Editar Tus Productos click =></b></button>
			

			

	   </form>

	 
   </div>

       
	
</body>
</html>
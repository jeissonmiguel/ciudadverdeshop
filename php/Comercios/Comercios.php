<?php  
 session_start();
 include("../conexion/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ciudad verde</title>
	<!-- <link rel="stylesheet" href="css/index/index.css"> -->
	<link rel="stylesheet" href="../../css/footer/footerglob.css">
	<link rel="stylesheet" href="../../css/comercios/comercios.css">
	<link rel="stylesheet" href="../..css/letra/letra.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="shortcut icon" href="../../img/index/body/actualizacion3/logo.png" type="image/png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../../img/index/body/Ciudad Verde Shop.gif"/>
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
<?php
if (!empty($_SESSION['logueado'])) { 	

 $usuario=$_SESSION['logueado'];
 //   if($usuario == null || $usuario = ''){
	// echo "<script>alert('usted no tiene autorizacion');window.location='../login/login.php'</script>";
 //  session_destroy();
	// die();
 //         }else{}
 if ($usuario == "") {
      echo "<div style='height:125px;width:100%;padding:5px 0px 0px 0px;'><h3 class='bg-light float-left' style='padding:5px;'>Navegas como invitado,que esperas registrate !! </h3><a href='../login/login.php'><button class='btn btn-success float-right'><h3>iniciar sesión</h3></button></a><a href='../registrate/registrate.php'><button class='btn btn-light float-right'><h3>Registrate</h3></button></a></div>";
      }else{
          echo "<div style='height:80px;width:100%;'><h3 class='bg-light float-left' style='padding:5px;'> esta logueado como usuario: ". $usuario."<a href='../almacenProductos/desloguearte.php'></h3><button class='btn btn-danger float-right'>	X <b style='font-size:20px;'>Cerrar</b></button></a></div><br>";     
      }
       
       }else{
        echo "<div style='height:125px;width:100%;padding:5px 0px 0px 0px;'><h3 class='bg-light float-left' style='padding:5px;'>Navegas como invitado,que esperas registrate !! </h3><a href='../login/login.php'><button class='btn btn-success float-right'><h3>iniciar sesión</h3></button></a><a href='../registrate/registrate.php'><button class='btn btn-light float-right'><h3>Registrate</h3></button></a></div>";
       }

       
?>
  </head>

<body class="" style="zoom:100%;">


		
<header class="container-fluid col-12" style="height:100%;">


	 
<a href="../../index.html"><label class="padding badge badge-success btn btn-success col-lg-6 col-12 col-xs-3 col-md-6" style="border-color: Black;border-width:3px;"><h1 class="text-light display-5" > <= principal </h1></label></a>
<a href="../login/selecionperfil.php"><label class="padding badge badge-warning btn btn-warning float-right col-lg-6 col-12 col-xs-3 col-md-6" style="border-color: Black;border-width:3px;"><h1 class="display-5"><= Ir a Home</h1></label></a>
<br><br>

<div  class="badge badge-success col-12" id="l">
 <h1 class="btn btn-success col-12 " style="background:#28a745;color:white;font-style: italic;font-size:30px;border-radius:2%;">Promociones del dia</h1>
 </div>

<aside id="i" class="col-12" style="height:100%;">

<!-- <h1 class=" badge badge-success col-12" style="background:#28a745;color:white;font-size:25px;border-radius:2%;">Promociones</h1> -->
	<div id="demo" class="carousel slide col-lg-6 col-12 col-xs-3 col-md-6 float-left" data-ride="carousel" style="width: 100%; height:100%;">

			  <!-- Indicators -->
			  <ul class="carousel-indicators padding">
			    <li data-target="#demo" data-slide-to="0" class="active"></li>
			    <li data-target="#demo" data-slide-to="1"></li>
			    <li data-target="#demo" data-slide-to="2"></li>
			    <li data-target="#demo" data-slide-to="3"></li>
			   

			  </ul>

			  <!-- The slideshow -->
			  <div class="carousel-inner">
			    <div class="carousel-item ">
			      <img src="../../img/index/body/actualizacion3/presentacion1.gif" style="width:100%;height:500px;"alt="primera">
			    </div>
			    <div class="carousel-item">
			      <img src="../../img/index/body/actualizacion3/presentacion2.gif" style="width:100%;height:500px;"alt="segunda">
			    </div>

			    <div class="carousel-item active">
			      <img src="../../img/index/body/actualizacion3/logo.gif" style="width:100%;height:500px;"alt="tercera">			      
			    </div>

			    <div class="carousel-item">
			      <img src="../../img/index/body/actualizacion3/presentacion3.gif" style="width:100%;height:500px;"alt="cuarta">			      
			    </div>			    
			 
			  </div>

			  <!-- Left and right controls -->
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			  </a>
<br>

	</div>

			<div id="demo1" class="carousel slide col-lg-6 col-12 col-xs-3 col-md-6 float-left" data-ride="carousel">

			  <!-- Indicators -->
			  <ul class="carousel-indicators padding">
			    <li data-target="#demo1" data-slide-to="0" class="active"></li>
			    <li data-target="#demo1" data-slide-to="1"></li>
			    

			  </ul>

			  <!-- The slideshow -->
			 <div class="carousel-inner">
			 	 <div class="carousel-item active">
			      <img src="../../img/index/body/actualizacion3/publicidad.gif" style="width:100%;height:500px;"alt="cuarta">			      
			    </div>	
			 
			    
			  </div>
			  <!-- Left and right controls -->
			  <a class="carousel-control-prev" href="#demo1" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo1" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			  </a>

			</div>
				
	
	</aside>

</header>

<aside class="container-fluid badge fondol col-12 fijar" style="height:100%">
	<h1 class="btn btn-succes col-12" style="background:#28a745;color:white;font-style: italic;font-size:30px;border-radius:2%;">Selecciona sección <br>e ingresa <br> al comercio que buscas!</h1>
            
	<div class="col-12 col-lg-2 col-md-6 float-left badge badge-success"><!-- <h3>Licor</h5> -->
    <a href='interfazcliente.php?id=Licores'><img src="../../img/index/locales/jpg/lic.jpg" style="width:100%; height:210px;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity='100';" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity='20';"></a> 
	</div>

	<div class="col-12 col-lg-2 col-md-6 badge badge-success float-left"><!-- <h5>Panaderia</h5> -->
    <a href='interfazcliente.php?id=Panaderia'><img src="../../img/index/locales/jpg/pan.jpg" style="width:100%;height:210px;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity='100';" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity='20';"></a>
	</div>

	<div class="col-12 col-lg-2 col-md-6 float-left badge badge-success"><!-- h5>Comidas rapidas</h5>
-->        <a href='interfazcliente.php?id=Comida_Rapidas'><img src="../../img/index/locales/jpg/com.jpg" style="width:100%; height:210px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity='100';" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity='20';"></a> 
	</div>

	<div class="col-12 col-lg-2 col-md-6 float-left badge badge-success"><!-- <h5>Restaurante</h5>
-->     <a href='interfazcliente.php?id=Restaurantes'><img src="../../img/index/locales/jpg/res.jpg" style="width:100%; height:210px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity='100';" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity='20';"></a> 
	</div>

	<div class="col-12 col-lg-2 col-md-6 float-left badge badge-success"><!-- <h5>Asadero</h5>
-->  <a href='interfazcliente.php?id=Asaderos'><img src="../../img/index/locales/jpg/asa.jpg"style="width:100%; height:210px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity='100';" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity='20';"></a> 
	</div>

	<div class="col-12 col-lg-2 col-md-6 float-left badge badge-success"><!-- <h5>tecnologia</h5>
-->    <a href='interfazcliente.php?id=Tecnologia'><img src="../../img/index/locales/jpg/tec.jpg"style="width:100%; height:210px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity='100';" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity='20';"></a> 
	</div>	


</aside>

<aside class="container-fluid badge fondol col-12 h-300 fijar" style="height:100%">

	<div class="col-12 col-lg-2 col-md-6 float-left badge badge-success"><!-- <h5>Licor</h5> -->
    <a href='interfazcliente.php?id=Supermercados'><img src="../../img/index/locales/jpg/sup.jpg"style="width:100%; height:210px;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity='100';" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity='20';"> 
	</a></div>

	<div class="col-12 col-lg-2 col-md-6 badge badge-success float-left"><!-- <h5>Panaderia</h5> -->
    <a href='interfazcliente.php?id=Droguerias'><img src="../../img/index/locales/jpg/dro.jpg" style="width:100%;height:210px;"  onmouseout="this.style.opacity=1;this.filters.alpha.opacity='100';" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity='20';">
	</a></div>

	<div class="col-12 col-lg-2 col-md-6 float-left badge badge-success"><!-- h5>Comidas rapidas</h5>
-->        <a href='interfazcliente.php?id=Mascotas'><img src="../../img/index/locales/jpg/mas.jpg" style="width:100%; height:210px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity='100';" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity='20';"> 
	</a></div>

	<div class="col-12 col-lg-2 col-md-6 float-left badge badge-success"><!-- <h5>Restaurante</h5>
-->     <a href='interfazcliente.php?id=Miscelaneas'><img src="../../img/index/locales/jpg/mis.jpg"style="width:100%; height:210px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity='100';" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity='20';"> 
	</a></div>

	<div class="col-12 col-lg-2 col-md-6 float-left badge badge-success"><!-- <h5>Licor</h5> -->
    <a href="interfazcliente.php?id=Gimnasio"><img src="../../img/index/locales/jpg/gim.jpg" style="width:100%; height:210px;" alt="imagen central" onmouseout="this.style.opacity=1;this.filters.alpha.opacity='100';" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity='20';"/></a></div>

	<div class="col-12 col-lg-2 col-md-6 float-left badge badge-success"><!-- h5>Comidas rapidas</h5>
-->        <a href="interfazcliente.php?id=Belleza"><img src="../../img/index/locales/jpg/bel.jpg" style="width:100%; height:210px;" alt="imagen central" onmouseout="this.style.opacity=1;this.filters.alpha.opacity='100';" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity='20';"/></a></div>

	

</aside>

</aside>

<aside class="container-fluid badge fondol col-12 h-300 fijar" style="height:100%">
	<h1 class="btn btn-succes col-12 " style="background:#28a745;color:white;font-style: italic;font-size:30px;border-radius:2%;">Selecciona sección <br>e ingresa <br>al Producto que buscas!</h1>

	<div class="col-12 col-lg-2 col-md-6 badge badge-success float-left"><!-- <h5>Panaderia</h5> -->
    <a href="interfazclienteproductos.php?id=Ventas_Individuales"><img src="../../img/index/locales/jpg/ven.jpg" style="width:100%;height:210px;" alt="imagen central" onmouseout="this.style.opacity=1;this.filters.alpha.opacity='100';" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity='20';"/></a></div>

    
	<div class="col-12 col-lg-2 col-md-6 float-left badge badge-success"><!-- <h5>tecnologia</h5>
-->    <a href="interfazclienteproductos.php?id=Trueque"><img src="../../img/index/locales/jpg/tru.jpg" style="width:100%; height:210px;" alt="imagen central" onmouseout="this.style.opacity=1;this.filters.alpha.opacity='100';" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity='20';"/></a></div>
	

	<div class="col-12 col-lg-2 col-md-6 float-left badge badge-success"><!-- <h5>Restaurante</h5>
-->     <a href="interfazclienteproductos.php?id=Vehiculos"><img src="../../img/index/locales/jpg/veh.jpg" style="width:100%; height:210px;" alt="imagen central" onmouseout="this.style.opacity=1;this.filters.alpha.opacity='100';" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity='20';"/></a></div>

	<div class="col-12 col-lg-2 col-md-6 float-left badge badge-success"><!-- <h5>Asadero</h5>
--> <a href="interfazclienteproductos.php?id=Viviendas"><img src="../../img/index/locales/jpg/viv.jpg" style="width:100%; height:210px;" alt="imagen central" onmouseout="this.style.opacity=1;this.filters.alpha.opacity='100';" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity='20';"/></a></div>


<div class="col-12 col-lg-2 col-md-66 float-left badge badge-success"><!-- <h5>Asadero</h5>
--> <a href='interfazclienteproductos.php?id=Profesiones'><img src="../../img/index/locales/jpg/pro.jpg"style="width:100%; height:210px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity='100';" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity='20';"> 
	</a></div>

	<div class="col-12 col-lg-2 col-md-6 float-left badge badge-success"><!-- <h5>tecnologia</h5>
-->    <a href='interfazclienteproductos.php?id=Otros_Servicios'><img src="../../img/index/locales/jpg/otr.jpg" style="width:100%; height:210px;" onmouseout="this.style.opacity=1;this.filters.alpha.opacity='100';" onmouseover="this.style.opacity=0.7;this.filters.alpha.opacity='20';"> 
	</a></div>  

</aside>


	<br><br><br><br>

<!-- //footer -->
				<?php
				include("../footer/footer.php");
				?>
		

	
	
</body>
</html>

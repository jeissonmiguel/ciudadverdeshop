<?php

// conexion a la base de datos
include("../php/conexion/conexion.php");

//crear una tabla

$creartabla = "CREATE TABLE Registro (


cedula INT(12) NOT NULL,
nombre1 VARCHAR(20) NOT NULL,
nombre2 VARCHAR(20) NOT NULL,
apellido1 VARCHAR(20) NOT NULL,
apellido2 VARCHAR(20) NOT NULL,
cargo VARCHAR(20) NOT NULL, 
celular INT(20) NOT NULL,
genero VARCHAR(15) NOT NULL,
email VARCHAR(20) NOT NULL,
primary key(cedula),
UNIQUE KEY(idregistro),
UNIQUE KEY(celular),
UNIQUE KEY(cedula));"

$insertartabla=mysql_query($conexion,$creartabla);


// insertar datos a una tabla

$creardatos="INSERT INTO usuario 
(usuario,contraseña,confirmar1) VALUES ('80815886','Jeisson80815886','Jeisson80815886')";

$insertardatos=mysql_query($conexion,$creardatos);



// seleccionar todo de la tabla y mostrar
$seleccionar="SELECT * FROM usuario";
$mostrartabla=mysql_query($conexion,$seleccionar);


"<table border='1'><tr><td>idregsitr</td>cedula<td>nombre1</td><td>nombre2</td><td>apellido1</td></tr>"

 while($fila = mysql_fetch_array($mostrartabla)){
        echo "<tr>";
        echo "<td>".$fila['idRegsitro']."</td>";
        echo "<td>".$fila['cedula']."</td>";
        echo "<td>".$fila['nombre1']."</td>";
        echo "<td>".$fila['nombre2']."</td>";
        echo "<td>".$fila['apellido1']."</td>";
        echo "</tr>"
 
   }

 echo "</table>"


 // ordenar todo de la tabla y mostrar ASCENDENTE O DESCENDENTE
$seleccionar="SELECT * FROM usuario ORDER BY nombre1 ASC"; /* O */ $seleccionar="SELECT * FROM usuario ORDER BY nombre1 DESC";
$mostrartabla=mysql_query($conexion,$seleccionar);


"<table border='1'><tr><td>idregsitro</td><td>cedula</td><td>nombre1</td><td>nombre2</td><td>apellido1</td>/tr>"

 while($fila = mysql_fetch_array($mostrartabla)){
        echo "<tr>";
        echo "<td>".$fila['idRegsitro']."</td>";
        echo "<td>".$fila['cedula']."</td>";
        echo "<td>".$fila['nombre1']."</td>";
        echo "<td>".$fila['nombre2']."</td>";
        echo "<td>".$fila['apellido1']."</td>";
         

        echo "</tr>"
 
   }

 echo "</table>"


 //ACCIONES ELIMINAR

 "<table border='1'><tr><td>idregsitro</td><td>cedula</td><td>nombre1</td><td>nombre2</td><td>apellido1</td><td>ACCIONES</td></tr>"

 while($fila = mysql_fetch_array($mostrartabla)){
        echo "<tr>";
        echo "<td>".$fila['cedula']."</td>";
        echo "<td>".$fila['nombre1']."</td>";
        echo "<td>".$fila['nombre2']."</td>";
        echo "<td>".$fila['apellido1']."</td>";
        echo "<td><a href='eliminar.php?id=". $fila['idRegsitro'] ."'>ELIMINAR</a></td>";

        echo "</tr>"
 
   }

 echo "</table>"

 // HOJA eliminar.php
 include("../php/conexion/conexion.php")

 $id =$GET['id'];
     $eliminar ="DELETE FROM usuario WHERE idRegistro=$id";
     $mostrareliminar	=mysql_query($conexion,$eliminar);


  //ACCIONES MODIFICAR

 "<table border='1'><tr><td>idregsitro</td><td>cedula</td><td>nombre1</td><td>nombre2</td><td>apellido1</td><td colspan='2'>ACCIONES</td></tr>"

 while($fila = mysql_fetch_array($mostrartabla)){
        echo "<tr>";
        echo "<td>".$fila['cedula']."</td>";
        echo "<td>".$fila['nombre1']."</td>";
        echo "<td>".$fila['nombre2']."</td>";
        echo "<td>".$fila['apellido1']."</td>";
        echo "<td><a href='eliminar.php?id=". $fila['idRegsitro'] ."'>ELIMINAR</a></td>";
        echo "<td><a href='modificar.php?id=". $fila['idRegsitro'] ."'>MODIFICAR</a></td>";

        echo "</tr>"
 
   }

 echo "</table>"

  ?>
 <!--  ------------------------------------------------------ -->

  <?php

 // HOJA modificar.php
 include("../php/conexion/conexion.php")

 // id es el mismo que esta <a href='modificar.php?id=". $fila['idRegsitro'] .

 $id =$GET['id'];

$seleccionartabla="SELECT * FROM usuario";
$mostrartabla=mysql_query($conexion,$seleccionartabla);



 
 ?>
 <!-- crear formulario para mostrar y modificar datos -->


 <form action="modificar1.php" method="post">
 	<?php  
 	while($fila = mysql_fetch_array($mostrartabla)){
 		echo "nombre: <input type='text'; name='cedula' value='" .$fila['cedula']."'><br> ";
 		echo "nombre: <input type='text'; name='nombre1' value='" .$fila['nombre1']."'><br> ";
 		echo "nombre: <input type='text'; name='nombre2' value='" .$fila['nombre2']."'><br> ";
 		echo "nombre: <input type='text'; name='apellido1' value='" .$fila['apellido1']."'><br> ";
 		echo "nombre: <input type='text'; name='apellido2' value='" .$fila['apellido2']."'><br> ";
 		echo "<input type='hidden' name='id' value='".$id."'><br>";
 	}
 	?>
 	<input type="submit" name="ENVIAR" value="CAMBIAR">
 </form>


<?php
 // HOJA modificar1.php

//trae los elementos de modificar.php parte final cambiaria en esta hoja
$cedula = $_POST['cedula'];
$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];

include("../php/conexion/conexion.php")

$modificarid="UPDATE usuario SET cedula='$cedula',nombre1='$nombre1',nombre2='$nombre2',apellido1='$apellido1',apellido2='$apellido2' WHERE id=$id";
$enviarmodificar=mysql_query($conexion,$modificarid);

?>






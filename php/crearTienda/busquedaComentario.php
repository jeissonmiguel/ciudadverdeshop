 <?php 
 session_start();
 include("../conexion/conexion.php");

  
           $numero=1;
            $busquedaComentario="SELECT * FROM calificacion";
             $result = mysqli_query($conexion,$busquedaComentario);
              while($row = mysqli_fetch_row($result)){
             	if ($id==$row[1]) {             		
             	
              
              echo "Comentario ".$numero;
              echo "<br>";             
              echo "<td style='width:40%;padding:10px 10px 10px 10px;' class='btn-success'><i><textarea style='width:100%;' rows='2' class='label label-warning' value=''>$row[8]</textarea></i></td>";
              $numero=$numero+1;
              echo "<br>";
              }
            
          }

      ?> 
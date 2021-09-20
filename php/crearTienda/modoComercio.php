   <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ingreso de productos</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../css/letra/letra.css"/>
    <script src="../../js/almacenarProductos/borrarcom1.js"></script>
    <script src="../../js/almacenarProductos/borrarcom2.js"></script>
    <script src="../../js/almacenarProductos/borrarcom3.js"></script>
  </head>
  <div id="modocomercio" name="modocomercio" class="text-center">

  

 <!--  <div id="hd3" name="hd3" class="col-12 tamaño badge badge-warning  btn-warning text-center"><h2 class="lead font-weight-bold btn btn-warning" style="font-size:200%">Ingresa al modo editar de comercio <b> <?php if(!empty($tienda)){ echo $tienda; } if(!empty($empresa)){ echo $empresa; }?></b> </h2></div> -->
  <?php
 // include ("../Conexion/conexion.php");
       
  if(!empty($tienda)){  
      $id=(isset($_GET['id'])    ? $_GET['id']    : '');


     
      $busqueda="SELECT * FROM registrotienda WHERE numRegistroTienda='$id'";
      $result = mysqli_query($conexion,$busqueda);
      
          
        echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';
            

          
          
         

           while($row = mysqli_fetch_row($result)){
           //  echo"
           // <div class='text-center'>
           // <a href='../almacenProductos/modificarestabl.php?id=".$row[0]."'><label class='btn btn-success'>Presiona
           // </label></a></a>
          
           //            \n
           //  </div>
           //  ";
            }
                   
          

      }

           $id=(isset($_GET['id'])    ? $_GET['id']    : '');


     if(!empty($empresa)){ 
      $busqueda="SELECT * FROM registroempresa WHERE numRegistroEmpresa='$id'";
      $result = mysqli_query($conexion,$busqueda);
      
          
        echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';
            

                         
                  
          

           while($row = mysqli_fetch_row($result)){
           // echo" 
           // <div class='text-center'>
           // <a href='../almacenProductos/modificarestabl.php?id=".$row[0]."'><label class='btn btn-success'>Presiona
           // </label></a></a>
          
          
           //  <br><br>
           //  \n
           //  </div>
           //  ";
            }
        
                    
       

  }


   $id=(isset($_GET['id'])    ? $_GET['id']    : '');


     if(!empty($producto)){ 
      $busqueda="SELECT * FROM registroproductoindividual WHERE numRegistroProductoIndividual='$id'";
      $result = mysqli_query($conexion,$busqueda);
      
          
        echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';
            

                
          
      
           while($row = mysqli_fetch_row($result)){

          // echo" 
          //  <div class='text-center'>
          //  <a href='../almacenProductos/modificarestabl.php?id=".$row[0]."'><label class='btn btn-success'>Presiona
          //  </label></a></a>
          
          
          //   <br><br>
          //   \n
          //   </div>
          //   ";
            }
        

  }
            
            ?>


<div id="hd3" name="hd3" class="col-12 tamaño badge badge-warning  btn-warning text-center"><h2 class="lead font-weight-bold btn btn-warning" style="font-size:200%">Estas a punto de borrar el comercio <b><br><?php if(!empty($tienda)){ echo $tienda; } if(!empty($empresa)){ echo $empresa; }?></b> Estas <br> seguro de realizarlo?</h2></div>
  <?php
 // include ("../Conexion/conexion.php");
       
  if(!empty($tienda)){  
      $id=(isset($_GET['id'])    ? $_GET['id']    : '');


     
      $busqueda="SELECT * FROM registrotienda WHERE numRegistroTienda='$id'";
      $result = mysqli_query($conexion,$busqueda);
      
          
        echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';
            

          
          
         

           while($row = mysqli_fetch_row($result)){
            echo"
           <div class='text-center'>
           <a href='../almacenProductos/borrarcom2.php?id=".$row[0]."'><label  name='sec1' id='sec1' class='btn btn-danger'>SI Borrar</label></a>
           <label name='pri1' id='pri1' class='btn btn-danger' onclick='desicion1();'>SI Borrar</label> 
            <br><br>
            \n
            </div>
            ";
            }
                   
          

      }

           $id=(isset($_GET['id'])    ? $_GET['id']    : '');


     if(!empty($empresa)){ 
      $busqueda="SELECT * FROM registroempresa WHERE numRegistroEmpresa='$id'";
      $result = mysqli_query($conexion,$busqueda);
      
          
        echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';
            

                         
                  
          

           while($row = mysqli_fetch_row($result)){
           echo" 
           <div class='text-center'>
           <a href='../almacenProductos/borrarcom1.php?id=".$row[0]."'><label  name='sec1' id='sec1' class='btn btn-danger'>SI Borrar</label></a>
           <label name='pri1' id='pri1' class='btn btn-danger' onclick='desicion1();'>SI Borrar</label> 
            <br><br>
            \n
            </div>
            ";
            }
        
                    
       

  }



   $id=(isset($_GET['id'])    ? $_GET['id']    : '');


     if(!empty($producto)){ 
      $busqueda="SELECT * FROM registroproductoindividual WHERE numRegistroProductoIndividual='$id'";
      $result = mysqli_query($conexion,$busqueda);
      
          
        echo '<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>';
        echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
        echo '<!--<script src="jquery-3.4.1.min.js"></script>-->';
            

                
          
      
           while($row = mysqli_fetch_row($result)){

          echo" 
           <div class='text-center'>          
           <a href='../almacenProductos/borrarcom3.php?id=".$row[0]."'><label  name='sec1' id='sec1' class='btn btn-danger'>SI Borrar</label></a>
           <label name='pri1' id='pri1' class='btn btn-danger' onclick='desicion1();'>SI Borrar</label> 
            <br><br>
            \n
            </div>
            ";
            }
        

  }
            
            ?>

</div>

</html>  

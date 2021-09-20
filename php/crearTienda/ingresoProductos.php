<?php if(!empty($empresa)){
  echo'<form action="" method="post" enctype="multipart/form-data" id="almacenar" name="almacenar"> 

   <div id="hd3" name="hd3" class="col-12 tamaño badge badge-info btn btn-info"><h2>Estas en la Empresa <b><br>';?><?php if(!empty($tienda)){ echo $tienda; } if(!empty($empresa)){ echo $empresa; }?>

  <?php  echo
    '<br></b> ingresa los productos</h2></div>

    <section class="col-lg-6 col-md-6 float-left" style="background:;display: inline-block;">
       <div class=" btn btn-info col-12  float-left"><img id="imagenPrevisualizacion" width="100%" height="400"></div>
        <div style="width:100%;" class="col-12 bordes btn btn-info"><input required type="file" id="seleccionArchivos" name="seleccionArchivos"accept="image/*" class="col-12 bordes" ></div>

    </section> 
    

    <section class="col-lg-6 col-md-6 float-left" style="background:;display: inline-block;font-size:150%;">
     
      <h1 class="btn btn-info bordes col-12">datos del Producto</h1> 

        <h1 class="col-4 btn btn-info bordes">Producto</h1><input required maxlength="50"  placeholder="Nombre Producto Empresa, Marca. ej: chocolate /ferrero" type="text" id="producto" name="producto" class="form-control col-8">

        <h1 class="col-4 btn btn-info bordes">Descripción</h1><input required maxlength="50" placeholder="Elemento ej: Caja, Color, Tamaño / und medida ej: 249gr" type="text" id="descripcion" name="descripcion" 
        class="form-control col-8">

               <h1 class="col-4 btn btn-info bordes">Embalaje X</h1><input required maxlength="10" placeholder="por cuanto viene empacado ej: 24" type="text" id="embalaje" name="embalaje" class="form-control col-8">

               <h1 class="col-4 btn btn-info bordes">Cantidad X</h1><input required  placeholder="unidades por valor" type="text" id="cantidad" name="cantidad" class="form-control col-8">

             <h1 class="col-4 btn btn-info bordes">Valor</h1><input required pattern="[0-9]* "placeholder="24000" type="number" id="valor" name="valor"onchange="sumado();sumado1()"class="form-control col-8">

             <h1 class="col-4 btn btn-info bordes">Iva %</h1><input required  pattern="[0-9]* "type="text" id="iva" name="iva" value="19" disabled class="form-control col-8">

             <h1 class="col-4 btn btn-info bordes">Total+Iva</h1><input required  pattern="[0-9]* "type="number" id="tiva" name="tiva" disabled class="form-control col-8">

             <h1 class="col-4 btn btn-info bordes">Descuento %</h1><input required  placeholder="sugerido 15 porciento" type="text" id="descuento" name="descuento" value="" maxlength="2" onchange="sumado1()"class="form-control col-8">

             <h1 class="col-4 btn btn-info bordes">precio total</h1><input required  pattern="[0-9]* "type="number" id="total" name="total" disabled class="form-control col-8">
                <br>
              <button onclick=this.form.action="../almacenProductos/almacenProductosBase1.php?id='. $traeid .'" class="col-2 badge badge-info bordes float-right">enviar</button>
    <br><br>
    </section>   

    
   
    </form> ';
    }
    ?>

    
<?php
    if(!empty($tienda)){  echo
'<form action="" method="post" enctype="multipart/form-data" id="almacenar" name="almacenar"> 

   <div id="hd3" name="hd3" class="col-12 tamaño badge badge-success btn btn-success"><h2>Estas en la Tienda <b> <br>';?><?php if(!empty($tienda)){ echo $tienda; } if(!empty($empresa)){ echo $empresa; }?>
    <?php  echo
    '</b> <br>ingresa los productos</h2></div>


    <section class="col-lg-6 col-md-6 float-left" style="background:;display: inline-block;">
       <div class=" badge badge-success col-12  float-left"><img id="imagenPrevisualizacion" width="100%" height="400"></div>
        <div style="width:100%;" class="col-12 bordes badge badge-success"><input required type="file" id="seleccionArchivos" name="seleccionArchivos"accept="image/*" class="col-12 bordes" ></div>


    </section> 
    <br><br>

    <section class="col-lg-6 col-md-6 float-left" style="background:;display: inline-block;font-size:150%;">
     
      <h1 class="btn btn-success bordes col-12">datos del Producto</h1> 

        <h1 class="col-4 btn btn-success bordes">Producto</h1><input required placeholder="Nombre Producto Tienda , Marca. ej: chocolate/ferrero" type="text" id="producto" name="producto" class="form-control col-8">

        <h1 class="col-4 btn btn-success bordes">Descripción</h1><input required placeholder="Elemento ej: Caja, Color, Tamaño / und medida ej: 249gr" type="text" id="descripcion" name="descripcion" class="form-control col-8">

               <h1 class="col-4 btn btn-success bordes">Embalaje X</h1><input required placeholder="por cuanto viene empacado ej: 24" type="text" id="embalaje" name="embalaje" class="form-control col-8">

               <h1 class="col-4 btn btn-success bordes">Cantidad</h1><input required placeholder="unidades por valor" type="text" id="cantidad" name="cantidad" class="form-control col-8">

             <h1 class="col-4 btn btn-success bordes">Valor</h1><input required pattern="[0-9]*" placeholder="24000" type="number" id="valor" name="valor"onchange="sumado();sumado1()"class="form-control col-8">

             <h1 class="col-4 btn btn-success bordes">Iva %</h1><input required pattern="[0-9]*" type="text" id="iva" name="iva" value="19" disabled class="form-control col-8">

             <h1 class="col-4 btn btn-success bordes">Total+Iva</h1><input required pattern="[0-9]*" type="number" id="tiva" name="tiva" disabled class="form-control col-8">

             <h1 class="col-4 btn btn-success bordes">Descuento %</h1><input required placeholder="sugerido 15 porciento" type="text" id="descuento" name="descuento" value="" maxlength="2" onchange="sumado1()"class="form-control col-8">

             <h1 class="col-4 btn btn-success bordes">precio total</h1><input required pattern="[0-9]*" type="number" id="total" name="total" disabled class="form-control col-8">
                <br>
              <button onclick=this.form.action="../almacenProductos/almacenProductosBase.php?id='. $traeid .'" class="col-2 badge badge-success bordes float-right">enviar</button>
              <br><br>
    </section>   

    
   
    </form> ';
    }

   
    ?>




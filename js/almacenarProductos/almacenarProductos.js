function sumado(numero1,numero2){
   var numero1 = document.getElementById("valor");
   var numero2 = document.getElementById("iva");
   //var numero3 = document.getElementById("descuento");

   //var suma = numero1 + numero2;
   //suma = (parseInt(numero1.value)*parseInt(numero2.value)/100+parseInt(numero1.value))-parseInt(numero3.value);
   suma = (parseInt(numero1.value)*parseInt(numero2.value)/100+parseInt(numero1.value));
   document.getElementById("tiva").value = (suma);
  //document.writeln(suma); 
   
  }

  function sumado1(numero3,numero4){
   var numero3 = document.getElementById("tiva");
   var numero4 = document.getElementById("descuento");
   //var numero3 = document.getElementById("descuento");

   //var suma = numero1 + numero2;
   //suma = (parseInt(numero1.value)*parseInt(numero2.value)/100+parseInt(numero1.value))-parseInt(numero3.value);
   suma1 = (parseInt(numero3.value)-(parseInt(numero3.value)*parseInt(numero4.value)/100));
   document.getElementById("total").value =  Math.round((suma1));
  //document.writeln(suma); 
   
  }


$(document).ready(function(){
 const $seleccionArchivos = document.querySelector("#seleccionArchivos"),
 $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion");

// Escuchar cuando cambie
 $seleccionArchivos.addEventListener("change", () => {
  // Los archivos seleccionados, pueden ser muchos o uno
  const archivos = $seleccionArchivos.files;
  // Si no hay archivos salimos de la función y quitamos la imagen
  //if (!archivos || !archivos.length) {
  	if (!archivos) {
    $imagenPrevisualizacion.src = "";
    return;
  }
  // Ahora tomamos el primer archivo, el cual vamos a previsualizar
  const primerArchivo = archivos[0];
  // Lo convertimos a un objeto de tipo objectURL
  const objectURL = URL.createObjectURL(primerArchivo);
  // Y a la fuente de la imagen le ponemos el objectURL
  $imagenPrevisualizacion.src = objectURL;
});
 });


// $(document).ready(function(){
//       $("#almacenar").hide();      
//       $("#modocliente").hide();
//       $("#modolista").hide();
     

//        $("#b1").click(function(){
//             $("#modolista").show();
//             $("#almacenar").hide();
//             $("#modocliente").hide();
//             $("#modocomercio").hide();
             
      
//       });


//        $("#b2").click(function(){
//          $("#modocliente").show();
//          $("#almacenar").hide();                  
//           $("#modolista").hide();
//           $("#modocomercio").hide();
         
      
//       });


//        $("#b3").click(function(){

//          $("#almacenar").show();          
//           $("#modocliente").hide();
//            $("#modolista").hide();
//            $("#modocomercio").hide();

         
        
//       });

//        $("#b4").click(function(){
//         $("#modocomercio").show();
//           $("#almacenar").hide();          
//           $("#modocliente").hide();
//            $("#modolista").hide();
           
        
//       });


//     });
       
 
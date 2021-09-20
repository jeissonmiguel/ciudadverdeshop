

function verificar(contrasena,confirmar1){

   var contrasena = document.getElementById("contrasena");
   var confirmar1 = document.getElementById("confirmar1");
   //var numero3 = document.getElementById("descuento");

   //var suma = numero1 + numero2;
   //suma = (parseInt(numero1.value)*parseInt(numero2.value)/100+parseInt(numero1.value))-parseInt(numero3.value);
   alert((contrasena.value));

   if((contrasena.value)==(confirmar1.value)){
   alert("contraseñas correctas");
   

   }
   else if(contrasena!=confirmar1){
   alert("no coinciden las contraseñas");
   document.getElementById("confirmar1").value =  "";
    }

   
  


   // suma1 = (parseInt(numero3.value)-(parseInt(numero3.value)*parseInt(numero4.value)/100));
   // document.getElementById("total").value =  Math.round((suma1));
  //document.writeln(suma); 
   
  }


  function subirusuario(documento,usuario){  	
   var documento = document.getElementById("documento");
   var usuario = document.getElementById("usuario");
   //var numero3 = document.getElementById("descuento");

   //var suma = numero1 + numero2;
   //suma = (parseInt(numero1.value)*parseInt(numero2.value)/100+parseInt(numero1.value))-parseInt(numero3.value);
   
   
   document.getElementById("usuario").value = documento.value;
    
  


   // suma1 = (parseInt(numero3.value)-(parseInt(numero3.value)*parseInt(numero4.value)/100));
   // document.getElementById("total").value =  Math.round((suma1));
  //document.writeln(suma); 
   
  }

$(document).ready(function(){
$("#todos").on("click", function() {
  $(".case").prop("checked", this.checked);
});

// if all checkbox are selected, check the todos checkbox and viceversa
$(".case").on("click", function() {
  if ($(".case").length == $(".case:checked").length) {
    $("#todos").prop("checked", true);
  } else {
    $("#todos").prop("checked", false);
  }
});
});
  



 



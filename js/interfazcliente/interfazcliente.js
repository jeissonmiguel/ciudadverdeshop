$(document).ready(function(){
      
      $("#empresa").show();
      $("#tienda").hide();

     

       $("#b1").click(function(){
         $("#tienda").show();
          $("#empresa").hide();
          });

        $("#b2").click(function(){
         $("#tienda").hide();
          $("#empresa").show();
      //       $("#f2").hide();
      //       $("#registrotienda").hide();
      //       $("#registroempresa").hide();
    
           });
    

  });
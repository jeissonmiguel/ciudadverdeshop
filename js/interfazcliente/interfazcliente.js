$(document).ready(function(){
      
      $("#empresa").show();
       $("#tienda").hide();
        $("#productoindividual").hide();

     

       $("#b1").click(function(){
        $("#tienda").show();
         $("#empresa").hide();
          $("#productoindividual").hide();
          });

        $("#b2").click(function(){
         $("#tienda").hide();
          $("#empresa").show();
           $("#productoindividual").hide();
      //       $("#f2").hide();
      //       $("#registrotienda").hide();
      //       $("#registroempresa").hide();
    
           });
                
                $("#b0").click(function(){
                   $("#tienda").hide();
                    $("#productoindividual").show();
                      $("#empresa").hide();
      //       $("#f2").hide();
      //       $("#registrotienda").hide();
      //       $("#registroempresa").hide();
    
           });

  });
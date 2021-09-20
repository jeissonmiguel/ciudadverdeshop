 function verificar(evt) {

 	
 };
		$(document).ready(function(){
			$("#f1").hide();
			$("#f2").hide();
			$("#f3").hide();
			$("#registrotienda").hide();
				    $("#registroempresa").hide();
				    $("#registroproductoindividual").hide();

			$("#b3").click(function(){
				    $("#f1").show();				    
				    $("#f2").hide();
				    $("#f3").hide();
				    $("#registrotienda").hide();
				    $("#registroempresa").hide();
				    $("#registroproductoindividual").hide();


		  });
			 
		
	  	  
              $("#b2").click(function(){
              	$("#f2").show();
		   		    $("#f1").hide();
		   		    $("#f3").hide();
				    $("#registrotienda").hide();
				    $("#registroempresa").hide();
				    $("#registroproductoindividual").hide();		  
    			
		  
		 });

               $("#b1").click(function(){
               	$("#registrotienda").show();
				 $("#registroempresa").show();
				 $("#registroproductoindividual").show();		   		    
				  $("#f1").hide();
				  $("#f2").hide();
				  $("#f3").hide();
				    		  
    			
		  
		 });

               $("#b0").click(function(){
               	$("#f3").show();
               	$("#registrotienda").hide();
				 $("#registroempresa").hide();
				 $("#registroproductoindividual").hide();		   		    
				  $("#f1").hide();
				  $("#f2").hide();
				    		  
    			
		  
		 });
    });

  
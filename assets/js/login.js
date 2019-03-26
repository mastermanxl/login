

	$(function() {
	    
		
		$("#login").submit(function(event){
			event.preventDefault();
			
			
							$.ajax({
								type: $(this).attr("method"),							
								url: $(this).attr("action"),
								data: $(this).serialize(),
								cache: false,
								beforeSend: function () { 
									$('#captura-error').html('<div class="control-group mx-auto"><div class="controls"><center> <img src="'+$("#login").attr("tag")+'assets/img/loader.gif" alt="" width="48" height="64"></center></div></div>');
									$("#captura-error").fadeIn();
								},
								success: function(html) {    
								
								
								 if (html==="error"){																
									$("#captura-error").html('<div class="alert alert-danger" role="alert"><b>Ups</b> verifica tus datos!</div>');
									
									
								 } else	$("#captura-error").html(html);
									
									$("#captura-error").fadeIn();
								}
							});	
		
			
			
			
			
		}); //End #Login
		
		
		
		
	});	
		
		
		
		
		
		/*
		
		$guarda = function() {			
		 var dataString = $('#form_account').serialize();

						//alert('Datos : '+dataString);
						
						var $idx = $("#correo");
						var $idy = $("#pass");
						
				
					if ($idx.val().length>2 && $idy.val().length>1) {
															
							console.log("Edgar");
				     
							$.ajax({
								type: "POST",							
								url: "save-post.php",
								data: dataString,
								cache: false,
								beforeSend: function () { 
									$('#captura-error').html('<div class="control-group"><div class="controls">... <img src="img/loader.gif" alt="" width="24" height="24"></div></div>');
									$("#captura-error").fadeIn();
								},
								success: function(html) {    
								
								
																
									$("#captura-error").load("pages/login/save-result.php");
									$("#captura-error").fadeIn();
									
								}
							});					
				
			
						}
						else
						 {
						
						  //var $html = ' <div class=\"alert alert-error\"><a class="close" data-dismiss="alert" href="#">×</a> <strong>Error</strong> Faltan datos requeridos. (Usuario | Password)      </div>';	  						 
						  
						  var $html = ' <div class="alert alert-danger" role="alert"><a class="close" data-dismiss="alert" href="#">×</a><strong>Error</strong> Faltan (Usuario | Password) </div>';
						  
							$("#captura-error").html( $html );
							$("#captura-error").fadeIn();
						 }	
				
			
		}				
		
		
		
	
	
	
	
	
				
		});
		
		*/
							  

$(function(){

    //configuracao JQUERY/AJAX para trabalhar em tempo real no site 
	$('body').on('submit','form.ajax-form',function(event){

		//valida se a tela recarreg dando refresh
		//event.preventDefault();

		//valida form de acao 
		var inputIdentificador = $("input[name='identificador']",this).val();
		
		//valida identificador form  
		if(inputIdentificador == "form_FormularioEntrar") {

			//aqui os demais form da pagina principal 
			var form = $(this);

			$.ajax({
				//funcao que executa antes de enviar o formulario  
				beforeSend:function(){
					console.log("Enviando informações");
					//habilita logo/gif
					$('.overlay-loading').fadeIn();
				},
				url:'./ajax/formularios.php',
				method:'post', 
				dataType: 'json', 
				data: form.serialize()
			}).done(function(data){
				if(data.sucesso){
					//tudo certo 
					setTimeout(function(){
						//deshabilita logo/gif
						$('.overlay-loading').fadeOut();
						//habilida mensagem
						$('#sucesso').fadeIn();
						setTimeout(function(){
							//deshabilita mensagem
							$('#sucesso').fadeOut();
						},2000)			
					},4000)				
					//
					console.log(data.mensagem);					
					document.getElementById('sucesso').innerHTML = data.mensagem;
					//reset form
					$('#formFormularioEntrar').trigger("reset");               
					//atualiza marcacao de pagina do menu
					document.getElementById('menu-ativo').innerHTML = "1";  
					//
					window.location="".INCLUDE_PATH_PAINEL;
					//
				}else{
					//algo deu errado.
					setTimeout(function(){
						//deshabilita logo/gif
						$('.overlay-loading').fadeOut();
						//habilida mensagem
						$('#erro').fadeIn();
						setTimeout(function(){
							//deshabilita mensagem
							$('#erro').fadeOut();
						},4000)			
					},6000)	
					//
					console.log(data.mensagem);
					document.getElementById('erro').innerHTML = data.mensagem;
					//reset form
					$('#formFormularioEntrar').trigger("reset");					
				}
			});	

		//valida identificador form  
		}else if(inputIdentificador == "form_FormularioCadastrar") {

			//aqui os demais form da pagina principal 
			var form = $(this);

			$.ajax({
				//funcao que executa antes de enviar o formulario  
				beforeSend:function(){
					console.log("Enviando informações");
					//habilita logo/gif
					$('.overlay-loading').fadeIn();
				},
				url:'./ajax/formularios.php',
				method:'post', 
				dataType: 'json', 
				data: form.serialize()
			}).done(function(data){
				if(data.sucesso){
					//tudo certo 
					setTimeout(function(){
						//deshabilita logo/gif
						$('.overlay-loading').fadeOut();
						//habilida mensagem
						$('#sucesso').fadeIn();
						setTimeout(function(){
							//deshabilita mensagem
							$('#sucesso').fadeOut();
						},2000)			
					},4000)				
					//
					console.log(data.mensagem);					
					document.getElementById('sucesso').innerHTML = data.mensagem;
					//reset form
					$('#formFormularioCadastrar').trigger("reset");               
					//atualiza marcacao de pagina do menu
					document.getElementById('menu-ativo').innerHTML = "1";  
					//
					window.location="".INCLUDE_PATH_PAINEL;
					//
				}else{
					//algo deu errado.
					setTimeout(function(){
						//deshabilita logo/gif
						$('.overlay-loading').fadeOut();
						//habilida mensagem
						$('#erro').fadeIn();
						setTimeout(function(){
							//deshabilita mensagem
							$('#erro').fadeOut();
						},4000)			
					},6000)	
					//
					console.log(data.mensagem);
					document.getElementById('erro').innerHTML = data.mensagem;
					//reset form
					$('#formFormularioCadastrar').trigger("reset");					
				}
			});	

		}else if(inputIdentificador == "form_FormularioCadastro") {

			//aqui os demais form da pagina principal 
			var form = $(this);

			$.ajax({
				//funcao que executa antes de enviar o formulario  
				beforeSend:function(){
					console.log("Enviando informações");
					//habilita logo/gif
					$('.overlay-loading').fadeIn();
				},
				url:'./ajax/formularios.php',
				method:'post', 
				dataType: 'json', 
				data: form.serialize()
			}).done(function(data){
				if(data.sucesso){
					//tudo certo 
					setTimeout(function(){
						//deshabilita logo/gif
						$('.overlay-loading').fadeOut();
						//habilida mensagem
						$('#sucesso').fadeIn();
						setTimeout(function(){
							//deshabilita mensagem
							$('#sucesso').fadeOut();
						},4000)			
					},6000)				
					//
					console.log(data.mensagem);					
					document.getElementById('sucesso').innerHTML = data.mensagem;					
					//reset form
					$('#formFormularioCadastro').trigger("reset");
				}else{
					//algo deu errado.
					setTimeout(function(){
						//deshabilita logo/gif
						$('.overlay-loading').fadeOut();
						//habilida mensagem
						$('#erro').fadeIn();
						setTimeout(function(){
							//deshabilita mensagem
							$('#erro').fadeOut();
						},4000)			
					},6000)	
					//	
					console.log(data.mensagem);
					document.getElementById('erro').innerHTML = data.mensagem;									
				}
			});	

		//valida identificador form 
		}else if(inputIdentificador == "form_FormularioFaleConosco") {

			//aqui os demais form da pagina principal 
			var form = $(this);

			$.ajax({
				//funcao que executa antes de enviar o formulario  
				beforeSend:function(){
					console.log("Enviando informações");
					//habilita logo/gif
					$('.overlay-loading').fadeIn();
				},
				url:'./ajax/formularios.php',
				method:'post', 
				dataType: 'json', 
				data: form.serialize()
			}).done(function(data){
				if(data.sucesso){
					//tudo certo 
					setTimeout(function(){
						//deshabilita logo/gif
						$('.overlay-loading').fadeOut();
						//habilida mensagem
						$('#sucesso').fadeIn();
						setTimeout(function(){
							//deshabilita mensagem
							$('#sucesso').fadeOut();
						},4000)			
					},6000)		
					//		
					console.log(data.mensagem);					
					document.getElementById('sucesso').innerHTML = data.mensagem;						
					//reset form
					$('#formFormularioFaleConosco').trigger("reset");
				}else{
					//algo deu errado.
					setTimeout(function(){
						//deshabilita logo/gif
						$('.overlay-loading').fadeOut();
						//habilida mensagem
						$('#erro').fadeIn();
						setTimeout(function(){
							//deshabilita mensagem
							$('#erro').fadeOut();
						},4000)			
					},6000)	
					//	
					console.log(data.mensagem);
					document.getElementById('erro').innerHTML = data.mensagem;						
				}
			});	
		
		}
		return false; 
	})

})




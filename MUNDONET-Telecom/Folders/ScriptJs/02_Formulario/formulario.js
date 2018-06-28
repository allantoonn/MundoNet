
$(function(){
   var atual_fs, next_fs, prev_fs;
    
    $('.next').click(function(){
        atual_fs = $(this).parent();
        next_fs = $(this).parent().next();
        
        
        $('#progress li').eq($('fieldset').index(next_fs)).addClass('ativo');
        atual_fs.hide(800);
        next_fs.show(800);
        });
    
    /* VOLTAR ABAIXO */
    
    $('.prev').click(function(){
        atual_fs = $(this).parent();
        prev_fs = $(this).parent().prev();
        
        
        $('#progress li').eq($('fieldset').index(atual_fs)).removeClass('ativo');
        atual_fs.hide(800);
        prev_fs.show(800);
	});
    
	$('#salvar').click(function(){
		$.post("folders/php/processa.php", $("#formulario").serializeArray()).done(function(data){		
			
			//é possível passar informações pelo post passando as variáveis
			//no caso está sendo passado as informações do formulário
			//"data" é a informação que o arquivo php irá retornar
			//e no caso ele retorna tudo o que seria printado com echo
			if(data==null){
				alert(data);
			}else{
				alert("Solicitação registrada com sucesso! Agora é só aguardar o contato de nossa equipe por email ou telefone!");
			}
			$("#formulario").trigger('reset');
		});
	});
});
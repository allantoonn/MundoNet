<! DOCTYPE HTML>
<html lang="pt-br">

<head>
    
    <!-- META DADOS E ICONES -->
    
        <!-- Caracteres Universal UTF-8-->
        <meta charset="utf-8" />
    
        <!-- Responsividade em Scala-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- .META DADOS E ICONES -->
    
    
    
    
    <!-- CSS STYLES -->
    
        <!-- Body -->
        <link rel="stylesheet" href="Folders/StyleCss/01_Body/body.css" />
    
        <!-- Container -->
        <link rel="stylesheet" href="Folders/StyleCss/02_Container/container.css" />
    
        <!-- NavBar -->
        <link rel="stylesheet" href="Folders/StyleCss/03_NavBar/navbar.css" />
    
        <!-- Header -->
        <link rel="stylesheet" href="Folders/StyleCss/04_Header/headerContato.css" />
    
        <!-- Section -->
        <link rel="stylesheet" href="Folders/StyleCss/05_Section/sectionContato.css" />
    	
		<!-- footer -->
		<link rel="stylesheet" href="Folders/StyleCss/06_Footer/footer.css"/>
	
		<!-- hover effects -->
		<link rel="stylesheet" href="Folders/StyleCss/HoverEffects/hover.css" />
    	
		<!-- tooltip -->
		<link rel="stylesheet" href="Folders/StyleCss/tooltip/tooltip.css" />
	<!-- .CSS STYLES -->
    
    
    <!-- JS SCRIPTS -->
        
        <!-- Biblioteca Jquery 3.3.1 -->
        <script src="Folders/ScriptJs/01_BibliotecaJquery/Jquery%203.3.1.js"></script>
    
        <!-- Formulario -->
        <script src="Folders/ScriptJs/02_formulario/formulario.js"></script>
    
    <!-- .JS SCRIPTS -->
    
    
</head>
    
<body>

    <?php
		include("navbar.php");
	?>
 
    <!-- CABEÇALHO-->
    <header>
		<!-- banner quem somos  -->
    
        <!-- Banner -->
        <div class="Banner">
		<center><h1> Faça o contato conosco através do
			formulario abaixo ou utilize nossas redes sociais.</h1></center>
			
		</div>
        <a href="#" ><img id="soc"  src="Folders/Photos/Sociais/yt.png"></a>
		<a href="#" ><img id="soc"  src="Folders/Photos/Sociais/fb.png"></a>
		<a href="#" ><img id="soc"  src="Folders/Photos/Sociais/wt2.png"></a>
    </header>
    <!-- .CABEÇALHO-->
  
	<!-- SEÇÃO DO CONTEUDO -->
    <section class="servicosCont">
		<nav class="conteudo">
			  
			<hgroup>
				<form id="formulario"  method="post" enctype="multipart/form-data" action="#"  name="formulario">
				   
					<ul id="progress" >
						<li class="ativo">Dados de contato</li>
						<li>Detalhes</li>
					</ul>
					 
					<!-- ABAIXO PRIMEIRA PAGINA CADASTRO -->
					<Fieldset>
						<h2> Dados para contato</h2>
						<input type="text" name="nome" placeholder="Nome completo" id="primeiro" />
						<input type="text" name="email" placeholder="Email" id="email"/>
						<input type="text" name="telefone" placeholder="Telefone" id="telefone" />
						<input type="text" name="telefone2" placeholder="Recados" id="telefone2" />
						<input type="button" name="next1" class="next acao" value="proximo">
					</Fieldset>
					 
					 <!-- ABAIXO SEGUNDA PAGINA CADASTRO -->
					<Fieldset>
						<h2> Detalhes do serviço</h2>
						<input type="text" name="assunto" placeholder="Assunto" id="assunto"/>
						<textarea rows="6" name="mensagem" placeholder="Mensagem" id="mensagem"></textarea>
						<input type="button" name="prev" class="prev acao" value="anterior">
						<input type="button" name="next" class="acao"  id="salvar" value="Enviar" >
					</Fieldset>
				
				</form>
			</hgroup>

		</nav>
 
    </section>
	
        
    
	<nav id="footer">
		<h5>Mundo net &copy;</h5>
		<h5>2018</h5>
	</nav>
    
</body>    
    
</html>
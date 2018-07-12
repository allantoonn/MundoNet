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
        <link rel="stylesheet" href="Folders/StyleCss/04_Header/headerServicos.css" />
    
        <!-- Section -->
        <link rel="stylesheet" href="Folders/StyleCss/05_Section/sectionServicos.css" />
    	
		<!-- footer -->
		<link rel="stylesheet" href="Folders/StyleCss/06_Footer/footer.css"/>
	
	<!-- hover effects -->
		<link rel="stylesheet" href="Folders/StyleCss/HoverEffects/hover.css" />
     <!-- .CSS STYLES -->
    	
    <!-- tooltip -->
		<link rel="stylesheet" href="Folders/StyleCss/tooltip/tooltip.css" />
    
    
    <!-- JS SCRIPTS -->
        
        <!-- Biblioteca Jquery 3.3.1 -->
        <script src="Folders/ScriptJs/01_BibliotecaJquery/Jquery%203.3.1.js"></script>
    
        <!-- Biblioteca Jquery 3.3.1 -->
        <script src="Folders/ScriptJs/02_NavBar/Navbar.js"></script>
    
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
        <div class="Banner"></div>
        
        <!-- SubTitulo -->
        <!-- <h5 id="t1"></h5>
		<h5 id="t2">Todos nossos serviços são pensados em você.</h5>
		<h5 id="t3"></h5>
        -->
    </header>
    <!-- .CABEÇALHO-->
  
       <!-- SEÇÃO DO CONTEUDO -->
    <section class="servicosCont">
		<nav class="conteudo">
			<img class="imgservicos" src="Folders/Photos/Banner/6-ferramentas-gratuitas	.png">
			<hgroup>
				<h3>
				<ul>
					<h1><li >Passe o mouse sobre os itens veja os detalhes.	</li></h1>
					<li  class="tooltip">
					<span class="tooltiptext"> Computadores,<br>
					notebooks  <br>
					e estações de trabalho.</span>Realizamos diversos tipos de manutenção em computadores</li><br>
					<!-- -->
					<li  class="tooltip">
					<span class="tooltiptext"> Wifi,<br>
					Switchs <br>
					e configuração de grupos de trabalho.</span>Implementação de redes domésticas e corporativas</li><br>
					<!-- -->
					<li  class="tooltip">
					<span class="tooltiptext"> Troca de componentes, <br>
					Montagem de computador <br>
					e limpeza completa</span>Limpeza e instalação de hardwares</li><br>
					<!-- -->
					<li  class="tooltip">
					<span class="tooltiptext">Instalação de antivirus,<br>
					backup de segurança<br>
					e configuração do windows</span>Instalação de programas, backups e configurações de software</li>
					<!-- -->
				</ul>
				</h3>
			</hgroup>
		</nav>
    </section>
	
        
    
	<nav id="footer">
		<h5>Mundo net &copy;</h5>
		<h5>2018</h5>
	</nav>
    
</body>    
    
</html>
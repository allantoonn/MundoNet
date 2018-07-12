<! DOCTYPE HTML >
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
        <link rel="stylesheet" href="Folders/StyleCss/04_Header/headerQuemSomos.css"/>
        <!-- Section -->
        <link rel="stylesheet" href="Folders/StyleCss/05_Section/sectionQuemsomos.css" />
    	
		<!-- footer -->
		<link rel="stylesheet" href="Folders/StyleCss/06_Footer/footer.css"/>
     <!-- .CSS STYLES -->
    	
    	<!-- hover effects -->
		<link rel="stylesheet" href="Folders/StyleCss/HoverEffects/hover.css" />
    
    
    <!-- JS SCRIPTS -->
        
        <!-- Biblioteca Jquery 3.3.1 -->
        <script src="Folders/ScriptJs/01_BibliotecaJquery/Jquery%203.3.1.js"></script>
    
        <!-- Biblioteca Jquery 3.3.1 -->
        <script src="Folders/ScriptJs/02_NavBar/Navbar.js"></script>
    
    <!-- .JS SCRIPTS  e css interno do mapa -->
    <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
 
    
</head>
    
<body>

    <?php
		include("navbar.php");
	?>
    
    <!-- SEÇÃO DO CONTEUDO -->
    <section class="QuemSomosCont">
          <nav id="conteudo">
		<hgroup>
			<!-- para adicionar hover effect use :  class="hvr-grow-shadow" -->
			<h3><p>
			  
			A MundoNet é uma empresa criada para clientes interessados em serviços tais como,
			manutenções, instalações, formatação e serviços gerais em computadores e redes domesticas.
			  
			</p></h3>
		  
		  
		  </hgroup>

		</nav>
 
    </section>
	
    <!-- CABEÇALHO-->
    <header>
		<nav class="blocoMaps">
		<h2> Onde estamos?</h2>
			
    <!--The div element for the map -->
    <div id="map"></div>
		<script>
			// Initialize and add the map
			function initMap() {
			// The location of Uluru
			var uluru = {lat: -25.344, lng: 131.036};
			// The map, centered at Uluru
			var map = new google.maps.Map(
			document.getElementById('map'), {zoom: 4, center: uluru});
			// The marker, positioned at Uluru
			var marker = new google.maps.Marker({position: uluru, map: map});
	}
		</script>
		<!--Load the API from the specified URL
		* The async attribute allows the browser to render the page while the API loads
		* The key parameter will contain your own API key (which is not needed for this tutorial)
		* The callback parameter executes the initMap() function
		-->
		<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMYfuWHaP0wp3iw-LJ4A3cm4Y96kEm2ew&callback=initMap">
		</script>
		
	</nav>
       
    </header>
    <!-- .CABEÇALHO-->
  
    
        
    
   <nav id="footer">
		<h5>Mundo net &copy;</h5>
		<h5>2018</h5>
	</nav>
    
</body>    
    
</html>
<?php 
	require "../../includes/functions.php"; 
	get_head();
?>

<!--///////////-->
<!-- Debut body-->
<!--///////////-->
<body id="projet-single">
  	<?php get_nav();?>
  	<!-- header -->
	<header style="background-image:url(../../src/img/background/background-atelie.png)">
		<div class="parralax"></div>
			<div class="opacityheader"> 
				<h1>Ateliê do boulanger</h1> 
				<h3 class="normal">Édition</h3>   
			</div>	
	</header>
  <!-- main -->
	<main>
		<div class="container">
		  	<div class="row">
				<!-- images projets -->
				<div class="col-lg-6 col-12 img-projet-single">
					<img class="img-fluid" src="../../src/img/portfolio/02-atelie-item01.jpg" alt="atelie01">
	          		<img class="img-fluid" src="../../src/img/portfolio/02-atelie-item02.png" alt="atelie02">
				</div>
				<!-- textes projets-->
				<div class="offset-lg-1 col-lg-5 block-fixed">		
					<h2>France Panificação</h2>
	          		<p>
	            		<span class="bold">Sao Paulo, Brésil</span>
	          		</p>
	          		<p>Création d'un dépliant pour présenter les produits de France Panificação</p>  
	          		<!-- annotations -->
			        <ul>
			            <li>
			                <h3>Rôle:</h3>
			                <p>Édition</p>
			            </li>
			            <li>
			                <h3>Credits:</h3>
			                <p>Réalisé sous la Direction Artisitique de 
			                <a class="underline" href="https://www.regularswitch.com/#!/"> 
			                  Regular Switch 
			                </a></p>
			            </li>
			        </ul>
					<!-- fermeture projets-->
				</div>
			</div>
		</div>
	</main>

<?php get_footer();?>
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
	<header style="background-image:url(../../src/img/background/background-ortho.png)">
		<div class="parralax"></div>
			<div class="opacityheader"> 
				<h1>Patricia Orthodontie</h1> 
				<h3 class="normal">Webdesign</h3>   
			</div>	
	</header>
  <!-- main -->
	<main>
		<div class="container">
			<div class="row">
				<!-- images projets -->
				<div class="col-lg-6 col-12 img-projet-single">
					<img class="img-fluid" src="../../src/img/portfolio/06-ortho-item01.png" alt="ortho 01">
					<img class="img-fluid" src="../../src/img/portfolio/06-ortho-item02.png" alt="nano">
				</div>
				<!-- textes projets-->
				<div class="offset-lg-1 col-lg-5 block-fixed">		
					<h2>Patricia Orthodontie</h2>
					<p>
						<span class="bold">Lyon, Rhône-Alpes, France</span>
					</p>
					 <p>Création d'un site web autour d'un cabinet d'orthodontie avec une partie explicatif pour les porteurs d'appareil </p>
					<p>Création d'une charte graphique et webdesign</p>  
					<!-- annotations -->
					<ul>
						<li>
							<h3>Rôle:</h3>
							<p>Webdesign</p>
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
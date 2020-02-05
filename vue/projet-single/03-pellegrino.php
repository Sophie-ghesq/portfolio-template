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
	<header style="background-image:url(../../src/img/background/background-pellegrino.png)">
		<div class="parralax"></div>
			<div class="opacityheader"> 
				<h1>Renaud Pellegrino</h1> 
				<h3 class="normal">Webdesign</h3>  
			</div>	
	</header>
  <!-- main -->
	<main>
		<div class="container">
			<div class="row">
			<!-- images projets -->
				<div class="col-lg-6 col-12 img-projet-single">
					<img class="img-fluid" src="../../src/img/portfolio/03-pellegrino-item01.jpg" alt="nano">
				</div>
				<div class="offset-lg-1 col-lg-5 block-fixed">
				<!-- textes projets-->
				<h2>Renaud Pellegrino</h2>
					<p>
						<span class="bold">Paris, France</span>
					</p>
					<p>R. Pellegrino est une marque de savoir faire français autour de la maroquinerie de haute couture</p>
					<p>Création d'un e-commerce sous Prestachop</p>  
					<!-- annotations -->
					<ul>
						<li>
							<h3>Rôle:</h3>
							<p>Webdesign, UI & UX design</p>
						</li>
						<li>
							<h3>Credits:</h3>
							<p>Réalisé sous la Direction Artisitique de 
							<a class="underline" href="https://www.regularswitch.com/#!/"> 
							  Regular Switch 
							</a></p>
						</li>
					</ul>
					<p>
						<a id="websit-lien" href="https://pellegrinoparis.com/fr/">Visit Website</a>
					</p>
				<!-- fermeture projets-->
				</div>
			</div>
		</div>
	</main>

<?php get_footer();?>
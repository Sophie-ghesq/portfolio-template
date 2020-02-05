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
	<header style="background-image:url(../../src/img/background/background-poster.png)">
		<div class="parralax"></div>
			<div class="opacityheader"> 
				<h1>Poster</h1> 
				<h3 class="normal">Design graphique</h3>   
			</div>	
	</header>
  <!-- main -->
	<main>
		<div class="container">
			<div class="row">
			<!-- images projets -->
				<div class="col-lg-6 col-12 img-projet-single">
					<img class="img-fluid" src="../../src/img/portfolio/04-poster-item01.jpg" alt="poster01">
					<img class="img-fluid" src="../../src/img/portfolio/04-poster-item02.jpg" alt="poster02">
					<img class="img-fluid" src="../../src/img/portfolio/04-poster-item03.jpg" alt="poster0>3">
				</div>
				<div class="offset-lg-1 col-lg-5 block-fixed">
				<!-- textes projets-->
				<h2>Poster</h2>
				<p>
					<span class="bold">Monde</span>
				</p>
				<p>Just design thinking...</p>
				<!-- annotations -->
				<ul>
					<li>
						<h3>Rôle:</h3>
						<p>Graphiste</p>
					</li>
				</ul>
				<!-- fermeture projets-->
				</div>
			</div>
		</div>
	</main>

<?php get_footer();?>
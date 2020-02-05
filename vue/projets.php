<?php 
	include "../includes/functions.php"; 
	get_head();
?>
</head>
<!--///////////-->
<!-- Debut body-->
<!--///////////-->
<body id="projets">
	<!--////////-->
	<!--  Nav   -->
	<!--////////-->
	<?php get_nav(); ?>  
	<!--////////-->
	<!-- header -->
	<!--////////-->
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
			  		<div class="opacityheader">
						<h1>work work work</h1>
						<h3>Rihanna</h3>
			 		 </div>
				</div>
			</div>
		</div>
	</header>
	<!--////////-->
	<!-- Projets-->
	<!--////////--> 
	<!-- Main-->  
	<main>
		<div class="row">
		<!-- titres projets -->
			<div class="col-lg-4 col-12">
				<h2>Projets</h2>
			</div>
			<!-- mes filtres --> 
			<div class="col-lg-8 col-12" id="filters">
				<a href="#" data-filter="*" class="active">Tout</a>
				<a href="#" data-filter=".webdesign">Webdesign</a>
				<a href="#" data-filter=".identite">Identité</a>
				<a href="#" data-filter=".edition">Édition</a>
			</div>
		</div>
		<div class="row">
		<?php get_projets(); ?>
		<!-- Autres projets --> 
		<!-- projet 5 --> 
			<div class="col-lg-6 col-md-6 col-12">
				<div class="item">
					<a href="http://parabens.fr/vue/projet-single/05-parabens.php" class="item-wrap">
						<img class="img-fluid" src="http://parabens.fr/src/img/portfolio/05-parabens-cover.png" alt="parabens">
						<div class="work-info">
							<h3>Studio Parabèns</h3>
							<p>Direction Artistique & Webdesign</p>
						</div>
					</a>
				</div>
			</div>
			<!-- projet 6 --> 
			<div class="col-lg-6 col-md-6 col-12">
				<div class="item" data-cat="webdesign">
					<a href="http://parabens.fr/vue/projet-single/06-ortho.php"  class="item-wrap">
						<img class="img-fluid" src="http://parabens.fr/src/img/portfolio/06-ortho-cover.png" alt="patricia orthodontie">
						<div class="work-info">
							<h3>Patricia Orthodontie</h3>
							<p>Webdesign</p>
						</div>
					</a>
				</div>
			</div> 
			<!-- fermeture du row -->
		</div>
	<!-- fermeture main-->   	
	</main>  	


<?php 
	get_footer();
?>

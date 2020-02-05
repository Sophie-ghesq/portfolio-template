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
	<header>
		<div class="parralax"></div>
			<h1>Titre du projet</h1> 
			<h3 class="normal">description</h3>   
	</header>
  <!-- main -->
 	<main>
		<div class="container">
	  		<div class="row">
			<!-- images projets -->
				<div class="col-lg-6 col-12 img-projet-single">
					<img class="img-fluid" src="" alt="Projet-background">
				</div>
				<div class="offset-lg-1 col-lg-5 block-fixed">
				<!-- textes projets-->
				<h2>Projet</h2>
				<p>
					<span class="bold">lieu du projet</span>
				</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo arcu eget purus vehicula facilisis non in eros. Curabitur commodo, dui et commodo hendrerit, est ipsum bibendum ante, sit amet sollicitudin est turpis in massa. Praesent ac elit nec ante rhoncus consequat sed ut eros.</p>
				<p> In eleifend erat consequat libero pretium, sed vehicula turpis consequat.</p>  
				<!-- annotations -->
				<ul>
					<li>
						<h3>Rôle:</h3>
						<p>Lorem ipsum dolor sit amet</p>
					</li>
					<li>
						<h3>Credits:</h3>
						<p>Lorem ipsum dolor sit amet
						<a class="underline" href=""> 
					Lorem
						</a></p>
					</li>
				</ul>
				<p>
					<a id="websit-lien" href="">Visit Website</a>
				</p>
				<!-- fermeture projets-->
				</div>
			</div>
		</div>
	</main>

<?php get_footer();?>
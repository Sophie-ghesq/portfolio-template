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
	<header style="background-image:url(../../src/img/background/background-home.png)">
		<div class="parralax"></div>
			<div class="opacityheader"> 
				<h1>Studio Parabèns</h1> 
				<h3 class="normal">Webdesign & identité visuelle</h3>   
			</div>	
	</header>
  <!-- main -->
	<main>
		<div class="container">
		  	<div class="row">
				<!-- images projets -->
				<div class="col-lg-6 col-12 img-projet-single">
					<img class="img-fluid" src="../../src/img/portfolio/05-parabens-item01.jpg" alt="parabens01">
          			<img class="img-fluid" src="../../src/img/portfolio/05-parabens-item02.jpg" alt="parabens02">
				</div>
				<!-- textes projets-->
				<div class="offset-lg-1 col-lg-5 block-fixed">		
					<h2>Studio Parabèns</h2>
	          		<p>
	            		<span class="bold">Arcachon, Gironde, France</span>
	          		</p>
	          		<p>Parabèns est un studio de design créé par une reveuse qui adorait détester la communication étant petite.</p>
          			<p>Mise en place de la charte graphique, webdesign et UI & UX design</p>  
          			<!-- annotations -->
          			<ul>
            			<li>
              				<h3>Rôle:</h3>
              				<p>Webdesign & identité visuelle</p>
            			</li>
          			</ul>  
					<!-- fermeture projets-->
				</div>
			</div>
		</div>
	</main>

<?php get_footer();?>
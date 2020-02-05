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
			<div class="opacityheader"> 
				<h1>Nano Beach Club</h1> 
				<h3 class="normal">Webdesign</h3>   
			</div>	
	</header>
  <!-- main -->
 	<main>
		<div class="container">
	  		<div class="row">
			<!-- images projets -->
				<div class="col-lg-6 col-12 img-projet-single">
					<img class="img-fluid" src="../../src/img/portfolio/01-nano-item01.png" alt="nano">
				</div>
				<div class="offset-lg-1 col-lg-5 block-fixed">
				<!-- textes projets-->
				<h2>Nanö Beach Club</h2>
				<p>
					<span class="bold">Subauma, Bahia, Brésil</span>
				</p>
				<p>Nanö Beach Club est un hôtel tout confort située les pieds dans l'eau. C'est aussi un mélange entre l'ambiance des nuits "paulistana" avec l'énergie de Tommorrowland.</p>
				<p>Création d'une double identité "noite beach club" et hotel.</p>  
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
					<a id="websit-lien" href="http://www.nanobeach.com.br/">Visit Website</a>
				</p>
				<!-- fermeture projets-->
				</div>
			</div>
		</div>
	</main>

<?php get_footer();?>
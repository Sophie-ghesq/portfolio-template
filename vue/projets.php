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
						<h1>Titre</h1>
						<h3>Description</h3>
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
				<h2>Vos projets</h2>
			</div>
			<!-- mes filtres --> 
			<div class="col-lg-8 col-12" id="filters">
				<a href="#" data-filter="*" class="active">all</a>
				<a href="#" data-filter=".filter1">filter1</a>
				<a href="#" data-filter=".filter2">filter2</a>
				<a href="#" data-filter=".filter3">filter3</a>
			</div>
		</div>
		<div class="row">
		<?php get_projets(); ?>
		<!-- fermeture du row -->
		</div>
	<!-- fermeture main-->   	
	</main>  	


<?php 
	get_footer();
?>

<?php 
	require "/portfolio-template/includes/functions.php"; 
	get_head();
	get_nav(); 
?>

</head>
<body>
<!--////////-->
<!-- header -->
<!--////////-->
<header>
	<h1>Votre nom</h1> 
    <h3 class="normal">Description de votre portfolio</h3>
</header>
<!--////////-->
<!-- Slogan -->
<!--////////-->
<div class="container-fluid">
	<section class="slogan">
    	<div class="row">
        <!-- high five -->
	        <div class="col-lg-4 col-md-4 col-sm-4 bleu" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center">
	         	<img class="icon"  src="" alt="icon1">
	         	<h3>Slogan 1</h3>
	        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo arcu eget purus vehicula facilisis non in eros. Curabitur commodo, dui et commodo </p>
	        </div>
	        <!-- fun -->
	        <div class="col-lg-4 col-md-4 col-sm-4 vert" data-aos="fade-up"  data-aos-duration="1000" data-aos-anchor-placement="top-center" >
            <img class="icon"  src="" alt="icon2">
	        	<h3>Slogan 2</h3>
	        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo arcu eget purus vehicula facilisis non in eros. Curabitur commodo, dui et commodo </p>
	        </div>
	        <!-- future -->
	        <div class="col-lg-4 col-md-4 col-sm-4 rose" data-aos="fade-up" data-aos-duration="1000"data-aos-anchor-placement="top-center">
	        	<img class="icon"  src="" alt="icon3">
	         	<h3>Slogan 3</h3>
	        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo arcu eget purus vehicula facilisis non in eros. Curabitur commodo, dui et commodo </p>
	        </div>
        </div>
    </section>  
</div>
<!--////////-->
<!-- Projets -->
<!--////////-->
<main >
	<!-- titres projets -->
    <h2>Projets récents</h2>
    <div class="row">
    <?php get_projets();?>
    </div>
    <!-- plus de projets-->   
	<div class="row">
        <div class="col-12 projets-plus">
         	<a href="/portfolio-template/vue/projets.html">
            	<h3>Encore plus ...</h3>
          	</a>
        </div>
    </div>
</main>    
<!--////////-->
<!-- About -->
<!--////////-->
<section id="about" class='container'>
    <!-- titre about-->
        <div class="row">     
          	<div class="col-12">
            	<h2>À propos</h2>
            	<hr>
          	</div>
        </div>
       <!-- contenu about-->
        <div class="row"> 
          	<div class="col-12">
            	<h4 class="vert">Sous titre </h4>
            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo arcu eget purus vehicula facilisis non in eros. Curabitur commodo, dui et commodo hendrerit, est ipsum bibendum ante, sit amet sollicitudin est turpis in massa. Praesent ac elit nec ante rhoncus consequat sed ut eros. In eleifend erat consequat libero pretium, sed vehicula turpis consequat. Aliquam consectetur tortor id nulla vestibulum fringilla. Vivamus sollicitudin eleifend efficitur. </p>
            	<h4 class="vert">Sous titre</h4>
            	<p>In ut augue eget augue laoreet convallis. Donec scelerisque ipsum quis fringilla ultrices. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras diam tellus, venenatis vitae magna at, sollicitudin laoreet ante.</p>
          	</div>
        </div> 

    <!-- fermeture section-->
</section>

<?php 
	get_contact();
	get_footer();
?>


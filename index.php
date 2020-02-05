<?php 
	require "includes/functions.php"; 
	get_head();
	get_nav(); 
?>

</head>
<body>
<!--////////-->
<!-- header -->
<!--////////-->
<header>
	<h1>Sophie Ghesquier</h1> 
    <h3 class="normal">Design Graphique & Développement web</h3>
</header>
<!--////////-->
<!-- Slogan -->
<!--////////-->
<div class="container-fluid">
	<section class="slogan">
    	<div class="row">
        <!-- high five -->
	        <div class="col-lg-4 col-md-4 col-sm-4 bleu" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center">
	         	<img class="icon"  src="http://parabens.fr/src/img/icon/logo-black.png">
	         	<h3>High five</h3>
	        	<p>Un travail d’équipe pour créer quelques choses de très spécial entre nous et former une seule et même équipe.</p>
	        </div>
	        <!-- fun -->
	        <div class="col-lg-4 col-md-4 col-sm-4 vert" data-aos="fade-up"  data-aos-duration="1000" data-aos-anchor-placement="top-center" >
	         	<img class="icon"  src="http://parabens.fr/src/img/icon/fun.png">
	        	<h3>Fun</h3>
	        	<p>Colorée, pétillante, jeune pour pouvoir gardez un oeil jeune car c'est garder un oeil ouvert</p>
	        </div>
	        <!-- future -->
	        <div class="col-lg-4 col-md-4 col-sm-4 rose" data-aos="fade-up" data-aos-duration="1000"data-aos-anchor-placement="top-center">
	        	<img class="icon"  src="http://parabens.fr/src/img/icon/future.png">
	         	<h3>Future</h3>
	        	<p>Pensez futur pour imaginer l’avenir ensemble et créer l'évidence</p>
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
         	<a href="http://parabens.fr/vue/projets.html">
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
            	<h4 class="vert">De moi, </h4>
            	<p>Je suis curieuse et passionnée, je ne laisse rien au hasard car je pense que le bon design doit faire sens ett être compris facilement par le plus grand nombre.</p>
            	<h4 class="vert">Mais surtout pour vous !</h4>
            	<p>Pour trouver des solutions graphiques et technologiques qui s'adaptera le mieux à vos besoins et sauront vous demarquer.</p>
          	</div>
        </div> 

    <!-- fermeture section-->
</section>

<?php 
	get_contact();
	get_footer();
?>


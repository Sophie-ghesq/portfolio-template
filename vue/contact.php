<?php 
	require "../includes/functions.php"; 
	get_head();
	get_nav(); 
?>
</head>
<!--///////////-->
<!-- Debut body-->
<!--///////////-->
<body id="contact">
<!-- header -->
    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <h1>Titre / contact</h1>
            <h3>Description</h3>
          </div>
        </div>
      </div>
    </header>
  <!-- main -->
  	<main>
    <!-- row 1/image -->
    <div class="row">
      <!-- row 2/textes -->
      <div class="row col-xl-10 col-lg-10 col-md-10 col-12">
        <div class="offset-xl-6 offset-md-4 col-12">
          <!-- informations -->
          <div class='adresse'>
            <h2>Adresse:</h2> 
            <h3 class="normal">10 rue victor Hugo <br>  Paris</h3> 
          </div> 
          <div class="mail">
            <h2>Mail:</h2> 
            <a href="">
              <h3 class="normal">tonmail@mail.com</h3> 
            </a>
          </div>
          <div class="phone">
            <h2>Telephone:</h2> 
            <h3 class="normal">+33000000000</h3> 
          </div>
          <!-- social icons -->
          <div class="social-icons">
            <h2>Social media:</h2> 
            <a href="">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="">
              <i class="fab fa-github"></i>
            </a>
            <a href="">
              <i class="fab fa-behance"></i>
            </a>
            <a href="">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>
      <!-- fermer row 2 -->  
      </div>
      <!-- mon images -->  

    <!-- fermer row 1 -->     
    </div> 
  </main> 



<?php 
	get_footer();
?>

<?php 
	// head
	function get_head(){
		include "head.php" ;		
	}

	//nav
	function get_nav(){
		include "nav.php" ;
	}

	//projets
	function get_projets(){
		include "item-projets.php" ;
	}

	//projets
	function get_contact(){
		include "contact.php" ;
	}

	//footer
	function get_footer(){
		include "footer.php" ;
	}

	//404
	function redirectionErreur404(){
    	include "../vue/404.html";
  	}
 
  	if(!file_exists('../index.php')){
    	redirectionErreur404();
  	}

?>
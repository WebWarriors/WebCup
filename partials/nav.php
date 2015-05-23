<?php
if(is_logged_in()){
    $class="account";
    $page="account.php";
    $text="Mon compte";
}else{
    $class="login";
    $page="login.php";
    $text="Connexion";
}
?>
<div class="navbar-fixed">
	<nav class="light-blue lighten-1" role="navigation">
    	<div class="nav-wrapper container">
    		<a id="logo-container" href="index.php" class="brand-logo"><?php echo WEBSITE_NAME ?></a>
	      	<ul class="right hide-on-med-and-down">
	        	<li class="set_active('reserve')"><a  href="reserve.php">Réservez-votre place</a></li>
	      	</ul>
            <ul class="right hide-on-med-and-down">
                <li class="set_active('<?php echo $class; ?>')"><a  href="<?php echo $page; ?>"><?php echo $text; ?></a></li>
            </ul>


	      	<ul id="nav-mobile" class="side-nav">
	        	<li class="set_active('reserve')"><a  href="reserve.php">Réservez-votre place</a></li>
	      	</ul>
	      	<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    	</div>
  	</nav>
</div>

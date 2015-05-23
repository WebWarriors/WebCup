<div class="navbar-fixed">
	<nav class="light-blue lighten-1" role="navigation">
    	<div class="nav-wrapper container">
    		<a id="logo-container" href="index.php" class="brand-logo"><?php echo WEBSITE_NAME ?></a>
	      	<ul class="right hide-on-med-and-down">
	        	<li class="set_active('reserve')"><a  href="reserve.php">Réservez-votre place</a></li>
	      	</ul>
            <?php if(is_logged_in()): ?>
                <ul class="right hide-on-med-and-down">
                    <li class="set_active('account')"><a  href="account.php">Mon compte</a></li>
                </ul>
                <ul class="right hide-on-med-and-down">
                    <li><a href="logout.php">Déconnexion</a></li>
                </ul>
            <?php else: ?>
                <ul class="right hide-on-med-and-down">
                    <li class="<?= set_active('login'); ?>"><a href="login.php">Inscription|Connexion</a></li></ul>
                <ul class="right hide-on-med-and-down"> 
            <?php endif; ?>

	      	<ul id="nav-mobile" class="side-nav">
	        	<li class="set_active('reserve')"><a  href="reserve.php">Réservez-votre place</a></li>
	      	</ul>
            <?php if(is_logged_in()): ?>
                    <li class="set_active('account')"><a  href="account.php">Mon compte</a></li>
                    <li><a href="logout.php">Déconnexion</a></li>
            <?php else: ?>
                    <li class="<?= set_active('login'); ?>"><a href="login.php">Inscription|Connexion</a></li></ul> 
            <?php endif; ?>
	      	<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    	</div>
  	</nav>
</div>

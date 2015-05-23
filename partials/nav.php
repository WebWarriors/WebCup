<div class="navbar-fixed">
	<nav class="light-blue lighten-1" role="navigation">
    	<div class="nav-wrapper container">
    		<a id="logo-container" href="index.php" class="brand-logo"><?php echo WEBSITE_NAME ?></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
	      	<ul class="right hide-on-med-and-down">
	        	<li class="set_active('reserve')"><a  href="reserve.php">Réservez-votre place</a></li>
                <?php if(is_logged_in()): ?>
                    <li class="set_active('account')"><a  href="account.php">Mon compte</a></li>
                    <li><a href="logout.php">Déconnexion</a></li>
                </ul>
                <?php else: ?>
                    <li class="<?= set_active('login'); ?>"><a href="login.php"><strong>Inscription|Connexion</strong></a></li>
                </ul>
            <?php endif; ?>
            <ul class="side-nav" id="mobile-demo">
                <li class="set_active('reserve')"><a  href="reserve.php">Réservez-votre place</a></li>
                <?php if(is_logged_in()): ?>
                    <li class="set_active('account')"><a  href="account.php">Mon compte</a></li>
                    <li><a href="logout.php">Déconnexion</a></li>
                <?php else: ?>
                    <li class="<?= set_active('login'); ?>"><a href="login.php"><strong>Inscription|Connexion</strong></a></li>
                <?php endif; ?>
            </ul>
        </div>
  	</nav>
</div>

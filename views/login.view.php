<?php $title = "Vous identifier" ?>
<?php include('includes/constants.php'); ?>
<?php include('partials/header.php'); ?>

<div class="container">
	<div class="row">
		<div class="col s6">
			<?php if(!empty($errors)): ?>
            	<div class="col s12 m12">
            		<br>
	          		<div class="card red darken-1">
	            		<div class="card-content white-text valign-wrapper">
		              		<i class="small mdi-alert-error"> </i ><strong class="valign"><?php echo implode("<br/>",$errors); ?></strong>
		            	</div>
		          	</div>
		        </div>
        	<?php endif; ?>
			<br>
			<h4 class="light-blue-text">S'enregistrer</h4>
			<div class="row">
				<form method="POST" action="login.php" class="col s12">
					<div class="row">
					    <div class="input-field col s6">
					    	<input name="first_name" id="first_name" type="text" class="validate" value="<?php echo get_input("first_name"); ?>">
					    	<label for="first_name">Prénom</label>
					    </div>
					    <div class="input-field col s6">
					    	<input name="last_name" id="last_name" type="text" class="validate" value="<?php echo get_input("last_name"); ?>">
					    	<label for="last_name">Nom</label>
					    </div>
					</div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="address" id="address" type="text" class="validate" value="<?php echo get_input("address"); ?>">
                            <label for="address">Adresse Postale</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <select name="island" class="browser-default" value="<?php echo get_input("island"); ?>">
                                <option value="" disabled selected>Votre île</option>
                                <option value="1">Grande Comore</option>
                                <option value="2">Madagascar</option>
                                <option value="3">Maurice</option>
                                <option value="4">Mayotte</option>
                                <option value="5">Réunion</option>
                                <option value="6">Rodrigues</option>
                                <option value="7">Seychelles</option>
                            </select>
                        </div>

                        <div class="input-field col s6">
                        <select name="gender" class="browser-default" value="<?php echo get_input("gender"); ?>">
                            <option value="" disabled selected>Sexe</option>
                            <option value="1">Femme</option>
                            <option value="2">Homme</option>
                            <option value="3">Autre</option>
                        </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="phone" id="phone" type="tel" class="validate" value="<?php echo get_input("phone"); ?>">
                            <label for="phone">Numéro de téléphone</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="mail" id="mail" type="email" class="validate" value="<?php echo get_input("mail"); ?>">
                            <label for="mail">Email</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="password" id="password" type="password" class="validate" >
                            <label for="password">Mot de passe</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="password_confirm" id="password_confirm" type="password" class="validate">
                            <label for="password_confirm">Confirmez le mot de passe</label>
                        </div>
                    </div>
                    <div class="row">
                        <button class="btn waves-effect waves-light" type="submit" name="register">Inscription
                            <i class="mdi-content-send right"></i>
                        </button>
                    </div>
				</form>
			</div>
		</div>
		<div class="col s6">
            <?php if(!empty($error)): ?>
                <div class="col s12 m12">
                    <br>
                    <div class="card red darken-1">
                        <div class="card-content white-text valign-wrapper">
                            <i class="small mdi-alert-error"> </i ><strong class="valign"><?php echo implode("<br/>",$error); ?></strong>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
			<br>
			<h4 class="light-blue-text">Se connecter</h4>
			<div class="row">
				<form method="POST" action="login.php" class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="email" id="email" type="email" class="validate" value="<?php echo get_input('email'); ?>">
                            <label for="email">Email</label>
                        </div>
                    </div>
					<div class="row">
					    <div class="input-field col s12">
					    	<input name="passwd" id="passwd" type="password" class="validate">
					    	<label for="passwd">Mot de passe</label>
					    </div>
					</div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light" type="submit" name="login">Connexion<i class="mdi-content-send right"></i>
                            </button>
                        </div>
                    </div>
				</form>
			</div>
		</div>
	</div>	
</div>

	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>

<script>
    $(document).ready(function(){
        $('.slider').slider({full_width: true});
        $(".button-collapse").sideNav();
    });
</script>

<?php include('partials/footer.php'); ?>

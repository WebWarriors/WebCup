<?php $title = "Vous identifier" ?>
<?php include('includes/constants.php'); ?>
<?php include('partials/header.php'); ?>

<?php include('partials/footer.php'); ?>

<div class="container">
	<div class="row">
		<div class="col s6">
			<br>
			<h4 class="light-blue-text">S'enregistrer</h4>
			<div class="row">
				<form class="col s12">
					<div class="row">
					    <div class="input-field col s6">
					    	<input id="first_name" type="text" class="validate">
					    	<label for="first_name">First Name</label>
					    </div>
					    <div class="input-field col s6">
					    	<input id="last_name" type="text" class="validate">
					    	<label for="last_name">Last Name</label>
					    </div>
					</div>
					<div class="row">
					    <div class="input-field col s12">
					    	<input id="username" type="text" class="validate">
					    	<label for="username">Username</label>
					    </div>
					</div>
					<div class="row">
					    <div class="input-field col s12">
					    	<input id="password" type="password" class="validate">
					    	<label for="password">Password</label>
					    </div>
					</div>
					<div class="row">
						<div class="input-field col s12">
						    <input id="email" type="email" class="validate">
						    <label for="email">Email</label>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="col s6">
			<br>
			<h4 class="light-blue-text">Se connecter</h4>
			<div class="row">
				<form class="col s12">
					<div class="row">
					    <div class="input-field col s12">
					    	<input id="password" type="password" class="validate">
					    	<label for="password">Password</label>
					    </div>
					</div>
					<div class="row">
						<div class="input-field col s12">
						    <input id="email" type="email" class="validate">
						    <label for="email">Email</label>
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

<?php include('partials/footer.php'); ?>

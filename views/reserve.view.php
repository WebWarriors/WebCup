<?php $title = "Réservez votre place" ?>
<?php include('includes/constants.php'); ?>
<?php include('partials/header.php'); ?>

<div class="container">
	<div class="row">
		<div class="col s9">
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
		<div class="col s3">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium itaque nesciunt excepturi, ea, veniam error culpa quia voluptas aperiam ullam porro ex temporibus natus eveniet, nulla perspiciatis quos ratione rem esse ipsam explicabo. Reprehenderit, odit, debitis. Recusandae ipsum libero, ut, est sit ipsa explicabo? Qui molestiae laboriosam cupiditate, rerum repellendus.
		</div>
	</div>
</div>

<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>

    <script>
        $(document).ready(function(){
            $(".button-collapse").sideNav();
        });
    </script>

<?php include('partials/footer.php'); ?>
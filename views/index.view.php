<?php include('includes/constants.php'); ?>
<?php include('partials/header.php'); ?>

<div class="slider fullscreen">
	<ul class="slides">
		<li>
		    <img src="src/2.jpg"> <!-- random image -->
			<div class="caption center-align">
				    <h3>This is our big Tagline!</h3>
			    	<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
			</div>
		</li>
		<li>
		    <img src="src/3.jpg"> <!-- random image -->
			<div class="caption center-align">
			    <h3>Left Aligned Caption</h3>
			    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
			</div>
		</li>
	</ul>
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
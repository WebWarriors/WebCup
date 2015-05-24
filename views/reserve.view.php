<?php $title = "Réservez votre place" ?>
<?php include('includes/constants.php'); ?>
<?php include('partials/header.php'); ?>

<div class="container">
	<div class="row">
		<div class="col s7">
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
			<h4 class="light-blue-text">S'abonner à <?= WEBSITE_NAME ?></h4>
			<div class="row">
				<form method="POST" action="login.php">
                    <div class="row valign-wrapper">
                        <select name="island" id="listing" class="browser-default col s7 m7 valign" value="<?php echo get_input("island"); ?>" onchange="priceText();">
                            <option value="0" disabled selected>Durée de l'abonnement</option>
                            <option value="1">1 mois</option>
                            <option value="2">6 mois</option>
                            <option value="3">1 an</option>
                        </select>
                        <div class="col s4 m4">
                        	<div class="card blue lighten-3">
			            		<div class="card-content white-text">
				              		<strong id="price" class="valign">Choisissez une offre</strong>		
				            	</div>
				          	</div>
                        </div>
					</div>
					<div class="row">
                        <button class="btn waves-effect waves-light" type="submit" name="valid">Valider
                            <i class="mdi-content-send right"></i>
                        </button>
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
    	function priceText(){
		    sel = document.getElementById('listing');
		    var price = document.getElementById('price');
		    if ( sel.options[sel.selectedIndex].value == "1" ) {
     			price.innerHTML = "15 IO";
		    }
		    else if ( sel.options[sel.selectedIndex].value == "2" ) {
		    	price.innerHTML = "75 IO";
		    }
		    else if ( sel.options[sel.selectedIndex].value == "3" ) {
		    	price.innerHTML = "135 IO";
		    }
		}
        $(document).ready(function(){
            $(".button-collapse").sideNav();

            
        });
    </script>

<?php include('partials/footer.php'); ?>
<?php $title = "Réservez votre place" ?>
<?php include('includes/constants.php'); ?>
<?php include('partials/header.php'); ?>


<div class="container">
	<div class="row">
        <?php
        if(empty($_SESSION['user_id'])){
            require("views/login.form.php");
        }else{
            require("views/reserve.form.php");
        }
        ?>
		<div class="col s5 m5">
			<h4>Parcourez l'Océan Indien en <strong>moins de 2 heures 30 minutes</strong> !</h4>
			<p>
				<strong>Souscrivez</strong> rapidement à un abonnement afin de pouvoir voyager sur notre réseau sans attendre, à un n'importe quel moment, quelque soit la météo !
			</p>
			<p>
				Toutes les trentes minutes, une nouvelle capsule arrive et pourra vous transporter sur les îles avoisinnantes, en passant sous les eaux de l'Océan Indien.
			</p>
		</div>
	</div>	
</div>

<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>

    <script type="text/javascript">

        var data = ["<?php echo implode('" ,"', $local_currency); ?>"];
    	function priceText(){
		    sel = document.getElementById('listing');
		    var price = document.getElementById('price');
		    if ( sel.options[sel.selectedIndex].value == "1" ) {
     			price.innerHTML = data[0];
		    }
		    else if ( sel.options[sel.selectedIndex].value == "2" ) {
		    	price.innerHTML = data[1];
		    }
		    else if ( sel.options[sel.selectedIndex].value == "3" ) {
		    	price.innerHTML = data[2];
		    }
		}
        $(document).ready(function(){
            $(".button-collapse").sideNav();
        });
    </script>

<?php include('partials/footer.php'); ?>
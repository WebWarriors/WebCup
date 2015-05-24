<?php include('includes/constants.php'); ?>
<?php $title = WEBSITE_NAME ?>
<?php include('partials/header.php'); ?>



<div class="parallax-container">
    <div class="parallax">
        <img src="src/HL06.jpg">
    </div>
</div>

<div class="container">
	<br>
	<section>
		<div class="row">
			<h4 class="light-blue-text"> Le TransIsland, votre nouveau transporteur</h4>
			<div class="col s6 m12">
                <p> Montez à bord de capsules disposées dans un tube à air comprimé !
                    <br/> Appréciez le silence produit par l'abscence de rail : c'est la technologie du magnétisme!
                    <br/> Vous pouvez désormais voyager d’une île à l’autre de l’Océan Indien sous les mers et au dessus
                    des terres, à une vitesse maximale de 2500 km/h. Il est certain que le temps de vos trajet sera
                    considérablement réduit. Par exemple, pour un voyage "Réunion-Mayotte" vous ne mettrez plus que 7 minutes
                    au lieu de 25 minutes en Hoax.

                    Un véritable moyen de se déplacer rapidement et simplement ! Pas de procédures pénalisantes, vous entrez, et hop, vous voyagez !

                    <br/> <br/>
                    Le TransIsland se veut être écologique :
                    <br/>• il est auto suffisant : son énergie est fournie grâce aux panneaux solaires qui recouvrent les tubes terrestres et les stations.
                    <br/>• silencieux et émettant peu de vibrations, votre nouveau transport ne nuit pas à la santé de la faune et la flore avoisinante.
                    <br/><br/>

                    Il est  </p>
                    <ul>
                        <li>Sécurisé : Aucun risques de collisions, des voies réservées, des lignes minutieusement étudiées</li>
                        <li>Rapide et innovant : Observez les merveilles des fond marins lors de votre traversée !</li>
                        <li>Peu cher : Mais tout aussi confortable, professionels, vous aprécierez l'accès à tous vos services terrestres, familles vous aimerez nos box d'i</li>
                        <li>Plus pratique</li>
                        <li>Resistant aux intempéries, tsunamis, tremblements de terre</li>
                        <li>Durable</li>
                    </ul>
                </div>
            </div>
    </section>
</div>
<div class="container">
    <br>
    <section>
        <div class="row">
            <h4 class="light-blue-text"> Un service aussi pour les pros ! </h4>
            <div class="col s8 m8">
                <p> Nous avons aussi pensé aux pros :
                    <br/> <br/>
                    Chers entrepreneurs, <br/> Désormais, vos marchandises pourront elles aussi voyager ultra-rapidement.
                    <br/>Nous vous mettons à disposition des frêts pour expédier et réceptionner vos biens.
                </p>
            </div>
        </div>
    </section>
</div>

    <div class="parallax-container">
        <div class="parallax">
            <img src="src/6.jpg">
        </div>
    </div>

    <br>

<div class="container">
    <section>
        <div class="row">
            <h4 class="light-blue-text"> Prêts à aider !  </h4>
            <div class="col s8 m8">
                <p>TransIsland permettra aux centres médicaux de réaliser des dons d'organes dans les meilleures conditions de temps.
                </p>
            </div>
        </div>
    </section>
</div>
    <div class="parallax-container">
        <div class="parallax">
            <img src="src/4.jpg">
        </div>
    </div>


<!-- Back top Top -->
<div class="fixed-action-btn back-to-top" style="bottom: 45px; right: 24px;display: none;">
	<a class="btn-floating btn-large blue">
		<i class="large mdi-navigation-expand-less"></i>
	</a>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.js"></script>
<script>
	$(document).ready(function(){
    	$('.parallax').parallax();
    	$(".button-collapse").sideNav();

	    var offset = 250;
	    var duration = 300;
	    jQuery(window).scroll(function() {
	        if (jQuery(this).scrollTop() > offset) {
	            jQuery('.back-to-top').fadeIn(duration);
	        } else {
	            jQuery('.back-to-top').fadeOut(duration);
	        }
	    });

	    jQuery('.back-to-top').click(function(event) {
	        event.preventDefault();
	        jQuery('html, body').animate({scrollTop: 0}, duration);
	        return false;
	    })
	});
</script>
<?php include('partials/footer.php'); ?>

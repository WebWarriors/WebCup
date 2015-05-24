<?php include('includes/constants.php'); ?>
<?php $title = WEBSITE_NAME ?>
<?php include('partials/header.php'); ?>



<div class="parallax-container">
    <div class="parallax">
        <img src="src/HL06.jpg">
    </div>
</div>

<div class="container" style="text-align: justify;">
	<br>
	<section>
		<div class="row">
			<h4 class="light-blue-text"> Le TransIsland, votre nouveau transporteur</h4>
                <p> Montez à bord de capsules disposées dans un tube à air comprimé !
                    <br/> Appréciez le silence produit par l'abscence de rail : c'est la technologie du magnétisme!
                    <br/> Vous pouvez désormais voyager d’une île à l’autre de l’Océan Indien sous les mers et au dessus
                    des terres, à une vitesse maximale de 2500 km/h. Il est certain que le temps de vos trajet sera
                    considérablement réduit. Par exemple, pour un voyage "Réunion-Mayotte" vous ne mettrez plus que 7 minutes
                    au lieu de 25 minutes en Hoax.

                    Un véritable moyen de se déplacer rapidement et simplement ! Pas de procédures pénalisantes, vous entrez, et hop, vous voyagez !

                    <br/> <br/>
                    <b> <u>Le TransIsland se veut être écologique</u> </b>
                    <br/>• il est auto suffisant : son énergie est fournie grâce aux panneaux solaires qui recouvrent les tubes terrestres et les stations.
                    <br/>• silencieux et émettant peu de vibrations, votre nouveau transport ne nuit pas à la santé de la faune et la flore avoisinante.
                    <br/><br/>

                    <b> <u>Il est </u> </b>
                    <ul>
                        <li><u>Sécurisé :</u> Aucun risques de collisions, des voies réservées, des lignes minutieusement étudiées</li>
                        <li><u>Rapide et innovant :</u> Observez les merveilles des fond marins lors de votre traversée !</li>
                        <li><u>Peu cher :</u> Mais tout aussi confortable, professionels, vous aprécierez l'accès à tous vos services terrestres, familles vous aimerez nos boxs d'isolement et le jardin d'enfant, pressé, vous serez heureux de pourvoir voyager sans vous faire embêter.</li>
                        <li><u>Plus pratique :</u> Pas fouille, pas de tiquets, de gadgets ou autres choses emcombrantes, vous n'avez cas poser votre bras ! (Puce UUH3 obligatoire dans tout les états de classe 3 depuis 2039.)  </li>
                        <li>A l'épreuve de la puissance de l'homme nature, agrée VTR799. </li>
                    </ul>

        </div>
    </section>
</div>
<div class="container" style="text-align: justify;">
    <section>
        <div class="row">
            <h4 class="light-blue-text"> Un service aussi pour les professionels ! </h4>
            <div class="col s8 m8">
                <p> <br/> <br/>
                    Chers entrepreneurs, <br/> Désormais, vos marchandises pourront elles aussi voyager ultra-rapidement.
                    <br/>Nous vous mettons à disposition des frêts pour expédier et réceptionner toutes vos cargaisons.
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

<div class="container" style="text-align: justify;">
    <section>
        <div class="row">
            <h4 class="light-blue-text"> Prêts à aider !  </h4>
            <div class="col s8 m8">
                <p>TransIsland c'est engagé auprés des centres médicaux de l'Océan Indien en leur garantisssant un accès prioritaire, facilitant le transport d'organes, de malades, et d'expériences.
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

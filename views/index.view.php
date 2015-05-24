<?php
session_start();
require("includes/functions.php");
include('includes/constants.php');
include('partials/header.php'); ?>

<div class="slider fullscreen">
    <ul class="slides">
        <li>
            <img src="src/1.jpg">
            <div class="caption center-align">
                <h3>Découvrez le TransIslands</h3>
                <h5 class="light grey-text text-lighten-3">Un mode de transport révolutionaire !</h5>
                <div class="row">
                    <div class="offset-s9 col s12">
                        <div class="col s6 m4 l5 ">
                            <div class="card transparent darken-1">
                                <div class="card-content white-text .right-align">
                                    <h5> Tout l'océan Indien à portée de main dès </h5> <h4> <b> 5 io </h4> </b> </h4> <?= "(".money_converter_local(5, $_SESSION['money_code']).")";?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <img src="src/3.jpg">
            <div class="caption center-align">
                <h3>Besoin d'explications ? </h3>
                <h5 class="light grey-text text-lighten-3">Cliquez ici, nous vous en disons un peu plus</h5>
                <a href="about.php#" class="waves-effect waves-light btn">En savoir plus</a>
            </div>
        </li>
        <li>
            <img src="src/HL03.jpg">
            <div class="caption center-align">
                <h3>Les pros, c'est aussi pour vous</h3>
                <h5 class="light grey-text text-lighten-3">Fini les longues attentes pour l'envoie et la réception de marchandises.</h5>
                <a href="about.php#" class="waves-effect waves-light btn">En savoir plus</a>
                <br /> <br /> <br /> <br /> <br /> <br />
                <p>
                <div class="row">
                    <div class="offset-s9 col s12">
                        <div class="col s6 m4 l5 ">
                            <div class="card transparent darken-1">
                                <div class="card-content white-text .right-align">
                                    Découvrez nos offres avantageuses dès <br /> <h4> <b> 0,5 io /KG </b> </h4> de marchandise ! <?= "(".money_converter_local(0.5, $_SESSION['money_code']).")";?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </p>
            </div>
        </li>
        <li>
            <img src="src/2.JPG">
            <div class="caption center-align">
                <h3>Un convoi toutes les 30 minutes</h3>
                <h5 class="light grey-text text-lighten-3">On vous offre l'ultra disponibilité!</h5>
            </div>
        </li>
        <li>
            <img src="src/7.jpg">
            <div class="caption center-align">
             <a href="about.php#" class="waves-effect waves-light btn">Fini les longs trajets !</a>
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
<?php include('partials/footer.php'); ?>

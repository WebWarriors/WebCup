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
            </div>
        </li>
        <
        <li>
            <img src="src/H24.JPG">
            <div class="caption center-align">
                <h3>Un convoi toutes les 30 minutes</h3>
                <h5 class="light grey-text text-lighten-3">On vous offre l'ultra disponibilité!</h5>
            </div>
        </li>
        <
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

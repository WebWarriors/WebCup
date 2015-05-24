<?php
include('includes/constants.php');
include('partials/header.php'); ?>

<div class="container">
<ul class="collapsible popout" data-collapsible="arcordion">
    <li>
        <div class="collapsible-header"> À partir de Grande Comore </div>
        <div class="collapsible-body">
            <p>Madagascar : 868km, 21 min<br/><br/>
           Maurice : 2097km, 50 min<br/>
            Mayotte : 243km, 6 min<br/>
            Réunion : 1871km, 45 min<br/>
           Rodrigues : 2714km, 65 min<br/>
            Seychelles : 1556km, 37 min</p>
        </div>
    </li>
    <li>
        <div class="collapsible-header">À partir de Madagascar</div>
        <div class="collapsible-body">
            <p>Grande Comore : 868km, 21 min <br/>
                Maurice : 1169km, 28 min <br/>
                Mayotte : 685km, 16 min <br/>
                Réunion : 943km, 23 min <br/>
                Rodrigues : 1786km, 43 min
                Seychelles : 2484km, 60min</p>
        </div>
    </li>
    <li>
        <div class="collapsible-header">À partir de Maurice </div>
        <div class="collapsible-body">
            <p>Grande Comore : 2097km, 50 min
                <br/>Madagascar : 1169km, 28 min
                <br/>Mayotte : 1854km, 44 min
                <br/> Réunion : 226km, 5 min
                <br/>Rodrigues : 617km, 15 min
                <br/>Seychelles : 2053km, 49 min
            </p>
        </div>
    </li>
    <li>
        <div class="collapsible-header">À partir de Mayotte </div>
        <div class="collapsible-body">
            <p>Grande Comore : 243km, 6 min
                <br/>Madagascar : 685km, 16 min
                <br/>Maurice : 1854km, 44 min
                <br/> Réunion : 1628km, 39 min
                <br/>Rodrigues : 2471km, 59min
                <br/>Seychelles : 1799km, 43 min
            </p>
        </div>
    </li>
    <li>
        <div class="collapsible-header">À partir de La Réunion </div>
        <div class="collapsible-body">
            <p>Grande Comore : 1871km, 45 min
                <br/>Madagascar : 943km, 23 min
                <br/>Maurice : 226km, 5 min
                <br/>Mayotte : 1628km, 39 min
                <br/>Rodrigues : 843km, 20 min
                <br/>Seychelles : 1827km, 44 min
            </p>
        </div>
    </li>
    <li>
        <div class="collapsible-header">À partir de Rodrigues </div>
        <div class="collapsible-body">
            <p>Grande Comore : 2714km, 65 min
                <br/>Madagascar : 2484km, 60 min
                <br/>Maurice : 617km, 15 min
                <br/>Mayotte : 2471km, 59 min
                <br/> Réunion : 843km, 20 min
                <br/>Seychelles : 1880km, 45 min
            </p>
        </div>
    </li>
    <li>
        <div class="collapsible-header">À partir des Seychelles </div>
        <div class="collapsible-body">
            <p>Grande Comore : 1556km, 37 min
                <br/>Madagascar : 2484km, 60 min
                <br/>Seychelles : 2053km, 49 min
                <br/>Mayotte : 1799km, 43 min
                <br/> Réunion : 1827km, 44 min
                <br/>Rodrigues : 1880km, 45 min
            </p>
        </div>
    </li>
</ul>
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

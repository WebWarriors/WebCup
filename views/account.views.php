<?php
include('includes/constants.php');
include('partials/header.php'); ?>

<div class="row">
    <div class="col s12 m6">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Vos informations</span>
                <p>
                    <li> Prénom : <?= $_SESSION['f_name'];?> </li>
                    <li> Nom : <?= $_SESSION['l_name'];?> </li>
                    <li> Genre : <?= $gender;?> </li>
                    <li> Votre île de résidence : <?= $island; ?> </li>
                    <li> Téléphone : <?= $phone; ?> </li>
                </p>

            </div>
            <div class="card-action">
                <a href="#">Modifier mes infos</a>
            </div>
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

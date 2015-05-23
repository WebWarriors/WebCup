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
                <?php if($edit): ?>
                    <form method="POST" action="account.php" >
                    <li> Votre île de résidence :
                        <select name="gender" class="browser-default" value="<?php echo get_input("gender"); ?>">
                            <option value="" disabled selected>Sexe</option>
                            <option value="1">Femme</option>
                            <option value="2">Homme</option>
                            <option value="3">Autre</option>
                        </select></li>
                    <li> Téléphone : <input name="phone" id="phone" type="tel" class="validate" value="<?= $phone; ?>"> </li>
                <?php else: ?>
                    <li> Votre île de résidence : <?= $island; ?> </li>
                    <li> Téléphone : <?= $phone; ?> </li>
                <?php endif; ?>
                </p>

            </div>
            <div class="card-action">
                <?php if($edit): ?>
                    <button  type="submit" name="edit_infos">Enregistrer mes infos</form>
                <?php else: ?>
                    <form method="POST" action="account.php" ><button  type="submit" name="edit">Modifier mes infos</form>
                <?php endif; ?>
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

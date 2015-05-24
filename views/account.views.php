<?php
include('includes/constants.php');
include('partials/header.php'); ?>

<div class="row">
    <div class="col s6 m3">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Vos informations</span>
                <p>
                    <li> Prénom : <?= $_SESSION['f_name'];?> </li>
                    <li> Nom : <?= $_SESSION['l_name'];?> </li>
                    <li> Genre : <?= $gender;?> </li>
                <?php if(!empty($_POST['edit'])): ?>
                    <form method="POST" action="account.php" >
                     <div class="input-field col s12">
                        <li> Email :
                            <input name="mail" id="mail" type="email" class="validate" value="<?= $mail; ?>">
                        </li>
                    </div>
                    <div class="input-field col s12">
                        <li> Adresse :
                            <input name="address" id="address" type="text" class="validate" value="<?= $address; ?>">
                        </li>
                    </div>
                    <li> <div class="row">
                            Votre île de résidence :
                            <select name="island" class="browser-default card blue-grey darken-1" >
                                <option class="white-text" value="<?= $island_id; ?>" disabled selected><?= $island; ?></option>
                                <option class="white-text" value="1">Grande Comore</option>
                                <option class="white-text" value="2">Madagascar</option>
                                <option class="white-text" value="3">Maurice</option>
                                <option class="white-text" value="4">Mayotte</option>
                                <option class="white-text" value="5">Réunion</option>
                                <option class="white-text" value="6">Rodrigues</option>
                                <option class="white-text" value="7">Seychelles</option>
                            </select>
                            </div>
                    </li>
                    <div class="input-field col s12">
                        <li> Téléphone :
                                    <input name="phone" id="phone" type="tel" class="validate" value="<?= $phone; ?>">
                        </li>
                    </div>
                <?php else: ?>
                    <li> Adresse email : <?= $mail; ?></li>
                    <li> Adresse : <?= $address; ?></li>
                    <li> Votre île de résidence : <?= $island; ?> </li>
                    <li> Téléphone : <?= $phone; ?> </li>
                <?php endif; ?>
                </p>

            </div>
            <div class="card-action">
                <?php if(!empty($_POST['edit'])): ?>
                    <button  type="submit" name="edit_infos" value="edit">Enregistrer mes infos</form>
                <?php else: ?>
                    <form method="POST" action="account.php" ><button  type="submit" name="edit" value="edit">Modifier mes infos</form>
                <?php endif; ?>
            </div>
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

<div class="col s5 offset-m1">
    <?php if(!empty($error)): ?>
        <div class="col s12 m12">
            <br>
            <div class="card red darken-1">
                <div class="card-content white-text valign-wrapper">
                    <i class="small mdi-alert-error"> </i ><strong class="valign"><?php echo $error; ?></strong>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <br>
    <h4 class="light-blue-text">Se connecter</h4>
    <div class="row">
        <form method="POST" action="login.php" class="col s12">
            <div class="row">
                <div class="input-field col s12">
                    <input name="email" id="email" type="email" class="validate" value="<?php echo get_input('email'); ?>">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input name="passwd" id="passwd" type="password" class="validate">
                    <label for="passwd">Mot de passe</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light" type="submit" name="login">Connexion<i class="mdi-content-send right"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
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
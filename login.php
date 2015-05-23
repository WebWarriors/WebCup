<?php
require("views/login.view.php");

 	//Vérifie le 'submit'
	if(isset($_POST['register'])){
        //Vérifie que les champs ont étés remplis
        if(not_empty(['first_name', 'last_name', 'mail', 'address', 'gender', 'phone', 'password', 'password_confirm'])){
            //Contient l'ensemble des erreurs
            $errors = [];
            extract($_POST);
            if(mb_strlen($first_name) < 3)
                $errors[] = "Votre prénom doit faire au moins trois caractères.";
            if(mb_strlen($last_name) < 3)
                $errors[] = "Votre nom de famille doit faire au moins trois caractères.";
            if(!preg_match("/([^0-9])/", $phone))
                $errors[] = "Format de numéro de téléphone incorrect.";
			if(! filter_var($mail, FILTER_VALIDATE_EMAIL))
                $errors[] = "Adresse email invalide.";
			if(mb_strlen($password) < 6){
                $errors[] = "Votre mot de passe doit faire au moins six caractères.";
            }else{
                if($password != $password_confirm)
                    $errors[] = "Les deux mots de passes ne correspondent pas.";
            }
			if(is_already_in_use("mail", $mail, 'users'))
                $errors[] = "L'adresse email choisie est déjà utilisée.";

			if(count($errors) == 0){
                $user_data = array(
                    "f_name" => $first_name,
                    "l_name" => $last_name,
                    "mail" => $mail,
                    "address" => $adress,
                    "gender" => $gender,
					"phone" => $phone,
					"passwd" => $passwd
				);
				if(user_register($user_data)){
                    clear_input_data();
                    redirect('index.php');
                }else{
                    save_input_data();
                    $message = "Error, retry.";
                }

			}else{
                save_input_data();
            }
		}else{
            save_input_data();
            $errors[] =  "Veuillez remplir tous les champs";
        }
    }
?>
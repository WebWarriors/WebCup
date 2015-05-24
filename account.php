<?php
session_start();
require("includes/functions.php");

$user_data = find_user_by_id($_SESSION['user_id']);
foreach($user_data as $data){
    extract($data);
}

$gender_fields = array(
    "F" => "Femme",
    "H" => "Homme",
    "U" => "Indéterminé",
);
$gender = strtr($gender, $gender_fields);
$island_id = island_id_name($island);

if(!empty($_POST['edit_infos'])){
    if(not_empty(['mail', 'address', 'phone'])) {
        if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))
            $errors[] = "Adresse email invalide.";
        if(count($errors) == 0) {
            $update['mail'] = $_POST['mail'];
            $update['address'] = $_POST['address'];
            if (!empty($_POST['island'])) {
                $update['island'] = $_POST['island'];
                $_SESSION['money_code'] = country_to_curency(island_id_name($_POST['island']));
            }
            $update['phone'] = $_POST['phone'];
            $update['id'] = $_SESSION['user_id'];
            $_SESSION['mail'] = $_POST['mail'];
            update_user_by_id($update);
            redirect('account.php');
        }

    }else{
        $errors[]="Des champs sont vides ...".print_r($_POST);
    }
}
require("views/account.views.php");
?>
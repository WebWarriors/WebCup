<?php
session_start();
require("includes/functions.php");

<?php
$gender_fields = array(
    "F" => "Femme",
    "H" => "Homme",
    "U" => "Indéterminé"
);
$user_data = find_user_by_id($_SESSION['user_id']);
foreach($user_data as $data){
    $address = $data['address'];
    $island = $data['island'];
    $gender = strtr($data['gender'], $gender_fields);
    $phone = $data['phone'];
}

if(!empty($_POST['infos'])){
    if(! filter_var($mail, FILTER_VALIDATE_EMAIL))
        $errors[] = "Adresse email invalide.";
    if(count($errors) == 0) {
        if ($address != $_POST['address'])
            user_update("address", $_POST[$address]);
        if($island != $_POST['island'])
            user_update("island", $_POST['island']);
        if($phone != $_POST['phone'])
            user_update("phone", $_POST['phone']);
    }else{
        save_input_data();
    }
}
require("views/account.views.php");

?>
<?php
session_start();
require("includes/functions.php");
if(!isset($_SESSION['user_id'])){
    header("Location:login.php");
}

$formules = array(
    "1mois" => 15,
    "6mois" => 75,
    "1an"   => 90
);

foreach ($formules as $price){
    $local_currency[] = $price." IO <br /> (".money_converter_local($price, $_SESSION['money_code']).")";
}

require("views/reserve.view.php");

?>
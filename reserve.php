<?php
session_start();
require("includes/functions.php");
if(!isset($_SESSION['user_id'])){
    header("Location:login.php");
}

$formules = return_subscriptions();
foreach ($formules as $price){
    $local_currency[] = $price['price']." IO <br /> (".money_converter_local($price['price'], $_SESSION['money_code']).")";
}

require("views/reserve.view.php");

?>
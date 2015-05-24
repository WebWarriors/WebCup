<?php
session_start();
require("includes/functions.php");
$_SESSION['page'] = "reserve.php";
$formules = return_subscriptions();
foreach ($formules as $price){
    $local_currency[] = $price['price']." IO <br /> (".money_converter_local($price['price'], $_SESSION['money_code']).")";
}

require("views/reserve.view.php");

?>
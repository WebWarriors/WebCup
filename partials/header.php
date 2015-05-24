<?php
if(!empty($_GET['c'])){
    $array = array(
        "eu" => "EUR",
        "sc" => "SCR",
        "km" => "KMF",
        "mu" => "MUR",
        "mg" => "MGA"
    );
    $_SESSION['money_code'] = strtr($_GET['c'], $array);
}

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="description" content="">
    <meta name="author" content="Melissa BOYER, Fabien BOUCHAIN, Arnaud PANAPADEATCHY">
    <title>
      <?php echo isset($title) ? $title : WEBSITE_NAME ?>
    </title>

    <link rel="stylesheet" href="assets/css/materialize.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <?php include('partials/nav.php'); ?>
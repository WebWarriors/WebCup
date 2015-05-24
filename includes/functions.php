<?php

function return_subscriptions(){
    $db = connexion_bdd();
    foreach($db->query("SELECT * FROM `subscription`") as $data){
        $subs[] = $data;
    }
    return $subs;
}

function money_converter_local($io, $local_currency){

    $currency_changes = array(
        "EUR" => 0.67,
        "SCR" => 9.93,
        "KMF" => 329.61,
        "MUR" => 25.82,
        "MGA" => 2344.28
    );

    $local_change = strtr($local_currency, $currency_changes);
    $amount = $io*$local_change;
    return $amount." ".$local_currency;
}

function island_id_name($mixed){
    $island_tab = array(
        1 => "Grande Comore",
        2 => "Madagascar",
        3 => "Maurice",
        4 => "Mayotte",
        5 => "Réunion",
        6 => "Rodrigues",
        7 => "Seychelles"
    );
    if (ctype_digit($mixed)) {
        return strtr($mixed, $island_tab);
    }else{
        while ($island = current($island_tab)) {
            if ($island == $mixed) {
                $id = key($island_tab);
            }
            return $id;
        }
    }
}


if(!function_exists('update_user_by_id')) {
    function  update_user_by_id($update, $obj = "")
    {
        $db = connexion_bdd();
        if (empty($obj)) {
            if (empty($update['island']))
                $sql = "UPDATE `users` SET `mail` = :mail, `address` = :address, `phone` = :phone WHERE `id` = :id";
            else
                $sql = "UPDATE `users` SET `mail` = :mail, `address` = :address, `island` = :island, `phone` = :phone WHERE `id` = :id";
            $q = $db->prepare($sql);
        } else {
            $q = $db->prepare("UPDATE `users` SET `passwd` = :passwd WHERE `id` = :id");
        }

        if ($q->execute($update))
            return true;
        else
            return false;
    }
}

function  update_user_by_id($update, $obj = ""){
    $db = connexion_bdd();
    if(empty($obj)) {
        if (empty($update['island']))
            $sql = "UPDATE `users` SET `mail` = :mail, `address` = :address, `phone` = :phone WHERE `id` = :id";
        else
            $sql = "UPDATE `users` SET `mail` = :mail, `address` = :address, `island` = :island, `phone` = :phone WHERE `id` = :id";
        $q = $db->prepare($sql);
    }else{
        $q = $db->prepare("UPDATE `users` SET `passwd` = :passwd WHERE `id` = :id");
    }

    if ($q->execute($update))
        return true;
    else
        return false;
}

function requete($array) {
    while(current($array)) {
        $keys[] = "`".key($array)."`";
        $prepare[] = " ?";
        $infos[] = $array[key($array)];
        next($array);
    }
}

if(!function_exists('find_user_by_id')){
    function find_user_by_id($key){
        $db = connexion_bdd();

        $q = $db->prepare('SELECT * FROM users WHERE id= ?');
        $q->execute([$key]);
        $data = $q->fetch(PDO::FETCH_OBJ);
        $q->closeCursor();
        return $data;
    }
}

if(!function_exists('get_input')){
    function get_input($key){
        return !empty($_SESSION['input'][$key]) ? e($_SESSION['input'][$key]) : null;
    }
}

if(!function_exists('e')){
    function e($string){
        if($string){
            return htmlspecialchars($string);
        }
    }
}

if(!function_exists('is_logged_in')){
    function is_logged_in(){
        return (!empty($_SESSION['user_id']));
    }
}
if(!function_exists('user_logout')){
    function user_logout($page = "index.php"){
        session_start ();
        session_unset ();
        session_destroy ();
        redirect($page);
    }
}

if(!function_exists('clear_input_data')){
    function clear_input_data(){
        if(isset($_SESSION['input'])){
            $_SESSION['input'] = [];
        }
    }
}

if(!function_exists('redirect_intent_or')){
    function redirect_intent_or($default_url){
        if($_SESSION['page']){
            $url = $_SESSION['page'];
            $_SESSION['page'] = null;
        }else{
            $url = $default_url;
        }
        redirect($url);
    }
}

if(!function_exists('not_empty')){
    function not_empty($fields = []){
        if(count($fields) != 0){
            foreach($fields as $field){
                if(empty($_POST[$field]) || trim($_POST[$field]) == ""){
                    return false;
                }
            }
            return true;
        }else{
            return false;
        }
    }
}

if(!function_exists('redirect')){
    function redirect($page){
        header('Location:'.$page);
        exit();
    }
}

function set_active($file, $class = "active"){
    $script = explode('/', $_SERVER['SCRIPT_NAME']);
    $page = array_pop($script);

    if($page == $file.'.php'){
        return $class;
    }else{
        return "";
    }
}

function save_input_data(){
    foreach($_POST as $key => $value){
        if(strpos($key, 'password') === false){
            $_SESSION['input'][$key] = $value;
        }
    }
}

function user_register($array_user_info){
    $db = connexion_bdd();
    try{
        $sql = $db->prepare("INSERT INTO `users` (`f_name`, `l_name`, `mail`, `address`, `island`, `gender`, `phone`, `passwd`) VALUES (:f_name, :l_name, :mail, :address, :island, :gender, :phone, :passwd)");
    }catch(PDOException $e){
        exit('<b>Error : '. $e->getLine() .' :</b> '. $e->getMessage());
    }
    if($sql->execute($array_user_info)){
        $sql = "SELECT `id` FROM `users` WHERE `mail` = ".$array_user_info['mail'];
        foreach($db->query($sql) as $row){
            $_SESSION['user_id'] = $row['id'];
        }
        return true;
    }else{
        return false;
    }
}

function find_user_by_id($key){
    $db = connexion_bdd();

    $q = $db->prepare('SELECT * FROM `users` WHERE id= ?');
    $q->execute([$key]);

    $data = $q->fetchAll();;
    $q->closeCursor();
    return $data;
}

function is_already_in_use($field, $value, $table){
    $db = connexion_bdd();
    $q = $db->prepare("SELECT `id` FROM `$table` WHERE `$field` = ?");
    $q->execute([$value]);
    $count = $q->rowCount();
    $q->closeCursor();
    return $count;
}

function user_login($user_mail, $passwd){
    $db = connexion_bdd();
    try{
        $sql = $db->prepare("SELECT `id`, `f_name`, `l_name`, `mail`, `island` FROM `users` WHERE `mail` = ? AND `passwd` = ?");
        $sql->execute(array($user_mail, md5($passwd)));
        $answer = $sql->fetchAll();
    }catch(PDOException $e){
        exit('<b>Error : '. $e->getLine() .' :</b> '. $e->getMessage());
    }
    sleep(1);
    if($answer){
        $_SESSION['user_id'] = $answer[0]['id'];
        $_SESSION['f_name'] = $answer[0]['f_name'];
        $_SESSION['l_name'] = $answer[0]['l_name'];
        $_SESSION['mail'] = $answer[0]['mail'];
        $_SESSION['money_code'] = country_to_curency($answer[0]['island']);
        return TRUE;
    }else{
        return FALSE;
    }
}

function country_to_curency($country){
    $money_code = array(
        "Grande Comore" => "KMF",
        "Madagascar" => "MGA",
        "Maurice" => "MUR",
        "Mayotte" => "EUR",
        "Réunion" => "EUR",
        "Rodrigues" => "MUR",
        "Seychelles" => "SCR"
    );
    return strtr($country, $money_code);
}

if(!function_exists('connexion_bdd')){
    function connexion_bdd(){
        $BDD_hote="localhost";
        $BDD_nmDB="mac";
        $BDD_user="mac";
        $BDD_pass="664259sdSZ4u00x";
        $BDD_options= array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', //Permet d'entrer les valeurs en utf-8 pour le support des accents et caractères spéciaux
        );
        try {
            $bdd = new PDO('mysql:host='.$BDD_hote.';dbname='.$BDD_nmDB, $BDD_user, $BDD_pass, $BDD_options);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }catch (PDOException $e) {
            die ('Erreur' . $e->getMessage());
        }
        return $bdd;
    }
}

if(!function_exists('set_active')) {
    function set_active($file, $class = "active")
    {
        $script = explode('/', $_SERVER['SCRIPT_NAME']);
        $page = array_pop($script);

        if ($page == $file . '.php') {
            return $class;
        } else {
            return "";
        }
    }
}
?>
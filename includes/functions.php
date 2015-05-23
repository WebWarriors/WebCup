<?php

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
function user_logout($page = "index.php"){
    session_start ();
    session_unset ();
    session_destroy ();
    redirect($page);
}

function clear_input_data(){
    if(isset($_SESSION['input'])){
        $_SESSION['input'] = [];
    }
}

function redirect_intent_or($default_url){
    if($_SESSION['page']){
        $url = $_SESSION['page'];
        $_SESSION['page'] = null;
    }else{
        $url = $default_url;
    }
    redirect($url);
}

function not_empty($fields = []){
    if(count($fields) != 0){
        foreach($fields as $field){
            if(empty($_POST[$field]) || trim($_POST[$field]) == ""){
                return false;
            }
        }
        return true;
    }
}

function redirect($page){
    header('Location:'.$page);
    exit();
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
        if( ($key['password']) === false){
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
    global $db;

    $q = $db->prepare('SELECT name, pseudo, email, twitter, facebook, promo, github, site, sex, city, bio, avatar FROM users WHERE id= ?');
    $q->execute([$key]);

    $data = $q->fetch(PDO::FETCH_OBJ);
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
        $sql = $db->prepare("SELECT `id`, `f_name`, `l_name`, `mail` FROM `users` WHERE `mail` = ? AND `passwd` = ?");
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
        return TRUE;
    }else{
        return FALSE;
    }
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

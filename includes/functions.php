<?php

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
        if( ($key, 'password') === false){
            $_SESSION['input'][$key] = $value;
        }
    }
}

function user_register($array_user_info){
    $db = connexion_bdd();
    extract($array_user_info);
    try{
        $sql = $db->prepare("INSERT INTO `users` (`f_name`, `l_name`, `mail`, `address`, `gender`, `phone`, `passwd`) VALUES (:f_name, :l_name, :mail, :address, :gender, :phone, :passwd)");
        $sql->execute($array_user_info);
    }catch(PDOException $e){
        exit('<b>Error : '. $e->getLine() .' :</b> '. $e->getMessage());
    }
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

if(!function_exists('save_input_data')){
    function connexion_bdd(){
        $BDD_hote="54.217.208.79";
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

	function set_active($file, $class = "active"){
		$script = explode('/', $_SERVER['SCRIPT_NAME']);
		$page = array_pop($script);
	
		if($page == $file.'.php'){
			return $class;
		}else{
			return "";
		}
	}
?>

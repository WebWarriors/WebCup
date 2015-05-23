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
?>
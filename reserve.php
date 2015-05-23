<?php  
	if(isset($_SESSION['user_id'])){
		require("views/reserve.view.php");
	}else{
		header("Location:login.php");
	}
?>
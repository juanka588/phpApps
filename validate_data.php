<?php
	$name="juan";
	$email="juanka588@hotmail.es";
	if(isset($_POST["contact_name"])){
		echo "parametros name: " . $_POST["contact_name"] . " <br />email: " . $_POST["email"];
	}else{
		header("Location: index.php?error=bad_credentials");
	}
?>
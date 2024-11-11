<?php

if($_SERVER['REQUEST_METHOD']==['GET']){
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	if(empty($email) && empty($password)){
		echo"Fill your Data to login!!";
	}else if(empty($email)){
		echo"the email is empty!";
	}else if(empty($password)){
		echo"the password is empty!";
	}else{
		echo"Welcom";
	}
}else{
    echo"the request is POST not GET!";	
}

?>
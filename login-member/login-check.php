<?php
require_once('config.php');
$var_username = $_POST['username'];
$var_password = $_POST['password'];
$sql_check="select * from member where 
			username='".$var_username."' and aktif='Y'";
$result = mysql_query($sql_check);
$getUser = mysql_num_rows($result);
$getDataUser = mysql_fetch_array($result);

if($getDataUser > 0){
	
	if (password_verify($var_password,$getDataUser['password']))
	{

    if($getDataUser["aktif"] == 'Y'){
    if($getDataUser["level"] == 'member'){

		session_start();
		$_SESSION['id_member']=$getDataUser['id_member'];
		$_SESSION['username']=$getDataUser['username'];
		$_SESSION['password']=$getDataUser['password'];
		$_SESSION['level']=$getDataUser['level'];
		header('location: index.php?hal=dashboard');
        exit();

	}else if($getDataUser["level"] == 'admin'){

		session_start();
		$_SESSION['username']=$getDataUser['username'];
		$_SESSION['password']=$getDataUser['password'];
		$_SESSION['level']=$getDataUser['level'];
		header('location: kasir/index.php?hal=dashboard');
        exit();
}
	
	}
	else
	{
		header('location: login.php?action=failed');
	}
	
}
else
{
	header('location: login.php?action=failed');
}

}
else
{
	header('location: login.php?action=fail');
}


?>
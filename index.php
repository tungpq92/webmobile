<?php 
	session_start();
	include "lib/connection.php";
	include "lib/database.php";
	include "lib/controller.php";
	//---
	$controller = isset($_GET["controller"])?$_GET["controller"]:"Home";
	//ham ucfirst de viet hoa ky tu dau tien, de ky hieu vd product thanh Product
	$controller = ucfirst($controller)."Controller";
	$action = isset($_GET["action"])?$_GET["action"]:"index";
	$controllerPath = "controllers/$controller.php";

	if(file_exists($controllerPath))
	{
		include $controllerPath;
		$obj = new $controller();
		$obj->$action();
	}
	//---
 ?>
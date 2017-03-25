<?php
	session_start();
	require_once("controller/HomeController.php");

	$controller = new HomeController();

	$controller->init();
?>
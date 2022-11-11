<?php

	require  __DIR__ . '/vendor/autoload.php';
	include "app/Usuario.php"; 
	
	
	if(!isset($_POST['credential']) and !isset($_POST['g_csrf_token']) ){
		header('location: index.php');
	}


	if($_POST['g_csrf_token'] != $_COOKIE['g_csrf_token'] ){
		header('location: index.php');
	}
	
	$client = new Google_Client(['client_id' => '1044330575067-vs9kepcr4cg472r7oi9hvjuasa3p8hct.apps.googleusercontent.com']);  

	$payload = $client->verifyIdToken($_POST['credential']);

	if (isset($payload)) {
	  
		$sessaoUsuario = new Usuario();

		$res = explode('=', $payload['picture']);
		$sessaoUsuario->login($payload['email'], $payload['given_name'], $payload['family_name'],  $payload['picture'] );
		header('location: index.php');

	}
	
	
	
	 
	 
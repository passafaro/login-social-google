<?php

	include "app/Usuario.php"; 

	$sessaoUsuario = new Usuario();
	$sessaoUsuario->encerrarSessao();
	header('location: index.php');

	
	
	
	 
	 
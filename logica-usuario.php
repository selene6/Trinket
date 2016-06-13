<?php
session_start();
function usuarioEstaLogado() {
	return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario() {
  if(!usuarioEstaLogado()) {
  	echo"<script language='javascript' type='text/javascript'>alert('Você não tem acesso a esta funcionalidade.');window.location.href='cadastro.php';</script>";
 	die();
  }
}

function usuarioLogado() {
	return $_SESSION["usuario_logado"];
}

function logaUsuario($email) {
	$_SESSION["usuario_logado"] = $email;
}

function logout() {
	session_destroy();
	session_start();
}
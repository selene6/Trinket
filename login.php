<?php 
require_once ("banco-usuario.php");
require_once("logica-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
if($usuario == null) {
	echo"<script language='javascript' type='text/javascript'>alert('Usuário ou senha inválido.');window.location.href='home.php';</script>"; 
} else {
	logaUsuario($usuario["email"]);
	echo"<script language='javascript' type='text/javascript'>alert('Usuário logado com sucesso.');window.location.href='index.php';</script>";
}
die();
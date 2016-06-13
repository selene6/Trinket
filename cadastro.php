<?php
	$email = "";
	$senha = "";

 
?>
<?php require_once("cabecalho.php")?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php">Trinket</a>
        </div>
	</div>
</nav>
</br>
</br>

<img src="imagens/logo.png" style="position: absolute"/>
<div style="margin-left: 300px; margin-top: -50px"> 
	<h1>Cadastro Trinket</h1>
	<form class="form-horizontal" method="post" action="cadastro-banco.php">
	  <fieldset>
		<div class="form-group">
		  <label for="inputEmail" class="col-lg-2 control-label">Email:</label>
		  <div class="col-lg-5">
			<input type="text" class="form-control" id="txtEmail" placeholder="Email" name="email" value="<?=$email?>" required/>
		  </div>
		</div>
		<div class="form-group">
		  <label for="inputSenha" class="col-lg-2 control-label">Senha:</label>
		  <div class="col-lg-5">
			<input type="password" class="form-control" id="txtSenha" placeholder="Senha" name="senha" value="<?=$senha?>" required/>
		  </div>
		</div>
		<div class="form-group">
		  <div class="col-lg-10 col-lg-offset-2">
			<button type="submit" class="btn btn-primary">Salvar</button>
			<button type="reset" class="btn btn-danger">Cancelar</button>
			<a href="home.php" class="btn btn-default">Voltar</a>
		  </div>
		</div>
	  </fieldset>
	</form>
</div>
<hr>
<?php require_once("rodape.php")?>
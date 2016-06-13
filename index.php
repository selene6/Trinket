<?php
$conexao = mysqli_connect("localhost", "root", "", "trinket");
?>
<?php require_once("cabecalho.php")?>
<!-- Navigation -->
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
                <a class="navbar-brand" href="index.php">Trinket</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Adicionar produto</a>
                    </li>
                    <li>
                        <a href="#">O que tem pra trocar?</a>
                    </li>
					<li>
                        <a href="#">Sobre</a>
                    </li>
                </ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="logout.php"><b>Logout</b></a>
					</li>
				</ul>	
			</div>
        </div>
        <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer" style="background-image: url(imagens/logo.png);  background-repeat: no-repeat; background-color: white;"/>
            <h1 style="color: black; font-family: 'Georgia', 'Palatino', 'serif'; margin-left: 200px;">Bem Vindo a Trinket</h1>
            <p style="color: black; font-family: 'Georgia', 'Palatino', 'serif'; margin-left: 200px;">Um site feito para trocas de forma rápida, segura e inteligente.</p>
            </p>
        </header>
		<hr>
    </div>
<?php require_once("rodape.php")?>
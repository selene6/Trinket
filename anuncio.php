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
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Serviços</a>
                    </li>
                    <li>
                        <a href="#">Contato</a>
                    </li>
					<li>
                        <a href="#">Sobre</a>
                    </li>
                </ul>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Buscar">
					</div>
					<button type="submit" class="btn btn-default">Buscar</button>
				</form>
				
			</div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">PS4
                    <small>Vale a pena trocar!</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="imagens/ps4.png" alt="">
            </div>

            <div class="col-md-4">
                <h3>Descrição do Produto</h3>
                <p>PS4 em excelente estado de conservação, unico dono, nunca derrubado, trato ele melhor do que minha mulher.</p>
                <h3>Aceito os itens Abaixo:</h3>
                <ul>
                    <li>Filhotes de Capitão Caverna</li>
                    <li>Boneca Inflável</li>
                </ul>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Propostas Recebidas</h3>
            </div>
			<div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                   <img class="img-responsive portfolio-item" src="imagens/boneca.png" alt="">
                    <div class="caption">
                        <h3 style="text-align: center">Boneca Inflável Tetéia</h3>
                        <p>Tenho interesse no seu ps4..</p>
						<div class="form-group">
							<label for="comment">Comentário:</label>
							<textarea class="form-control" rows="5" id="comment"></textarea>
						</div>
                        <p>
                            <a href="#" class="btn btn-primary" style="margin-left: 20px">Quero Trocar</a> <a href="#" class="btn btn-danger">Recusar</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
	</div>
<?php require_once("rodape.php")?>

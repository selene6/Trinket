<?php require_once("cabecalho.php")?>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1549346198708666',
      xfbml      : true,
      version    : 'v2.6'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
    // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = '';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1549346198708666',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.2' // use version 2.2
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Bem Vindo!  Carregando informações.... ');
    FB.api('/me', function(response) {
      console.log('Seu Login foi bem sucedido: ' + response.name);
      document.getElementById('status').innerHTML =
        'Obrigado por se conectar, ' + response.name + '!';
    });
	
  }
</script>

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
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
				<ul id="login-dp" class="dropdown-menu">
					<li>
						<div class="row" style="margin-left: 10px; margin-right: 10px">
							<form class="form" role="form" method="post" action="login.php" accept-charset="UTF-8" id="login-nav">
								<fb:login-button autologoutlink="true">Realizar login com minha conta do Facebook</fb:login-button>
								<div id="status">
								</div>
								</br>
								<h4>Login Trinket</h4>
								<div class="form-group">
									<label class="sr-only" for="exampleInputEmail2">Email</label>
									<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email" name="email" required>
								</div>
								<div class="form-group">
									<label class="sr-only" for="exampleInputPassword2">Senha</label>
										<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Senha" name="senha" required>
                                        <div class="help-block text-right"><a href="contato.php">Esqueceu sua senha ?</a></div>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-block" name="entrar">Entrar</button>
								</div>
							</form>
						</div>
						<div class="bottom text-center">
							Novo aqui ? <a href="cadastro.php"><b>Cadastre-se</b></a>
						</div>
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
            <p><a href="cadastro.php" class="btn btn-primary btn-large" style="color: white; margin-left: 200px;">Cadastre-se</a>
            </p>
        </header>
		<hr>
    </div>
<?php require_once("rodape.php")?>

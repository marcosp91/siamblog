<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <title>Siam Brasil Blog</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="/css/bootstrap/bootstrap.min.css" rel='stylesheet'>
        <link href="/css/estilos.css" rel='stylesheet'>  
      
        
        <script src="/js/jquery/jquery-3.2.1.min.js"></script>
        <script src="/js/bootstrap/bootstrap.min.js"></script>
        <!-- <script src="js/script.js"></script> -->
        <link href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ route('index') }}">
                <img src="images/resize-logo.png">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('index') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.siambrasil.com.br">Loja Online</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#footer">Contato</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Estou procurando..." aria-label="Search">
                                <button class="btn btn-outline-default my-2 my-sm-0" type="submit">Procurar</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        	
		 <!-- Footer -->
        <footer id="footer" class="footer">
            <section class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-md-6">
                            <div class="footer-head">
                               <h4>Não perca nenhum post!</h4>
                               <p>Cadastre-se para receber em primeira mão nossas novidades.</p>
                            </div>
                            <div class="footer-panel">
                                <form class="form-row align-items-center" method="POST" action="{{route('index.emailcaption')}}">
                                    {{ csrf_field() }}
                                    <div class="col-sm-9 my-1">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                               <div class="input-group-text">@</div>
                                            </div>
                                            <input type="email" name="email" class="form-control" placeholder="Digite aqui seu email" required>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <input type="hidden" name="l1" value="l1">
                                        <button type="submit" class="btn btn-default">Cadastrar</button>
                                    </div>
                                </form>
                            </div>
                            <div class="footer-head">
                               <h4>Nossas Redes Sociais</h4>
                            </div>
                            <div class="footer-panel">
                                <ul class="list-socials">
                                    <li><a href="#"><img src="../images/icons/facebook.png"></a></li>
                                    <li><a href="#"><img src=""><img src="../images/icons/instagram.png"></a></li>
                                    <li><a href="#"><img src=""><img src="../images/icons/youtube.png"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-6">
                            <div class="footer-head">
                               <h4>Envie uma mensagem sua</h4>
                            </div>
                            <div class="footer-panel mob">
                               	<form  method="POST" action="{{route('index.emailcaption')}}">
                                    {{ csrf_field() }}
                                  	<div class="form-group">
                                      <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" required>
                                  	</div>
	                                <div class="form-group">
	                                    <input type="email" name="email" class="form-control" placeholder="Digite seu email" required>
	                                </div>
	                                <div class="form-group">
	                                    <textarea class="form-control" name="mensagem" rows="3"></textarea>
	                                </div>
	                                <button type="submit" class="btn btn-default btn-lg btn-block">Enviar</button>
                               </form>
                            </div>            
                        </div>
                  	</div>
               	</div>
            </section>
        </footer>
	</body>
</html>

    
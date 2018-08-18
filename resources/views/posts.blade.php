<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <title>Siam Brasil Blog -  @yield('titulo')</title>
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

                
         <section class="wrapper">
                 <div class="container">
                     <div class="row">
                         <div class="col-sm-8 col-lg-8 col-xs-10 pt-2">
                             @yield('painelMensagens')
                         </div>

                         <div class="col-sm-4 col-lg-4 pl-5 pt-2">
                             <!-- Título Painel -->
                             <div class="card text-center">
                                 <h1 class="card-header">Mais Recentes</h1>
                             </div>

                             <!-- Side Widget -->
                             <div class="card-wrapper my-4">
                                 <a  href="{{ route('exames-essenciais') }}" class="hov-card">
                                    <div class="card-post-heading">
                                       <div class="card-title">
                                          <h3>
                                             Quais exames são essenciais para fazer antes de começar uma dieta e praticar exercícios físicos?
                                          </h3>
                                       </div>
                                       <div class="card-text">
                                          <p>
                                             Como poucos sabem, o item principal e me arriscarei de dizer que o mais importante antes de começar uma dieta e exercícios físicos são os exames [...]
                                          </p>
                                       </div>
                                       <div class="card-link text-right">
                                          <span href="#" class=""> Continuar lendo...</span>
                                       </div>
                                    </div>
                                 </a>
                             </div>

                           <!-- Side Widget -->
                             <div class="card-wrapper my-4">
                                 <a  href="{{ route('exames-essenciais') }}" class="hov-card">
                                    <div class="card-post-heading">
                                       <div class="card-title">
                                          <h3>
                                              Procurando encontrar um novo estilo para ter com o seu cabelo?
                                          </h3>
                                       </div>
                                       <div class="card-text">
                                       <p>
                                              No mundo em que vivemos hoje, a liberdade de ter o cabelo do jeito, cor e estilo que você quer é muito mais fácil do que alguns anos atrás [...]
                                          </p>
                                       </div>
                                       <div class="card-link text-right">
                                          <span href="#" class=""> Continuar lendo...</span>
                                       </div>
                                    </div>
                                 </a>
                             </div>
                         </div>
                     </div>
                 </div>
             </section>

             <section class="blog-banner-promo pt-2">
                 <div class="container">
                    <div class="row">
                       <div class="col-sm-8 col-xs-3">
                          <div class="banner-promo">
                             <a href="#">
                                <img src="/images/siambrasil/promo_ziam_natural.png" class="img-fluid">
                             </a>
                          </div>
                       </div>
                    </div>
                 </div>
             </section>
             
             <section class="facebook-comments">
                 <div class="container">
                    <div class="row">
                       <div class="col-sm-8 col-xs-3">
                          <h3>Facebook Comentarios</h3>
                          <!-- Your embedded comments code -->
                          <div class="fb-comments" data-href="https://www.facebook.com/SIAM-Brasil-1804590993193590/" data-numposts="6" data-width="100%" style="display:block;" fb-xfbml-state="rendered">
                          </div>
                       </div>
                    </div>
                 </div>
             </section>
             

        
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


  
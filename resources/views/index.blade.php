@extends('template.header')

@section('wrapper')
    
        <div class="container-fluid pb-2">
            <div class="row">
                <div class="col-sm-12">
                    @if (\Session::has('mensagemErro'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="text-center">
                                <strong>Por favor,</strong> Preencha seu e-mail corretamente.
                            </div>
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="text-center">
                                <strong>Por favor,</strong> Preencha seu e-mail corretamente.
                            </div>
                        </div>
                    @endif
                    @if (\Session::has('mensagemSucesso'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="text-center">
                                <strong>Bem Vindo!</strong> Enviamos o cupom de desconto para seu e-mail.
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        
        <!-- Modal Form -->
        <div class="container">
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog" data-backdrop="static">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                             <div style="margin:0 auto;">
                                 <h4 class="text-center">Deseja ganhar um <strong style="color: purple;">super desconto</strong> em nossa loja online?</h4>
                             </div>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="text-left">
                                <p><strong>Conte um pouco sobre qual qualidade de vida que você procura.</strong></p>
                            </div>
                            <form method="POST" action="{{route('index.emailcaption')}}" onsubmit="validateForm();">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="usrname"><span class="glyphicon glyphicon-user"></span> Quais são seus maiores desejos?</label>
                                    <div class="checkbox">
                                        <label><input type="checkbox"  name="param1" value="beleza" checked>  <strong style="color: purple;">Cabelos e unhas longos e resistentes.</strong></label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox"  name="param2" value="emagrecimento" checked>  <strong style="color: purple;">Perder peso rapidamente.</strong></label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox"  name="param3" value="saude" checked>  <strong style="color: purple;">Melhorar meu condicionamento físico.</strong></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nome" class="form-control" placeholder="Digite aqui seu nome" required>
                                </div>
                                <div class="form-group">
                                    <input id="email-call" type="email" name="email" class="form-control" placeholder="Digite aqui seu email" required>
                                </div>
                                <button type="submit" class="btn btn-default btn-block"><span class="glyphicon glyphicon-off"></span> Enviar</button>
                            </form>
                        </div>
                        <div class="modal-body hide" style="display: none;">
                            <h4>Obrigado pela sua colaboração!</h4>
                            <p>Enviamos seu cupom de desconto para seu email!</p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger pull-left" onclick="setCookie();" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <header class="blog-first-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-10 col-sm-12 col-lg-12">
                        <div class="first-header-heading">
                            <h1>Blog</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-4 col-lg-4 col-xs-12 p-3 grid-container">
                    <div class="card-wrapper">
                        <a href="{{ route('exames-essenciais') }}" class="hov-card">
                            <div class="card-img">
                                <img src="/images/conteudo/work-hard.jpeg" class="img-fluid" alt="Cuidados no Treino Físico">
                            </div>
                            <div class="card-post-heading">
                                <div class="card-title">
                                    <h3>
                                     Exames essenciais para começar uma dieta e praticar exercícios físicos?
                                    </h3>
                                </div>
                                <div class="card-text">
                                    <p>
                                        Como poucos sabem, o item principal e me arriscarei de dizer que o mais importante antes de começar uma dieta e exercícios físicos são os exames [...]
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-10 col-md-4 col-lg-4 col-xs-12 p-3 grid-container">
                    <div class="card-wrapper">
                        <a href="{{ route('estilos-cabelos') }}"  class="hov-card">
                           <div class="card-img">
                              <img src="/images/conteudo/secar-barriga.jpeg" class="img-fluid" alt="Emagrecimento Efeito Sanfona">
                           </div>
                           <div class="card-post-heading">
                              <div class="card-title">
                                 <h3>
                                    Efeito sanfona: O pesadelo daqueles que tentam emagrecer.
                                 </h3>
                              </div>
                              <div class="card-text">
                                 <p>
                                    Aposto que você já ouviu a seguinte frase: “Emagreci 2kg semana passada, mas, depois desse final de semana devo ter engordado o dobro”, mas, saiba que esse é o principal [...]
                                 </p>
                              </div>
                           </div>
                        </a>
                     </div>
                </div>
                <div class="col-sm-10 col-md-4 col-lg-4 p-3 grid-container">
                    <div class="card-wrapper">
                        <a href="{{ route('estilos-cabelos') }}" class="hov-card">
                           <div class="card-img">
                              <img src="/images/conteudo/melhores-estilos-cabelos.jpeg" class="img-fluid" alt="Melhore Estilos de Cabelo">
                            </div>
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
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
   @endsection



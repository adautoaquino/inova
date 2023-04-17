<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projetos-InovaPM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


</head> 

<body style="background-color: #c10000;">
    <style>
        .titulo {
            color: aqua;
            size: 14px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        legend {
            color: black;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }

        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('../../images/logosemfundo.png') 50% 50% no-repeat;
            background-size: 30%;
        }

        .rocket {
            display: inline-block;
            margin: 0 0.5rem;

            animation: bounceInUp;
            animation-duration: 6s;

        }


    </style>

    <div id="loader" class="loader" style=" background-color: #c10000;;">
        <div class="inner"></div>
    </div>

    <header>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo base_url() ?>index.php/main/session"><img src="<?php echo base_url() ?>images/logo_inova.png" width="75" height="50"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link active" style="color: white" aria-current="page" href="<?php echo base_url() ?>index.php/main/session"><b>Menu</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " style="color: white" href="<?php echo base_url() ?>index.php/projetos/main_pj/gerencia_projetos"><b>Gerenciar Projetos</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " style="color: white" href="<?php echo base_url() ?>index.php/projetos/main_pj/dashboard"><b>Dashboard de Indicadores</b></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container text-center" style="background-color: #DCDCDC;">
  <div class="row justify-content-sm-center">
    <div class="col">
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              <b>Parcerias Chave</b>
            </button>
          </h2>
          <button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_criar_parceria"><b>Adicionar</b>
            <img src="<?php echo base_url() ?>images/botao-adicionar.png" width="25" height="25">
          </button>
          <div style="height: 18rem; overflow-y: scroll;">
          <div id="flush-collapseOne" class="accordion-collapse collapse text-center" style="padding-top: 3%; padding-left:8%; padding-bottom: 3%;" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link"><img src="<?php echo base_url() ?>images/excluir.png" width="25" height="25"></a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>
          <div id="flush-collapseOne" class="accordion-collapse collapse text-center" style="padding-top: 3%; padding-left:8%; padding-bottom: 3%;" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link"><img src="<?php echo base_url() ?>images/excluir.png" width="25" height="25"></a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>
          <div id="flush-collapseOne" class="accordion-collapse collapse text-center" style="padding-top: 3%; padding-left:8%; padding-bottom: 3%;" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link"><img src="<?php echo base_url() ?>images/excluir.png" width="25" height="25"></a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
      
    </div>
    <div class="col">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              <b>Atividades Chave</b>
            </button>
          </h2>
          <button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_criar_atividades"><b>Adicionar</b>
            <img src="<?php echo base_url() ?>images/botao-adicionar.png" width="25" height="25">
          </button>
          <div style="height: 18rem; overflow-y: scroll;">
          <div id="flush-collapseOne" class="accordion-collapse collapse text-center" style="padding-top: 3%; padding-left:8%; padding-bottom: 3%;" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link"><img src="<?php echo base_url() ?>images/excluir.png" width="25" height="25"></a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>
          <div id="flush-collapseOne" class="accordion-collapse collapse text-center" style="padding-top: 3%; padding-left:8%; padding-bottom: 3%;" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link"><img src="<?php echo base_url() ?>images/excluir.png" width="25" height="25"></a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>
          <div id="flush-collapseOne" class="accordion-collapse collapse text-center" style="padding-top: 3%; padding-left:8%; padding-bottom: 3%;" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link"><img src="<?php echo base_url() ?>images/excluir.png" width="25" height="25"></a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              <b>Recursos Chave</b>
            </button>
          </h2>
          <button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_criar_recursos"><b>Adicionar</b>
            <img src="<?php echo base_url() ?>images/botao-adicionar.png" width="25" height="25">
          </button>
          <div style="height: 18rem; overflow-y: scroll;">
          <div id="flush-collapseOne" class="accordion-collapse collapse text-center" style="padding-top: 3%; padding-left:8%; padding-bottom: 3%;" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link"><img src="<?php echo base_url() ?>images/excluir.png" width="25" height="25"></a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="row justify-content-center">
    <div class="col">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              <b>Proposta de Valor</b>
            </button>
          </h2>
          <button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_criar_proposta"><b>Adicionar</b>
            <img src="<?php echo base_url() ?>images/botao-adicionar.png" width="25" height="25">
          </button>
          <div style="height: 18rem; overflow-y: scroll;">
          <div id="flush-collapseOne" class="accordion-collapse collapse text-center" style="padding-top: 3%; padding-left:8%; padding-bottom: 3%;" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link"><img src="<?php echo base_url() ?>images/excluir.png" width="25" height="25"></a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              <b>Relacionamento com o Cliente</b>
            </button>
          </h2>
          <button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_criar_relacionamento"><b>Adicionar</b>
            <img src="<?php echo base_url() ?>images/botao-adicionar.png" width="25" height="25">
          </button>
          <div style="height: 18rem; overflow-y: scroll;">
          <div id="flush-collapseOne" class="accordion-collapse collapse text-center" style="padding-top: 3%; padding-left:8%; padding-bottom: 3%;" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link"><img src="<?php echo base_url() ?>images/excluir.png" width="25" height="25"></a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              <b>Segmento de Cliente</b>
            </button>
          </h2>
          <button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_criar_segmento"><b>Adicionar</b>
            <img src="<?php echo base_url() ?>images/botao-adicionar.png" width="25" height="25">
          </button>
          <div style="height: 18rem; overflow-y: scroll;">
          <div id="flush-collapseOne" class="accordion-collapse collapse text-center" style="padding-top: 3%; padding-left:8%; padding-bottom: 3%;" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link"><img src="<?php echo base_url() ?>images/excluir.png" width="25" height="25"></a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
  </div>
</div>
  <hr>
  <div class="row justify-content-center">
    <div class="col">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              <b>Canais de Distribuição</b>
            </button>
          </h2>
          <button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_criar_canais"><b>Adicionar</b>
            <img src="<?php echo base_url() ?>images/botao-adicionar.png" width="25" height="25">
          </button>
          <div style="height: 18rem; overflow-y: scroll;">
          <div id="flush-collapseOne" class="accordion-collapse collapse text-center" style="padding-top: 3%; padding-left:8%; padding-bottom: 3%;" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link"><img src="<?php echo base_url() ?>images/excluir.png" width="25" height="25"></a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              <b>Estrutura de Custos</b>
            </button>
          </h2>
          <button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_criar_estrutura"><b>Adicionar</b>
            <img src="<?php echo base_url() ?>images/botao-adicionar.png" width="25" height="25">
          </button>
          <div style="height: 18rem; overflow-y: scroll;">
          <div id="flush-collapseOne" class="accordion-collapse collapse text-center" style="padding-top: 3%; padding-left:8%; padding-bottom: 3%;" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link"><img src="<?php echo base_url() ?>images/excluir.png" width="25" height="25"></a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              <b>Fontes de Receita</b>
            </button>
          </h2>
          <button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_criar_fontes"><b>Adicionar</b>
            <img src="<?php echo base_url() ?>images/botao-adicionar.png" width="25" height="25">
          </button>
          <div style="height: 18rem; overflow-y: scroll;">
          <div id="flush-collapseOne" class="accordion-collapse collapse text-center" style="padding-top: 3%; padding-left:8%; padding-bottom: 3%;" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link"><img src="<?php echo base_url() ?>images/excluir.png" width="25" height="25"></a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- ////////////////////////////////////////////////////////////////// MODAIS//////////////////////////////////////////////////// -->
  <div class="modal modal-md fade" id="Modal_criar_parceria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"> Parcerias Chave</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="#">
                            <div class="form row" style="padding-top:5%;">
                                <label for="nome" class="col-sm-3 col-form-label text-center"><strong> Nome:</strong></label>
                                <div class="form-group col-md-9">
                                    <input type="text" placeholder="Parcerias Chave" required name="nome" value="" class="form-control" id="nome">
                                </div>
                            </div>
                            <div class="form row" style="padding-top:5%;">
                                <label for="descricao" class="col-sm-3 col-form-label text-center"><strong> Descrição:</strong></label>
                                <div class="form-group col-md-9">
                                    <textarea rows="5" type="text" value="" required placeholder="Escreva um pouco sobre..." name="descricao" class="form-control" id="descricao"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-success">Criar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal modal-md fade" id="Modal_criar_atividades" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"> Atividades Chave</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="#">
                            <div class="form row" style="padding-top:5%;">
                                <label for="nome" class="col-sm-3 col-form-label text-center"><strong> Nome:</strong></label>
                                <div class="form-group col-md-9">
                                    <input type="text" placeholder="Atividades Chave" required name="nome" value="" class="form-control" id="nome">
                                </div>
                            </div>
                            <div class="form row" style="padding-top:5%;">
                                <label for="descricao" class="col-sm-3 col-form-label text-center"><strong> Descrição:</strong></label>
                                <div class="form-group col-md-9">
                                    <textarea rows="5" type="text" value="" required placeholder="Escreva um pouco sobre..." name="descricao" class="form-control" id="descricao"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-success">Criar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal modal-md fade" id="Modal_criar_recursos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"> Recursos Chave</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="#">
                            <div class="form row" style="padding-top:5%;">
                                <label for="nome" class="col-sm-3 col-form-label text-center"><strong> Nome:</strong></label>
                                <div class="form-group col-md-9">
                                    <input type="text" placeholder="Recursos Chave" required name="nome" value="" class="form-control" id="nome">
                                </div>
                            </div>
                            <div class="form row" style="padding-top:5%;">
                                <label for="descricao" class="col-sm-3 col-form-label text-center"><strong> Descrição:</strong></label>
                                <div class="form-group col-md-9">
                                    <textarea rows="5" type="text" value="" required placeholder="Escreva um pouco sobre..." name="descricao" class="form-control" id="descricao"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-success">Criar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal modal-md fade" id="Modal_criar_proposta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"> Proposta de Valor</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="#">
                            <div class="form row" style="padding-top:5%;">
                                <label for="nome" class="col-sm-3 col-form-label text-center"><strong> Nome:</strong></label>
                                <div class="form-group col-md-9">
                                    <input type="text" placeholder="Proposta de Valor" required name="nome" value="" class="form-control" id="nome">
                                </div>
                            </div>
                            <div class="form row" style="padding-top:5%;">
                                <label for="descricao" class="col-sm-3 col-form-label text-center"><strong> Descrição:</strong></label>
                                <div class="form-group col-md-9">
                                    <textarea rows="5" type="text" value="" required placeholder="Escreva um pouco sobre..." name="descricao" class="form-control" id="descricao"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-success">Criar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal modal-md fade" id="Modal_criar_relacionamento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"> Relacionamento com o Cliente</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="#">
                            <div class="form row" style="padding-top:5%;">
                                <label for="nome" class="col-sm-3 col-form-label text-center"><strong> Nome:</strong></label>
                                <div class="form-group col-md-9">
                                    <input type="text" placeholder="Relacionamento com o Cliente" required name="nome" value="" class="form-control" id="nome">
                                </div>
                            </div>
                            <div class="form row" style="padding-top:5%;">
                                <label for="descricao" class="col-sm-3 col-form-label text-center"><strong> Descrição:</strong></label>
                                <div class="form-group col-md-9">
                                    <textarea rows="5" type="text" value="" required placeholder="Escreva um pouco sobre..." name="descricao" class="form-control" id="descricao"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-success">Criar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal modal-md fade" id="Modal_criar_segmento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"> Segmento de Cliente</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="#">
                            <div class="form row" style="padding-top:5%;">
                                <label for="nome" class="col-sm-3 col-form-label text-center"><strong> Nome:</strong></label>
                                <div class="form-group col-md-9">
                                    <input type="text" placeholder="Segmento de Cliente" required name="nome" value="" class="form-control" id="nome">
                                </div>
                            </div>
                            <div class="form row" style="padding-top:5%;">
                                <label for="descricao" class="col-sm-3 col-form-label text-center"><strong> Descrição:</strong></label>
                                <div class="form-group col-md-9">
                                    <textarea rows="5" type="text" value="" required placeholder="Escreva um pouco sobre..." name="descricao" class="form-control" id="descricao"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-success">Criar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal modal-md fade" id="Modal_criar_canais" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"> Canais de Distribuição</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="#">
                            <div class="form row" style="padding-top:5%;">
                                <label for="nome" class="col-sm-3 col-form-label text-center"><strong> Nome:</strong></label>
                                <div class="form-group col-md-9">
                                    <input type="text" placeholder="Canais de Distribuição" required name="nome" value="" class="form-control" id="nome">
                                </div>
                            </div>
                            <div class="form row" style="padding-top:5%;">
                                <label for="descricao" class="col-sm-3 col-form-label text-center"><strong> Descrição:</strong></label>
                                <div class="form-group col-md-9">
                                    <textarea rows="5" type="text" value="" required placeholder="Escreva um pouco sobre..." name="descricao" class="form-control" id="descricao"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-success">Criar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal modal-md fade" id="Modal_criar_estrutura" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"> Estrutura de Custos</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="#">
                            <div class="form row" style="padding-top:5%;">
                                <label for="nome" class="col-sm-3 col-form-label text-center"><strong> Nome:</strong></label>
                                <div class="form-group col-md-9">
                                    <input type="text" placeholder="Estrutura de Custos" required name="nome" value="" class="form-control" id="nome">
                                </div>
                            </div>
                            <div class="form row" style="padding-top:5%;">
                                <label for="descricao" class="col-sm-3 col-form-label text-center"><strong> Descrição:</strong></label>
                                <div class="form-group col-md-9">
                                    <textarea rows="5" type="text" value="" required placeholder="Escreva um pouco sobre..." name="descricao" class="form-control" id="descricao"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-success">Criar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal modal-md fade" id="Modal_criar_fontes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"> Fontes de Receita</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="#">
                            <div class="form row" style="padding-top:5%;">
                                <label for="nome" class="col-sm-3 col-form-label text-center"><strong> Nome:</strong></label>
                                <div class="form-group col-md-9">
                                    <input type="text" placeholder="Fontes de Receita" required name="nome" value="" class="form-control" id="nome">
                                </div>
                            </div>
                            <div class="form row" style="padding-top:5%;">
                                <label for="descricao" class="col-sm-3 col-form-label text-center"><strong> Descrição:</strong></label>
                                <div class="form-group col-md-9">
                                    <textarea rows="5" type="text" value="" required placeholder="Escreva um pouco sobre..." name="descricao" class="form-control" id="descricao"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-success">Criar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>

  


</html>
<script>

    $(window).on('load', function () {
    $('#loader').fadeIn('slow');
    $('#loader').delay(1000).fadeOut('slow'); 
    $('body').delay(350).css({'overflow': 'visible'});
})
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
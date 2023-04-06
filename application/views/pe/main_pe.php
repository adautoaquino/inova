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
                            <a class="nav-link " style="color: white" href="<?php echo base_url() ?>index.php/pe/main_pe"><b>Dashboard de Indicadores</b></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container" style="background-color: #DCDCDC;">
  <div class="row justify-content-md-center">
    <div class="col">
      <div style="padding-left: 5rem;"><b>Parcerias Chave</b>
      <a href="#"><img src="<?php echo base_url() ?>images/botao-adicionar.png" width="25" height="25"></a>
      </div>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link"><img src="<?php echo base_url() ?>images/excluir.png" width="25" height="25"></a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link"><img src="<?php echo base_url() ?>images/excluir.png" width="25" height="25"></a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
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
    <div class="col">
    <div style="padding-left: 5rem;"><b>Atividades Chave</b>
    <a href="#"><img src="<?php echo base_url() ?>images/botao-adicionar.png" width="25" height="25"></a>
      </div>
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
    <div class="col">
    <div style="padding-left: 5rem;"><b>Recursos Chave</b>
    <a href="#"><img src="<?php echo base_url() ?>images/botao-adicionar.png" width="25" height="25"></a>
      </div>
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
  <hr>
  <div class="row justify-content-center">
    <div class="col">
    <div style="padding-left: 4rem;"><b>Proposta de Valor</b>
    <a href="#"><img src="<?php echo base_url() ?>images/botao-adicionar.png" width="25" height="25"></a>
      </div>
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
    <div class="col">
    <div style="padding-left: 1rem;"><b>Relacionamento com  o Cliente</b>
    <a href="#"><img src="<?php echo base_url() ?>images/botao-adicionar.png" width="25" height="25"></a>
      </div>
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
    <div class="col">
    <div style="padding-left: 3rem;"><b>Segmento de Cliente</b>
    <a href="#"><img src="<?php echo base_url() ?>images/botao-adicionar.png" width="25" height="25"></a>
      </div>
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
  <hr>
  <div class="row justify-content-center">
    <div class="col">
    <div style="padding-left: 3rem;"><b>Canais de Distribuição</b>
    <a href="#"><img src="<?php echo base_url() ?>images/botao-adicionar.png" width="25" height="25"></a>
      </div>
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
    <div class="col">
    <div style="padding-left: 4rem;"><b>Estrutura de Custos</b>
    <a href="#"><img src="<?php echo base_url() ?>images/botao-adicionar.png" width="25" height="25"></a>
      </div>
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
    <div class="col">
    <div style="padding-left: 4rem;"><b>Fontes de Receita</b>
    <a href="#"><img src="<?php echo base_url() ?>images/botao-adicionar.png" width="25" height="25"></a>
      </div>
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



    <div class="modal modal-xl fade" id="Modal_Canvas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"> Detalhamento: <?php echo $dados_projeto['nome_projeto'] ?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url() ?>index.php/projetos/main_pj/criar_macrofase/<?php echo $dados_projeto['codprojeto'] ?>">
                            <div class="form row" style="padding-top:5%;">
                                <label for="descricao" class="col-sm-3 col-form-label text-center"><strong> Descrição</strong></label>
                                <div class="form-group col-md-9">
                                    <textarea rows="5" type="text" value="" required placeholder="Escreva um pouco sobre a macrofase..." name="descricao" class="form-control" id="descricao"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-success">Criar Detalhe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <div class="modal modal-xl fade" id="Modal_DE" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"> Detalhamento: <?php echo $dados_projeto['nome_projeto'] ?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url() ?>index.php/projetos/main_pj/criar_macrofase/<?php echo $dados_projeto['codprojeto'] ?>">
                            <div class="form row" style="padding-top:5%;">
                                <label for="descricao" class="col-sm-3 col-form-label text-center"><strong> Descrição</strong></label>
                                <div class="form-group col-md-9">
                                    <textarea rows="5" type="text" required readonly='readonly' value="" required placeholder="Escreva um pouco sobre a macrofase..." name="descricao" class="form-control" id="descricao"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-success">Criar Macrofase</button>
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
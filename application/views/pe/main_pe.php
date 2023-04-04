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

.wrapper {
  margin: auto;
  max-width: 100%;
  width: 98%;
  padding-bottom: 1%;
}

.bmc {
  display: grid;
  grid: repeat(3, 200px) / repeat(10, 1fr);
}

.bmc,
.bmc > div {
  border: 1px solid;
  background: #fff;
}

.bmc > div {
  display: grid;
  position: relative;
  gap: 10px;
  grid-template-rows: 30px;
  grid-auto-rows: 65px;
  padding: 8px;
}

.bmc > div:nth-child(8) h3,
.bmc > div:nth-child(9) h3 {
  grid-column: 1 / -1;
}

.bmc h3 {
  margin: 0;
  font-size: 14px;
  color: #000;
}

.note {
  padding: 15px;
  background: #F33C61;
  color: #fff;
  font-size: 14px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 2px 6px 1px rgba(0,0,0,.2);
}

.note.green {
  background: #79D12A;
}

.bmc > div:nth-child(1),
.bmc > div:nth-child(4),
.bmc > div:nth-child(7) {
  grid-area: span 2 / span 2;
}

.bmc > div:nth-child(2),
.bmc > div:nth-child(5) {
  grid-column: span 2;
}

.bmc > div:nth-child(3) {
  grid-column: 3 / span 2;
  grid-row: 2;
}

.bmc > div:nth-child(6) {
  grid-column: 7 / span 2;
  grid-row: 2;
}

.bmc > div:nth-child(8),
.bmc > div:nth-child(9) {
  grid-area: -2 / span 5;
}
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

html, body {
  height: 100%;
}

a,
a:visited,
a:focus,
a:active,
a:link {
  text-decoration: none;
  outline: 0;
}

a {
  color: currentColor;
  transition: .2s ease-in-out;
}

h1, h2, h3, h4 {
  margin: .3em 0;
  color: #fff;
}

ul {
  padding: 0;
  list-style: none;
}

img {
  vertical-align: middle;
  height: auto;
  width: 100%;
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

    <div class="wrapper">
  <h1>Modelo Canvas</h1>
  <div class="bmc">
    <div class="table-responsive">
      <table class="table">
  <thead>
    <tr>
      <th colspan="2">Parcerias Chave
      
      <button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_Canvas">Adicionar</button>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: #666666;">Adautin o grato</th>
      <th><button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_DE">Detalhes</button></th>
    </tr>
  </tbody>
</table>
    </div>
    <div class="table-responsive">
    <table class="table">
  <thead>
    <tr>
      <th colspan="2">Atividades Chaves
      <button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_Canvas">Adicionar</button>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: #666666;">Adautin o grato</th>
      <th><button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_DE">Detalhes</button></th>
    </tr>
  </tbody>
</table>
    </div>
    <div class="table-responsive">
    <table class="table">
  <thead>
    <tr>
      <th colspan="2">Recursos Chaves
      <button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_Canvas">Adicionar</button>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: #666666;">Adautin o grato</th>
      <th><button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_DE">Detalhes</button></th>
    </tr>
  </tbody>
</table>
    </div>
    <div class="table-responsive">
    <table class="table">
  <thead>
    <tr>
      <th colspan="2">Proposta de Valor
      <button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_Canvas">Adicionar</button>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: #666666;">Adautin o grato</th>
      <th><button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_DE">Detalhes</button></th>
    </tr>
  </tbody>
</table>
    </div>
    <div class="table-responsive">
    <table class="table">
  <thead>
    <tr>
      <th colspan="2">Relacionamento com o Cliente
      <button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_Canvas">Adicionar</button>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: #666666;">Adautin o grato</th>
      <th><button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_DE">Detalhes</button></th>
    </tr>
  </tbody>
</table>
    </div>
    <div class="table-responsive">
    <table class="table">
  <thead>
    <tr>
      <th colspan="2">Canais de Distribuição
      <button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_Canvas">Adicionar</button>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: #666666;">Adautin o grato</th>
      <th><button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_DE">Detalhes</button></th>
    </tr>
  </tbody>
</table>
    </div>
    <div class="table-responsive">
    <table class="table">
  <thead>
    <tr>
      <th colspan="2">Segmentos de Clientes
      <button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_Canvas">Adicionar</button>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: #666666;">Adautin o grato</th>
      <th><button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_DE">Detalhes</button></th>
    </tr>
  </tbody>
</table>
    </div>
    <div class="table-responsive">
    <table class="table">
  <thead>
    <tr>
      <th colspan="2">Estrutura de Custos
      <button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_Canvas">Adicionar</button>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: #666666;">Adautin o grato</th>
      <th><button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_DE">Detalhes</button></th>
    </tr>
  </tbody>
</table>
    </div>
    <div class="table-responsive">
      <table class="table">
  <thead>
    <tr>
      <th colspan="2">Fontes de receita
      <button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_Canvas">Adicionar</button>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: #666666;">Adautin o grato</th>
      <th><button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_DE">Detalhes</button></th>
    </tr>
  </tbody>
</table>
    </div>
  </div>
</div>
    <footer>

    </footer>

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
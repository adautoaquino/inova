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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="<?php echo base_url() ?>libraries/jquery_mask/dist/jquery.mask.js"></script>
    <script src="<?php echo base_url() ?>libraries/jquery_mask/dist/jquery.mask.min.js"></script>




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

    <div id="loader" class="loader" style=" background-color: #c10000;">
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
    <div class="container text-center">
        <div class="row" style="padding-top:2%">
            <div class=" offset-md-2 col-md-8 text-center" style="padding-bottom:4%">
                <form method="post" action="<?php echo base_url() ?>index.php/projetos/main_pj/editar_macrofase/<?php echo $dados['codmacrofase'] ?>">
                    <div class="form row" style="padding-top:5%;">
                        <label for="nome" class="col-sm-3 col-form-label text-light text-center"><strong> Novo Nome da Macrofase</strong></label>
                        <div class="form-group col-md-9">
                            <input type="text" required placeholder="Macrofase" required name="nome" value="<?= isset($dados) ? $dados['nome_macrofase'] : "" ?>" class="form-control" id="nome">
                        </div>
                    </div>
                    <br>
                    <div class="form row">
                        <label for="descricao" class="col-sm-3 col-form-label text-light text-center"><strong> Nova Descrição da Macrofase</strong></label>
                        <div class="form-group col-md-9">
                            <textarea rows="5" type="text" required placeholder="Escreva novamente um pouco sobre a macrofase..." name="descricao" class="form-control" id="descricao"><?= isset($dados) ? $dados['descricao'] : "" ?></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="form row">
                        <label for="responsavel" class="col-sm-3 col-form-label text-light"><strong> Novo Responsável pela Macrofase</strong></label>
                        <div class="form-group col-md-9">
                            <input type="text" required placeholder=" Novo responsável" required name="responsavel" value="<?= isset($dados) ? $dados['responsavel'] : "" ?>" class="form-control" id="responsavel">
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="form row">
                        <label for="responsavel" class="col-sm-3 col-form-label text-light"><strong> Projetistas Da Macrofase</strong></label>
                        <div class="form-group col-md-9">
                            <input type="text" required placeholder=" Projetistas Macro" required name="projetistas_macro" value="<?= isset($dados) ? $dados['projetistas_macro'] : "" ?>" class="form-control" id="projetistas_macro">
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="form row">
                        <label for="data_inicio" class="col-sm-3 col-form-label text-light"><strong> Nova Data de Início</strong></label>
                        <div class="form-group col-md-4">
                            <input type="date" required placeholder="dd/mm/aaaa" required name="data_inicio" value="<?= isset($dados) ? $dados['data_inicio'] : "" ?>" class="form-control" id="data_inicio">
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="form row">
                        <label for="data_prevista_termino" class="col-sm-3 col-form-label text-light text-center"><strong> Nova Data Prevista Término</strong></label>
                        <div class="form-group col-md-4">
                            <input type="date" required placeholder="dd/mm/aaaa" required name="data_prevista_termino" value="<?= isset($dados) ? $dados['data_prevista_termino'] : "" ?>" data-mask="99/99/9999" class="form-control" id="data_prevista_termino">
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="form-group col-md-1">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="prioridade_macrofase" value="1" id="prioridade_macrofase1">
                        <label class="col-sm-3 col-form-label text-light text-center" for="prioridade1"><b>Prioriade Mínima</b></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="prioridade_macrofase" value="2" id="prioridade_macrofase2">
                            <label class="col-sm-3 col-form-label text-light text-center" for="prioridade2"><b>Prioriade Intermediária</b></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="prioridade_macrofase" value="3" id="prioridade_macrofase3">
                            <label class="col-sm-3 col-form-label text-light text-center" for="prioridade2"><b>Prioriade Máxima</b></label>
                    </div>
                    </div>
                    <div class="form row" style="padding-top:5%">
                        <div class="col-md-2 offset-md-10 text-right">
                            <button type="submit" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-light"> Finalizar Edição</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <footer>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>


</html>
<script>
    $(window).on('load', function() {
        $('#loader').fadeIn('slow');
        $('#loader').delay(1000).fadeOut('slow');
        $('body').delay(350).css({
            'overflow': 'visible'
        });
    })
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
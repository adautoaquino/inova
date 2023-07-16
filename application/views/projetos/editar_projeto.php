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
    <script src="../../libraries/jquery_mask/dist/jquery.mask.js"></script>
    <script src="../../libraries/jquery_mask/dist/jquery.mask.min.js"></script>




</head>

<body background="<?php echo base_url()?>images/fundo_login.jpeg">
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
            background: url('<?php echo base_url() ?>images/logo_inova.png') 50% 50% no-repeat;
            background-size: 10%;
        }

        .rocket {
            display: inline-block;
            margin: 0 0.5rem;

            animation: bounceInUp;
            animation-duration: 6s;

        }
    </style>

    <div id="loader" class="loader" style=" background-color: white;">
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
    <div class="container text-center" style="background-color: dark;">
        <div class="row" style="padding-top:2%">
            <div class=" offset-md-2 col-md-8 text-center" style="padding-bottom:4%">
                <form method="post" action="../editar_projeto/<?php echo $codprojeto ?>">
                    <div class="form row" style="padding-top:5%;">
                        <label for="nome" class="col-sm-3 col-form-label text-dark text-center"><strong> Nome do Projeto</strong></label>
                        <div class="form-group col-md-9">
                            <input type="text" required name="nome" required placeholder="Nome do Projeto" value="<?php echo $info_projeto['nome_projeto'] ?>" class="form-control" id="nome">
                        </div>
                    </div>
                    <br>
                    <div class="form row">
                        <label for="descricao" class="col-sm-3 col-form-label text-dark text-center"><strong> Descrição do Projeto</strong></label>
                        <div class="form-group col-md-9">
                            <textarea rows="5" type="text" required placeholder="Escreva um pouco sobre o projeto..." name="descricao" class="form-control" id="descricao"><?php echo $info_projeto['descricao'] ?></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="form row">
                        <label for="responsavel" class="col-sm-3 col-form-label text-dark"><strong> Responsável pelo Projeto</strong></label>
                        <div class="form-group col-md-9">
                            <input type="text" required placeholder="Responsável" value="<?php echo $info_projeto['responsavel'] ?>" required name="responsavel" class="form-control" id="responsavel">
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="form row">
                        <label for="responsavel" class="col-sm-3 col-form-label text-dark"><strong>Projetistas do projeto</strong></label>
                        <div class="form-group col-md-9">
                            <input type="text" required placeholder="Projetistas Do Projeto" value="<?php echo $info_projeto['projetistas_projetos'] ?>" required name="projetistas_projetos" class="form-control" id="projetistas_projetos">
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="form row">
                        <label for="responsavel" class="col-sm-3 col-form-label text-dark"><strong>Patrocinador Projeto</strong></label>
                        <div class="form-group col-md-9">
                            <input type="text" required placeholder="Patrocinador do Projeto" value="<?php echo $info_projeto['patrocinador_projeto'] ?>" required name="patrocinador_projeto" class="form-control" id="patrocinador_projeto">
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="form row">
                        <label for="data_inicio" class="col-sm-3 col-form-label text-dark"><strong> Data de Início</strong></label>
                        <div class="form-group col-md-4">
                            <input type="date" required name="data_inicio" value="<?php echo $info_projeto['data_inicio'] ?>" required placeholder="dd/mm/aaaa" class="form-control" id="data_inicio">
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="form row">
                        <label for="goal" class="col-sm-3 col-form-label text-dark text-center"><strong> Dias de duração do Projeto</strong></label>
                        <div class="form-group col-md-4">
                            <input type="number" class="form-control" name="goal" id="goal" onchange="data()" placeholder="0 dias"> <!-- eu tlgd que esse botão ta feio p kct mas depois eu resolvo  -->
                        </div>
                        <br>
                    </div>
                    <div class="form row">
                        <script>
                            function data() {
                                var today = new Date();
                                today.setHours(0, 0, 0, 0); // define a hora para meia-noite para garantir que estamos comparando apenas as datas
                                var timeZoneOffset = -3 * 60; // define o fuso horário como -3 horas em relação ao UTC para fortaleza
                                var goal = parseInt(document.getElementById('goal').value); // pegar o valor de dias dado e somar 1, porque se não ele conta hoje
                                var uu = Math.ceil(goal / 4) - 1;
                                var fds = goal + (uu * 2);
                                var usDate = new Date(today.getTime() + (fds * 24 * 60 * 60 * 1000) + (timeZoneOffset * 60 * 1000)); // hoje + dias corridos passados, formato usado "DD/MM/YYYY "
                                var options = {
                                    year: 'numeric',
                                    month: 'medium',
                                    day: 'numeric',
                                };
                                var us = usDate.toISOString('pt-BR', options); // transforma a data em iso se n o bixo n aceita
                                const partesData = us.split('T'); // tira as horas da data iso
                                const dataSemHora = partesData[0];
                                //console.log(us, goal); essa parte é para depurar se o valor de us e goal ta saindo conforme esperado
                                document.getElementById('data_prevista_termino').value = dataSemHora // atualiza o valor de data_prevista_termino com base no ID
                            };
                        </script>

                        <label for="data_prevista_termino" class="col-sm-3 col-form-label text-dark text-center"><strong> Data Prevista Término</strong></label>
                        <div class="form-group col-md-4">
                            <input type="date" required name="data_prevista_termino" value="<?php echo $info_projeto['data_prevista_termino'] ?>" required placeholder="dd/mm/aaaa" data-mask="00/00/0000" class="form-control" id="data_prevista_termino">
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="form-group col-md-1">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="prioridade_projeto" value="1" id="prioridade_projeto1">
                            <label class="col-sm-3 col-form-label text-dark text-center" for="prioridade1"><b>Prioriade Mínima</b></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="prioridade_projeto" value="2" id="prioridade_projeto2">
                            <label class="col-sm-3 col-form-label text-dark text-center" for="prioridade2"><b>Prioriade Intermediária</b></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="prioridade_projeto" value="3" id="prioridade_projeto3">
                            <label class="col-sm-3 col-form-label text-dark text-center" for="prioridade2"><b>Prioriade Máxima</b></label>
                        </div>
                    </div>    
                    <br>
                    <div class="form row" style="padding-top:5%">
                        <div class="col-md-2 offset-md-10 text-right">
                            <button type="submit" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-danger"> Salvar</button>
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
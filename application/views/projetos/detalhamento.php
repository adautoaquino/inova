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
    <!-- só testando o commit -->



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


    <!-- Button trigger modal -->

    <?php foreach ($macrofases as $macrofase) { ?>
        <!-- Modal -->
        <div class="modal modal-xl fade" id="Modal_<?php echo $macrofase['codmacrofase'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $macrofase['nome_macrofase'] ?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row text-center">
                            <?php
                            if ($macrofase['ativo'] == 1) {

                                $data_final = new DateTime($macrofase['data_prevista_termino']);
                                $data_agr = new DateTime();

                                if ($data_agr > $data_final) {
                                    echo '<h5 style="color:red">Atrasada</h5>';
                                } else {
                                    echo '<h5 style="color:green">No prazo</h5>';
                                }
                            } else {
                                echo '<h5 style="color:blue">Completa</h5>';
                            }
                            ?>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-light table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th colspan="6">Microfases da <?php echo $macrofase['nome_macrofase'] ?></th>
                                    </tr>
                                    <tr class="text-center">
                                        <th class="align-middle text-center">Prioridade</th>
                                        <th class="align-middle text-center">Microfase</th>
                                        <th class="align-middle text-center">Início</th>
                                        <th class="align-middle text-center">Fim</th>
                                        <th class="align-middle text-center">Status</th>
                                        <th class="align-middle text-center">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($microfases as $microfase) {
                                        if ($microfase['codmacrofase'] == $macrofase['codmacrofase']) { ?>
                                            <?php if ($microfase['ativo'] == 1) { ?>
                                                <tr>
                                                    <td class="align-middle text-center">
                                                        <?php
                                                        if ($microfase['prioridade_microfase'] == 1) {
                                                            echo "Mínima";
                                                        }
                                                        if ($microfase['prioridade_microfase'] == 2) {
                                                            echo "Intermediária";
                                                        }
                                                        if ($microfase['prioridade_microfase'] == 3) {
                                                            echo "Máxima";
                                                        } ?>
                                                    </td>
                                                    <td class="align-middle text-center"><?php echo $microfase['nome_microfase'] ?></td>
                                                    <td class="align-middle text-center"><?php $data_format = $microfase['data_inicio'];
                                                                                            $result = explode('-', $data_format);
                                                                                            $dia = $result[2];
                                                                                            $mes = $result[1];
                                                                                            $ano = $result[0];
                                                                                            echo "$dia/$mes/$ano"; ?></td>
                                                    <td class="align-middle text-center"><?php $data_format = $microfase['data_prevista_termino'];
                                                                                            $result = explode('-', $data_format);
                                                                                            $dia = $result[2];
                                                                                            $mes = $result[1];
                                                                                            $ano = $result[0];
                                                                                            echo "$dia/$mes/$ano"; ?></td>
                                                    <td class="align-middle text-center">
                                                        <?php
                                                        if ($microfase['ativo'] == 1) {

                                                            $data_final = new DateTime($microfase['data_prevista_termino']);
                                                            $data_agr = new DateTime();

                                                            if ($data_agr > $data_final) {
                                                                echo '<p style="color:red"><b>Atrasada</b></p>';
                                                            } else {
                                                                echo '<p style="color:green"><b>No prazo</b></p>';
                                                            }
                                                        } else {
                                                            echo '<p style="color:blue"><b>Completa</b></p>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <a href="<?php echo base_url() ?>index.php/projetos/main_pj/detalhar_microfase/<?php echo $microfase['codmicrofase'] ?>" class="btn btn-warning btn-sm">Detalhar</a>
                                                        <a href="<?php echo base_url() ?>index.php/projetos/main_pj/editar_microfase/<?php echo $microfase['codmicrofase'] ?>" class="btn btn-dark btn-sm">Editar</a>
                                                        <a href="<?php echo base_url() ?>index.php/projetos/main_pj/deletar_microfase/<?php echo $microfase['codmicrofase'] ?>" class="btn btn-danger btn-sm">Deletar</a>
                                                        <a href="<?php echo base_url() ?>index.php/projetos/main_pj/finalizar_microfase/<?php echo $microfase['codmicrofase'] ?>" class="btn btn-success btn-sm">Finalizar</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                    <?php
                                        }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="form row" style="padding-top:5%;">
                            <label for="descricao" class="col-sm-3 col-form-label text-center"><strong> Descrição</strong></label>
                            <div class="form-group col-md-9">
                                <textarea rows="5" readonly='readonly' type="text" value="<?php echo $macrofase['descricao'] ?>" required placeholder="Escreva um pouco sobre o projeto..." name="descricao" class="form-control" id="descricao"><?php echo $macrofase['descricao'] ?></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form row">
                            <label for="responsavel" class="col-sm-3 col-form-label text-center"><strong> Responsável</strong></label>
                            <div class="form-group col-md-7">
                                <input type="text" required readonly='readonly' value="<?php echo $macrofase['responsavel'] ?>" name="responsavel" class="form-control" id="responsavel">
                            </div>
                            <br>
                        </div>
                        <br>
                        <div class="form row">
                            <label for="responsavel" class="col-sm-3 col-form-label text-center"><strong> Projetistas da Macrofase</strong></label>
                            <div class="form-group col-md-9">
                                <input type="text" required readonly='readonly' value="<?php echo $macrofase['projetistas_macro'] ?>" name="projetistas_macro" class="form-control" id="projetistas_macro">
                            </div>
                        </div>
                        <br>
                        <div class="form row">
                            <label for="data_inicio" class="col-sm-3 col-form-label text-center"><strong> Início</strong></label>
                            <div class="form-group col-md-4">
                                <input type="text" required readonly='readonly' value="<?php $data_format = $macrofase['data_inicio'];
                                                                                        $result = explode('-', $data_format);
                                                                                        $dia = $result[2];
                                                                                        $mes = $result[1];
                                                                                        $ano = $result[0];
                                                                                        echo "$dia/$mes/$ano"; ?>" name="data_inicio" class="form-control" id="data_inicio">
                            </div>
                        </div>
                        <br>
                        <div class="form row">
                        <label for="data_prevista_termino" class="col-sm-3 col-form-label text-center"><strong> Fim Previsto</strong></label>
                        <div class="form-group col-md-4">
                            <input type="text" required readonly='readonly' value="<?php $data_format = $macrofase['data_prevista_termino'];
                                                                                    $result = explode('-', $data_format);
                                                                                    $dia = $result[2];
                                                                                    $mes = $result[1];
                                                                                    $ano = $result[0];
                                                                                    echo "$dia/$mes/$ano"; ?>" name="data_prevista_termino" data-mask="99/99/9999" class="form-control" id="data_prevista_termino">
                        </div>
                        <br>
                        <div class="form row">
                        <label for="prioridade_macrofase" class="col-sm-3 col-form-label text-center"><strong> Prioriade da Macrofase</strong></label>
                        <div class="form-group col-md-4">
                            <input type="text" readonly value="<?php
                                                                if ($macrofase['prioridade_macrofase'] == 1) {
                                                                    echo "Prioridade Mínima";
                                                                }
                                                                if ($macrofase['prioridade_macrofase'] == 2) {
                                                                    echo "Prioridade Intermediária";
                                                                }
                                                                if ($macrofase['prioridade_macrofase'] == 3) {
                                                                    echo "Prioridade Máxima";
                                                                } ?>" name="prioridade_projeto" id="prioridade_projeto" class="form-control">
                        </div>
                    </div>
                </div>  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <a href="<?php echo base_url() ?>index.php/projetos/main_pj/criar_microfase/<?php echo $dados_projeto['codprojeto'] ?>/<?php echo $macrofase['codmacrofase'] ?>" class="btn btn-success">Criar Microfase</a>
            </div>
        </div>
        </div>
        </div>
    <?php } ?>


    <div class="container text-center" style="background-color: white;">

        <div class="row" style="padding-top:2%">
            <div class=" offset-md-2 col-md-8 text-center" style="padding-bottom:4%">
                <div class="form row" style="padding-top:5%;">
                    <label for="nome" class="col-sm-3 col-form-label text-dark text-center"><strong> Nome do Projeto</strong></label>
                    <div class="form-group col-md-9">
                        <input type="text" required name="nome" readonly value="<?= $dados_projeto['nome_projeto'] ?>" class="form-control" id="nome">
                    </div>
                </div>
                <br>
                <div class="form row">
                    <label for="descricao" class="col-sm-3 col-form-label text-dark text-center"><strong> Descrição do Projeto</strong></label>
                    <div class="form-group col-md-9">
                        <textarea rows="5" type="text" readonly name="descricao" class="form-control" id="descricao"><?= $dados_projeto['descricao'] ?></textarea>
                    </div>
                </div>
                <br>
                <div class="form row">
                    <label for="responsavel" class="col-sm-3 col-form-label text-dark"><strong> Responsável pelo Projeto</strong></label>
                    <div class="form-group col-md-9">
                        <input type="text" readonly value="<?= $dados_projeto['responsavel'] ?>" name="responsavel" class="form-control" id="responsavel">
                    </div>
                    <br>
                </div>
                <br>
                <div class="form row">
                    <label for="responsavel" class="col-sm-3 col-form-label text-dark"><strong> Projetistas Do Projeto</strong></label>
                    <div class="form-group col-md-9">
                        <input type="text" readonly value="<?= $dados_projeto['projetistas_projetos'] ?>" name="projetistas_projetos" class="form-control" id="patrocinador_projeto">
                    </div>
                    <br>
                </div>
                <br>
                <div class="form row">
                    <label for="responsavel" class="col-sm-3 col-form-label text-dark"><strong> Patrocinador do Projeto</strong></label>
                    <div class="form-group col-md-9">
                        <input type="text" readonly value="<?= $dados_projeto['patrocinador_projeto'] ?>" name="patrocinador_projeto" class="form-control" id="patrocinador_projeto">
                    </div>
                    <br>
                </div>
                <br>
                <div class="form row">
                    <label for="data_inicio" class="col-sm-3 col-form-label text-dark"><strong> Data de Início</strong></label>
                    <div class="form-group col-md-4">
                        <input type="text" readonly value="<?php $data_format = $dados_projeto['data_inicio'];
                                                            $result = explode('-', $data_format);
                                                            $dia = $result[2];
                                                            $mes = $result[1];
                                                            $ano = $result[0];
                                                            echo "$dia/$mes/$ano"; ?>" name="data_inicio" class="form-control" id="data_inicio">
                    </div>
                    <br>
                </div>
                <br>
                <div class="form row">
                    <label for="data_prevista_termino" class="col-sm-3 col-form-label text-dark text-center"><strong> Data Prevista de Término</strong></label>
                    <div class="form-group col-md-4">
                        <input type="text" readonly value="<?php $data_format = $dados_projeto['data_prevista_termino'];
                                                            $result = explode('-', $data_format);
                                                            $dia = $result[2];
                                                            $mes = $result[1];
                                                            $ano = $result[0];
                                                            echo "$dia/$mes/$ano"; ?>" name="data_prevista_termino" data-mask="99/99/9999" class="form-control" id="data_prevista_termino">
                    </div>
                </div>
                <br>
                <div class="form row">
                    <label for="prioridade_projeto" class="col-sm-3 col-form-label text-dark text-center"><b> Prioriade do Projeto</b></label>
                    <div class="form-group col-md-4">
                        <input type="text" readonly value="<?php
                                                            if ($dados_projeto['prioridade_projeto'] == 1) {
                                                                echo "Prioridade Mínima";
                                                            }
                                                            if ($dados_projeto['prioridade_projeto'] == 2) {
                                                                echo "Prioridade Intermediária";
                                                            }
                                                            if ($dados_projeto['prioridade_projeto'] == 3) {
                                                                echo "Prioridade Máxima";
                                                            } ?>" name="prioridade_projeto" id="prioridade_projeto" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal modal-xl fade" id="Modal_criar_macrofase" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"> Criar Macrofase do Projeto: <?php echo $dados_projeto['nome_projeto'] ?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url() ?>index.php/projetos/main_pj/criar_macrofase/<?php echo $dados_projeto['codprojeto'] ?>">
                            <div class="form row" style="padding-top:5%;">
                                <label for="nome" class="col-sm-3 col-form-label text-center"><strong> Nome da Macrofase</strong></label>
                                <div class="form-group col-md-9">
                                    <input type="text" placeholder="Nome da Macrofase" required name="nome" value="" class="form-control" id="nome">
                                </div>
                            </div>
                            <div class="form row" style="padding-top:5%;">
                                <label for="descricao" class="col-sm-3 col-form-label text-center"><strong> Descrição</strong></label>
                                <div class="form-group col-md-9">
                                    <textarea rows="5" type="text" value="" required placeholder="Escreva um pouco sobre a macrofase..." name="descricao" class="form-control" id="descricao"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="form row">
                                <label for="responsavel" class="col-sm-3 col-form-label text-center"><strong> Responsável</strong></label>
                                <div class="form-group col-md-9">
                                    <input type="text" placeholder="Responsável pela Macrofase" value="" name="responsavel" class="form-control" id="responsavel">
                                </div>
                                <br>
                            </div>
                            <br>
                            <div class="form row">
                                <label for="projetistas_macro" class="col-sm-3 col-form-label text-center"><strong> Projetistas Da macrofase</strong></label>
                                <div class="form-group col-md-9">
                                    <input type="text" placeholder="Projetistas Macro" value="" name="projetistas_macro" class="form-control" id="projetistas_macro">
                                </div>
                                <br>
                            </div>
                            <br>
                            <div class="form row">
                                <label for="data_inicio" class="col-sm-3 col-form-label text-center"><strong> Início</strong></label>
                                <div class="form-group col-md-4">
                                    <input type="date" placeholder="dd/mm/aaaa" name="data_inicio" class="form-control" required id="data_inicio_modal">
                                </div>
                                <br>
                            </div>
                            <br>
                            <div class="form row">
                                <label for="goal" class="col-sm-3 col-form-label text-center"><strong> Dias de duração do Projeto</strong></label>
                                <div class="form-group col-md-1">
                                    <input type="number" class="form-control" name="goal" id="goal_modal" onchange="data()" placeholder="0 dias">
                                </div>
                            </div>
                            <br>
                            <div class="form row">
                                <script>
                                    function data() {
                                        var today = new Date((document.getElementById('data_inicio_modal').value));
                                        today.setHours(0, 0, 0, 0); // define a hora para meia-noite para garantir que estamos comparando apenas as datas
                                        var timeZoneOffset = -3 * 60; // define o fuso horário como -3 horas em relação ao UTC para fortaleza
                                        var goal = parseInt(document.getElementById('goal_modal').value); // pegar o valor de dias dado e somar 1, porque se não ele conta hoje
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
                                        document.getElementById('data_prevista_termino_modal').value = dataSemHora // atualiza o valor de data_prevista_termino com base no ID
                                    };
                                </script>
                                <label for="data_prevista_termino" style="color: black;" class="col-sm-3 col-form-label text-center"><strong> Data Prevista Término</strong></label>
                                <div class="form-group col-md-4">
                                    <input type="date" required name="data_prevista_termino" required placeholder="dd/mm/aaaa" data-mask="00/00/0000" class="form-control" id="data_prevista_termino_modal">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-check" style="padding-left:50%">
                                    <input class="form-check-input" type="radio" name="prioridade_macrofase" value="1" id="prioridade1">
                                    <label class="col-sm-3 col-form-label text-center" for="prioridade1"><b>Prioriade Mínima</b></label>
                                </div>
                                <div class="form-check" style="padding-left:50%">
                                    <input class="form-check-input" type="radio" name="prioridade_macrofase" value="2" id="prioridade2" checked>
                                    <label class="col-sm-3 col-form-label text-center" for="prioridade2"><b>Prioriade Intermediária</b></label>
                                </div>
                                <div class="form-check" style="padding-left:50%">
                                    <input class="form-check-input" type="radio" name="prioridade_macrofase" value="3" id="prioridade3">
                                    <label class="col-sm-3 col-form-label text-center" for="prioridade2"><b>Prioriade Máxima</b></label>
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
        <div class="row" style="padding-top:1%; padding-bottom:2%;">
            <div class=" offset-md-1 col-md-10 text-center">
                <div class="card bg-dark" style="width: 100%;">
                    <div class="table-responsive">
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th colspan="5">Macrofases do Projeto
                                        <button type="button" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_criar_macrofase">Adicionar Macrofase ao Projeto</button>
                                    </th>
                                </tr>
                                <?php if (count($macrofases) > 0) { ?>
                                    <tr>
                                        <th>Prioridade</th>
                                        <th>Macrofase</th>
                                        <th>Início</th>
                                        <th>Previsão de Fim</th>
                                        <th>Ações</th>
                                    </tr>
                                <?php } else {
                                    echo "<tr><th style='color:red; font-size:80%'>Nenhum Resultado Encontrado</th></td>";
                                } ?>
                            </thead>
                            <?php if (count($macrofases) > 0) { ?>
                                <tbody>
                                    <?php foreach ($macrofases as $macrofase) { ?>
                                        <?php if ($macrofase['ativo'] == 1) { ?>
                                            <tr>
                                                <td>
                                                    <?php
                                                    if ($macrofase['prioridade_macrofase'] == 1) {
                                                        echo "Mínima";
                                                    }
                                                    if ($macrofase['prioridade_macrofase'] == 2) {
                                                        echo "Intermediária";
                                                    }
                                                    if ($macrofase['prioridade_macrofase'] == 3) {
                                                        echo "Máxima";
                                                    } ?>
                                                </td>
                                                <td><?php echo $macrofase['nome_macrofase'] ?></td>
                                                <td><?php
                                                    $data_format = $macrofase['data_inicio'];
                                                    $result = explode('-', $data_format);
                                                    $dia = $result[2];
                                                    $mes = $result[1];
                                                    $ano = $result[0];
                                                    echo "$dia/$mes/$ano"; ?></td>
                                                <td><?php
                                                    $data_format = $macrofase['data_prevista_termino'];
                                                    $result = explode('-', $data_format);
                                                    $dia = $result[2];
                                                    $mes = $result[1];
                                                    $ano = $result[0];
                                                    echo "$dia/$mes/$ano"; ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_<?php echo $macrofase['codmacrofase'] ?>">Detalhar</button>
                                                    <a href="<?php echo base_url() ?>index.php/projetos/main_pj/detalhar_macrofase/<?php echo $macrofase['codmacrofase'] ?>" class="btn btn-light btn-sm">Editar</a>
                                                    <a href="<?php echo base_url() ?>index.php/projetos/main_pj/deletar_macrofase/<?php echo $macrofase['codmacrofase'] ?>" class="btn btn-danger btn-sm">Deletar</a>
                                                    <a href="<?php echo base_url() ?>index.php/projetos/main_pj/finalizar_macrofase/<?php echo $macrofase['codmacrofase'] ?>" class="btn btn-success btn-sm">Finalizar</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    <?php } ?>
                                </tbody>
                            <?php } ?>
                        </table>
                    </div>
                </div>
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
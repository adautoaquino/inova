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
                <a class="navbar-brand" href="../../../projetos/main_pj"><img src="../../../../images/logo_inova.png" width="75" height="50"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link active" style="color: white" aria-current="page" href="../../../projetos/main_pj"><b>Menu</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " style="color: white" href="#"><b>Gerenciar Projetos</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " style="color: white" href="#"><b>Dashboard de Indicadores</b></a>
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
                                // $date=date('m/d/Y');
                                $data_projeto = explode('/', $macrofase['data_prevista_termino']);
                                $data_projeto = $data_projeto[1] . '/' . $data_projeto[0] . '/' . $data_projeto[2];
                                $data_projeto = date_create($data_projeto);
                                $data_diff = date_diff($data_projeto, date_create());
                                $diferenca = date_interval_format($data_diff, '%a') . ' dias';

                                if ($diferenca > 0) {
                                    echo '<h5 style="color:red">Atrasada</h5>';
                                } else {
                                    echo '<h5 style="color:yellow">No prazo</h5>';
                                }
                            } else {
                                echo '<h5 style="color:green">Completa</h5>';
                            }
                            ?>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-light table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th colspan="5">Microfases da <?php echo $macrofase['nome_macrofase'] ?></th>
                                    </tr>
                                    <tr class="text-center">
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
                                            <tr>
                                                <td class="align-middle text-center"><?php echo $microfase['nome_microfase'] ?></td>
                                                <td class="align-middle text-center"><?php echo $microfase['data_inicio'] ?></td>
                                                <td class="align-middle text-center"><?php echo $microfase['data_prevista_termino'] ?></td>
                                                <td class="align-middle text-center">
                                                    <?php
                                                    if ($microfase['ativo'] == 1) {
                                                        // $date=date('m/d/Y');
                                                        $data_projeto = explode('/', $microfase['data_prevista_termino']);
                                                        $data_projeto = $data_projeto[1] . '/' . $data_projeto[0] . '/' . $data_projeto[2];
                                                        $data_projeto = date_create($data_projeto);
                                                        $data_diff = date_diff($data_projeto, date_create());
                                                        $diferenca = date_interval_format($data_diff, '%a') . ' dias';

                                                        if ($diferenca > 0) {
                                                            echo '<p style="color:red"><b>Atrasada</b></p>';
                                                        } else {
                                                            echo '<p style="color:yellow"><b>No prazo</b></p>';
                                                        }
                                                    } else {
                                                        echo '<p style="color:green"><b>Completa</b></p>';
                                                    }
                                                    ?>
                                                </td>
                                                <td class="align-middle text-center"><button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_<?php echo $microfase['codmicrofase'] ?>">Detalhar</button></td>
                                            </tr>
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
                            <div class="form-group col-md-9">
                                <input type="text" required readonly='readonly' value="<?php echo $macrofase['responsavel'] ?>" name="responsavel" class="form-control" id="responsavel">
                            </div>
                            <br>
                        </div>
                        <br>
                        <div class="form row">
                            <label for="data_inicio" class="col-sm-3 col-form-label  text-center"><strong> Início</strong></label>
                            <div class="form-group col-md-4">
                                <input type="text" required readonly='readonly' value="<?php echo $macrofase['data_inicio'] ?>" name="data_inicio" class="form-control" id="data_inicio">
                            </div>
                            <br>
                        </div>
                        <br>
                        <div class="form row">
                            <label for="data_prevista_termino" class="col-sm-3 col-form-label text-center"><strong> Fim Previsto</strong></label>
                            <div class="form-group col-md-4">
                                <input type="text" required readonly='readonly' value="<?php echo $macrofase['data_prevista_termino'] ?>" name="data_prevista_termino" data-mask="99/99/9999" class="form-control" id="data_prevista_termino">
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <a href="../../../projetos/main_pj/criar_microfase/<?php echo $macrofase['codmacrofase'] ?>" class="btn btn-success">Criar Microfase</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>


    <div class="container text-center">
        <div class="row" style="padding-top:2%">
            <div class=" offset-md-2 col-md-8 text-center" style="padding-bottom:4%">
                <form method="post" action="../criar_macrofase">
                    <div class="form row" style="padding-top:5%;">
                        <label for="nome" class="col-sm-3 col-form-label text-light text-center"><strong> Nome da Macrofase</strong></label>
                        <div class="form-group col-md-9">
                            <input type="text" required placeholder="Macrofase" required name="nome" value="" class="form-control" id="nome">
                        </div>
                    </div>
                    <br>
                    <div class="form row">
                        <label for="descricao" class="col-sm-3 col-form-label text-light text-center"><strong> Descrição da Macrofase</strong></label>
                        <div class="form-group col-md-9">
                            <textarea rows="5" type="text" value="" required placeholder="Escreva um pouco sobre a macrofase..." name="descricao" class="form-control" id="descricao"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="form row">
                        <label for="responsavel" class="col-sm-3 col-form-label text-light"><strong> Responsável pela Macrofase</strong></label>
                        <div class="form-group col-md-9">
                            <input type="text" required placeholder="Responsável" value="" name="responsavel" class="form-control" id="responsavel">
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="form row">
                        <label for="data_inicio" class="col-sm-3 col-form-label text-light"><strong> Data de Início</strong></label>
                        <div class="form-group col-md-4">
                            <input type="text" required placeholder="dd/mm/aaaa" value="" name="data_inicio" class="form-control" id="data_inicio">
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="form row">
                        <label for="data_prevista_termino" class="col-sm-3 col-form-label text-light text-center"><strong> Data Prevista Término</strong></label>
                        <div class="form-group col-md-4">
                            <input type="text" required placeholder="dd/mm/aaaa" value="" name="data_prevista_termino" data-mask="99/99/9999" class="form-control" id="data_prevista_termino">
                        </div>
                        <br>
                    </div>
                    <div class="form row" style="padding-top:5%">
                        <div class="col-md-2 offset-md-10 text-right">
                            <button type="submit" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-light">Adicionar Macrofase</button>
                        </div>
                    </div>
                    <div>
                        <input type="hidden" onlyread="onlyread" name="codprojeto" id="codprojeto" value="<?php echo $dados_projeto['codprojeto'] ?>"></input>
                    </div>
                </form>
            </div>
        </div>
        <div class="row" style="padding-top:1%; padding-bottom:2%;">
            <div class="card bg-dark" style="width: 100%;">


                <div class="table-responsive">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th colspan="4">Macrofases do Projeto</th>
                            </tr>
                            <?php if (count($macrofases) > 0) { ?>
                                <tr>
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
                                    <tr>
                                        <td><?php echo $macrofase['nome_macrofase'] ?></td>
                                        <td><?php echo $macrofase['data_inicio'] ?></td>
                                        <td><?php echo $macrofase['data_prevista_termino'] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_<?php echo $macrofase['codmacrofase'] ?>">Detalhar</button>
                                            <a href="../../../projetos/main_pj/editar_macrofase/<?php echo $macrofase['codmacrofase'] ?>" class="btn btn-light btn-sm" data-bs-toggle="modal">Editar</a>
                                            <a class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#Modal_<?php echo $macrofase['codmacrofase'] ?>">Deletar</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>

                        <?php } ?>
                    </table>
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
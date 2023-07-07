<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modulo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


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
    </header>
    <div class="container text-center">
        <div class="row" style="padding-top:5%">
            <div class="col-md-10 offset-md-1">
                <img width="15%" src="<?php echo base_url()?>images/logo_inova.png">
                <div class="card bg-danger text-white">
                    <div class="card-body">
                        <h5><i>Bem-vindo</i></h5>
                        <p>
                            Seja Bem-Vindo, <i><b><?php echo $this->session->userdata('user') ?></b></i>. Esse é o Inova
                            Project Manager, um sistema de gerenciamento de dados da Inova consultoria, nele você
                            consegue controlar os <b>projetos</b> da empresa e também o <b>planejamento estratégico</b> dela.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="padding-top:4%">
            <div class=" offset-md-1 col-md-5 text-center " style="padding-bottom:4%">
                <div class="card bg-danger text-white">
                    <div class="card-body">
                        <h5><i>Área de Projetos</i></h5>
                        <p>
                            Todas as informações relacionadas a projetos estão vinculadas
                            à essa seção. Nela é possível gerenciar todos os projetos e acessar todos os dados
                            relacionados a eles.
                        </p>
                        <div class="text-center">
                            <a class="btn btn-light" href="<?php echo base_url()?>index.php/projetos/main_pj">Acessar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 text-center">
                <div class="card bg-danger text-white">
                    <div class="card-body">
                        <h5><i>Área de Planejamento Estratégico</i></h5>
                        <p>
                            Todas as informações relacionadas a planejamento estratégico estão vinculadas
                            à essa seção. Nela é possível gerenciar todas as metas e acessar todos os dados
                            relacionados a elas.
                        </p>
                        <div class="text-center">
                            <a class="btn btn-light" href="<?php echo base_url()?>index.php/pe/main_pe">Acessar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1 text-center">
                <button class="btn btn-danger" onclick="history.back()">Voltar</button>
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
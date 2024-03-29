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
                        <li class="nav-item">
                            <a  class="nav-link" style="color : white" href="<?php echo base_url() ?>index.php/pe/main_pe"><b>Planejamento estratégico</b></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container text-center" style="background-color: dark;">
        <div class="row" style="padding-top:2%">
            <div class=" offset-md-2 col-md-8 text-center" style="padding-bottom:4%">
                <form method="post" action="<?php echo base_url() ?>index.php/projetos/main_pj/criar_microfase/<?php echo $codprojeto ?>">
                    <div class="form row" style="padding-top:5%;">
                        <label for="nome" class="col-sm-3 col-form-label text-dark text-center"><strong> Nome da microfase</strong></label>
                        <div class="form-group col-md-9">
                            <input type="text" required placeholder="Microfase" required name="nome" class="form-control" id="nome">
                        </div>
                    </div>
                    <br>
                    <div class="form row">
                        <label for="descricao" class="col-sm-3 col-form-label text-dark text-center"><strong> Descrição da Microfase</strong></label>
                        <div class="form-group col-md-9">
                            <textarea rows="5" type="text" required placeholder="Escreva um pouco sobre a microfase..." name="descricao" class="form-control" id="descricao"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="form row">
                        <label for="responsavel" class="col-sm-3 col-form-label text-dark"><strong> Responsável pela Microfase</strong></label>
                        <div class="form-group col-md-9">
                            <input type="text" required placeholder="Responsável" required name="responsavel" class="form-control" id="responsavel">
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="form row">
                        <label for="responsavel" class="col-sm-3 col-form-label text-dark"><strong> Projetistas Da Microfase</strong></label>
                        <div class="form-group col-md-9">
                            <input type="text" required placeholder="projetistas da micro" required name="projetistas_micro" class="form-control" id="projetistas_micro">
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="form row">
                        <label for="data_inicio" class="col-sm-3 col-form-label text-dark"><strong> Data de Início</strong></label>
                        <div class="form-group col-md-4">
                            <input type="date" required placeholder="dd/mm/aaaa" required name="data_inicio" class="form-control" id="data_inicio">
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="form row">
                        <label for="goal" class="col-sm-3 col-form-label text-dark text-center"><strong> Dias de duração do Projeto</strong></label>
                        <div class="form-group col-md-4">
                            <input type="number" class="form-control" name="goal" id="goal" onchange="data();" placeholder="0 dias"> <!-- eu tlgd que esse botão ta feio p kct mas depois eu resolvo  -->
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="form row">
                        <script>
                           function data() {
                                var today = new Date((document.getElementById('data_inicio').value));
                                today.setHours(0, 0, 0, 0); // define a hora para meia-noite para garantir que estamos comparando apenas as datas
                                
                                today.setDate(today.getDate()+1) // como mais tarde eu defino as horas para 00:00, essa função impede o dia de voltar
                                var goal = parseInt(document.getElementById('goal').value); // pegar o valor de dias dado e somar 1, porque se não ele conta hoje
                                if ((goal >= 5) && (goal < 10)){
                                    var uu = Math.floor(goal / 5) ;
                                    var fds = goal + (uu * 2);
                                    console.log("Maior que 5")
                                } if (goal >= 10){
                                    var uu = Math.floor(goal / 5)
                                    var semideia = goal / uu 
                                    var fds = goal + (uu * 2)  
                                    console.log("maior que 10")
                                }if(goal <5){
                                    var fds = goal
                                }
                                
                                const usDate = new Date(today.getTime() + (fds * 24 * 60 * 60 * 1000)) // hoje + dias corridos passados, formato usado "DD/MM/YYYY "
                                var options = {
                                    year: 'numeric',
                                    month: 'medium',
                                    day: 'numeric',
                                };
                                
                                var weekday = usDate.getDay();
                                if ((weekday == 0) || (weekday == 6)){
                                    var datafinal = new Date(usDate.getTime() + (2 * 24 * 60 * 60 * 1000));
                                } else {
                                    var datafinal = usDate;
                                }
                                var ddf = datafinal.getDay()
                                console.log(fds,uu )
                                var us = datafinal.toISOString('pt-BR', options); // transforma a data em iso se n o bixo n aceita
                                const partesData = us.split('T'); // tira as horas da data iso
                                const dataSemHora = partesData[0];
                                document.getElementById('data_prevista_termino').value = dataSemHora // atualiza o valor de data_prevista_termino com base no ID

                            } // função de calcular a data
                        </script>
                    </div>
                    <div class="form row">
                        <label for="data_prevista_termino" class="col-sm-3 col-form-label text-dark text-center"><strong> Data Prevista Término</strong></label>
                        <div class="form-group col-md-4">
                            <input type="date" required placeholder="dd/mm/aaaa" required name="data_prevista_termino" data-mask="99/99/9999" class="form-control" id="data_prevista_termino">
                        </div>
                        <br>
                    </div>
                    <br>
                    <div class="form-group col-md-1">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="prioridade_microfase" value="1" id="prioridade_microfase1">
                            <label class="col-sm-3 col-form-label text-dark text-center" for="prioridade1"><b>Prioriade Mínima</b></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="prioridade_microfase" value="2" id="prioridade_microfase2">
                            <label class="col-sm-3 col-form-label text-dark text-center" for="prioridade2"><b>Prioriade Intermediária</b></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="prioridade_microfase" value="3" id="prioridade_microfase3">
                            <label class="col-sm-3 col-form-label text-dark text-center" for="prioridade2"><b>Prioriade Máxima</b></label>
                        </div>
                    </div>
                    <div class="form row" style="padding-top:5%">
                        <div class="col-md-2 offset-md-10 text-right">
                            <button type="submit" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" class="btn btn-danger"> Adicionar Microfase</button>
                        </div>
                    </div>
                    <div>
                        <input type="hidden" onlyread="onlyread" name="codmacrofase" id="codmacrofase" value="<?php echo $this->uri->segment(5); ?>"></input>
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
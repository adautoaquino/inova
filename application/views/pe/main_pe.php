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
  width: 100%;
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

.bmc > div:nth-child(8),
.bmc > div:nth-child(9) {
  grid: 30px / repeat(5, 1fr);
}
.bmc > div:nth-child(8) h3,
.bmc > div:nth-child(9) h3 {
  grid-column: 1 / -1;
}


.bmc > div:nth-child(8) .note,
.bmc > div:nth-child(9) .note {
  grid-column: span 2;
}

.bmc h3 {
  margin: 0;
  font-size: 14px;
  color: #5b5b5b;
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
            <a class="navbar-brand" href="#"><img src="../../images/logo_inova.png" width="75" height="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link active" style="color: white" aria-current="page" href="../projetos/main_pj"><b>Menu</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " style="color: white" href="../projetos/main_pj/gerencia_projetos"><b>Gerenciar Projetos</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " style="color: white" href="#"><b>Dashboard de Indicadores</b></a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    </header>
    <div class="wrapper">
  <h1>Modelo Canvas</h1>
  <div class="bmc">
    <div>
      <h3>Parceiros Chaves</h3>
    
    </div>
    <div>
      <h3>Atividades Chaves</h3>
      <div class="note">All</div>
    </div>
    <div>
      <h3>Recursos Chaves</h3>
    </div>
    <div>
      <h3>Proposta de Valor</h3>
      
    </div>
    <div>
      <h3>Relacionamento com o Cliente</h3>
    </div>
    <div>
      <h3>Canais de Distribuição</h3>
    </div>
    <div>
      <h3>Segmentos de Clientes</h3>
    </div>
    <div>
      <h3>Estrutura de Custos</h3>
    </div>
    <div>
      <h3>Fontes de Receitas</h3>
      <div class="note">Everyone</div>
      <div class="note">Everyone</div>
      <div class="note">Everyone</div>
      <div class="note green">Even more</div>
    </div>
  </div>
</div>
    <footer>

    </footer>

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
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Horizon TechSystems</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


    <body background="<?php echo base_url()?>images/fundo_login.jpeg">
    <style>
        .titulo{
            color:aqua;
            size: 14px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        legend{
            color:black;
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

    <div id="loader" class="loader" style=" background-color: black;">
        <div class="inner"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="col-md-6 offset-md-3 text-center">
                    <img style="padding-top:30%"src="<?php echo base_url()?>images/logosemfundo.png" width="50%">
                    <h3 style="padding-top:3%">AutoContract</h3>
                </div>
            </div>
        </div>
        <form method="POST" action="esqueci_senha">
        <div class="row" style="padding-top:2%; padding-bottom:1%">
            <div class="col-md-6 offset-md-3">
                <div class="col-md-6 offset-md-3">
                    <label style="padding-bottom:2%; font-size:medium; text-align:left;"><b>Usuário</b></label>
                    <input name="user" id="user" type="text" class="form-control" required >
                </div>
            </div>
        </div>
        <div class="row" style="padding-top:1%;">
            <div class="col-md-6 offset-md-3 text-center">
                <button class="btn btn-warning" style="color:white;" type="submit">Enviar E-Mail</button>
            </div>
        </div>
        </form>
        <br>
        <br>
        <br>
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
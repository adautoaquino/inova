<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Inova Project Manager</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body background="images/fundo_login.jpeg">
	
<style>	
</style>




	
<br></br>
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3 text-center">
			<img src="<?php echo base_url()?>images/logo_inova.png">
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<div class="card" style="background-color: #c10000">
				
				<div class="card-body">
					<form method="POST" action="index.php/login/verify_dados">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input name="user" id="user" type="text" class="form-control" placeholder="username">
							
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input name="password" id="password" type="password" class="form-control" placeholder="password">
						</div>
						<div class="row align-items-center remember">
					
						</div>
						<div class="form-group">
							<div  class=" row d-flex justify-content-center align-content-center "  >
									<button type="submit" class="btn btn-primary col-3  login_btn">Login</button>  
							</div>
						</div>
					</form>
				</div>
				<div class="card-footer">
					
					<div class="d-flex justify-content-center">
						<a href="index.php/login/esqueci_senha">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</body>
</html>
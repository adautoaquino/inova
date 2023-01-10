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
<body background="images/fundo_login.png">
	
<style>
			/* Made with love by Mutiullah Samim*/

@import url('https://fonts.googleapis.com/css?family=Numans');



html,body{
background-size: cover;
background-repeat: no-repeat;
height: 90%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 320px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: white;
}

.social_icon span:hover{
color: red;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: red;
color: white;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: white;
background-color: red;
width: 100px;

}

.login_btn:hover{
color: black;
background-color: white;
}


.links{
color: white;
}

.links a{
margin-left: 4px;
}
		</style>
	
<br></br>
<div class="container">
	
	<div class="d-flex justify-content-center h-100">
		
		<div class="card">
			
			<div class="card-header">
				
				<h3>Inova PM</h3>
				<div class="d-flex justify-content-end social_icon">
				
					<span><i class="fab fa-google-plus-square"></i></span>
					
				</div>
			</div>
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
</body>
</html>
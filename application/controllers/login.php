<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');	
		$this->load->library('session');
		$this->load->library('email');

	}

    public function verify_dados(){
		
		$usuario = $this->input->post('user');
		$senha = $this->input->post('password');

		if($usuario == ''){
			$this->load->view('Tela_Login');
		}
		else{
			$retorno = $this->login_model->verificar_dados($usuario, $senha);
			if($retorno == 1){
				$this-> session ->set_userdata('logado', TRUE);
				$this-> session ->set_userdata('user', $usuario);
				echo "<script>
				window.location.assign('../main/session');
				</script>";
			}
			elseif($retorno == 2){
				echo "<script>alert('Seu usuário está incorreto, verifique e tente novamente);
				window.location.assign('../../');
				</script>";
			}
			elseif($retorno == 3){
				echo "<script>alert('Sua senha está incorreta, verifique e tente novamente, se tiver esquecido clique em Esqueci Minha Senha');
				window.location.assign('../../');
				</script>";
			}
			else{
				echo "<script>alert('Não foi possível encontrar seus dados, tente novamente!!');
				window.location.assign('../../');
				</script>";
			}
		}
	}

	public function cadastro(){
		$usuario = $this->input->post('user');
		$email = $this->input->post('email');
		$senha = $this->input->post('senha');
		$empresa = $this->input->post('empresa');
		$confirma_senha = $this->input->post('senha_confirma');
		if($email == ""){
			$this->load->view('cadastro');
		}else{
			if($senha != $confirma_senha){
				echo "<script>
				alert('As senhas não coincidem');
				</script>";
			}
			else{
				$retorno = $this->login_model->cadastro($usuario, $senha, $email, $empresa);
				if($retorno == 1){
					echo "<script>alert('Seu cadastro foi criado com sucesso!!');
					window.location.assign('../');
					</script>";
				}else{
					echo "<script>
					alert('Seu cadastro não pôde ser realizado, tente novamente');
					</script>";
				}
			}

		}
	}

	public function esqueci_senha(){
		$usuario = $this->input->post('user');

		if($usuario == ''){
			$this->load->view('esqueci_senha');
		}else{
			$retorno = $this->login_model->verify_user($usuario);
			if($retorno == 2){
				echo "<script>alert('Não foi possível encontrar seus dados, tente novamente ou entre em contato com a AutoTech');
				window.location.assign('../');
				</script>";
			}else{
				$token = self::gerar_token();
				$email = $this->login_model->get_email($usuario);
				$this->email->from("contato@autotechej.com", 'Autotech EJ');
				$this->email->subject("Esqueceu sua Senha?");
				$this->email->to($email); 
				$this->email->message("Aqui está o token que você solicitou: ".$token);
				$this->email->send();
				echo "<script>
				window.location.assign('esqueci_senha2/".$token."/".$usuario."');
				</script>";
			}

		}
	}

	public function esqueci_senha2($token, $usuario){
		$token_input = $this->input->post('token');
		$data['token']=$token;
		$data['usuario']=$usuario;


		if($token_input == ''){
			$this->load-> view('esqueci_senha2', $data);
		}else{
			if($token_input != $token){
				echo "<script>alert('Não foi possível encontrar seus dados, tente novamente ou entre em contato com a AutoTech');
				location.reload();
			</script>";
			}else{
				echo "<script>
				window.location.assign('../esqueci_senha3/".$usuario."');
				</script>";
			}
		}
	}

	public function esqueci_senha3($usuario){
		$nova_senha = $this->input->post('senha');
		$confirma_senha = $this->input->post('confirma_senha');
		$data['usuario']= $usuario;
		

		if($nova_senha == ''){
			$this->load-> view('esqueci_senha3', $data);
		}else{
			if($nova_senha != $confirma_senha){
				echo "<script>
				alert('As senhas não coincidem, tente novamente ou entre em contato com a AutoTech');
				location.reload();
			</script>";
			}else{
				$retorno = $this->login_model->mudar_senha($nova_senha, $usuario);
				if($retorno == TRUE){
				echo "<script>
				alert('A senha foi alterada com sucesso!');
				window.location.assign('../../');
				</script>";
				}else{
					echo "<script>
					alert('Sua senha não pôde ser alterada, tente novamente ou entre em contato com a Autotech EJ!');
					window.location.assign('../../');
					</script>";
				}
			}
		}
	}

	public function gerar_token(){
		$token = date('d');
		$token .= date('y');
		$token .= date('h');
		$token .= date('m');
		$token .= date('s');

		return $token;
	}
}
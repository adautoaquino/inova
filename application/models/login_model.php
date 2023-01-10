<?php

class Login_model extends CI_Model {
	
	public function __construct() {
		
		parent::__construct();
		$this->load->database();
	}
	
	public function verificar_dados($usuario, $senha) {
        $this->db->where('user', $usuario);

        $query = $this->db-> get('Login');

        $result = $query->row_array();

        

        if($result == ""){
            return 4;
        }
        elseif($result['user'] != $usuario){
            return 2;
        }
        elseif($result['password'] != $senha){
            return 3;
        }
        else{
            return 1;
        }   
	}

	public function verify_user($usuario){
		$this->db->where('user', $usuario);

		$query = $this->db-> get('Login');

		$result = $query->row_array();

		if($result == ""){
            return 2;
        }else{
			return 1;
		}

	}
	public function get_email($usuario){
		$this->db->where('user', $usuario);

		$query = $this->db-> get('Login');

		$result = $query->row_array();

		return $result['email'];
	}

	public function mudar_senha($nova_senha, $usuario){
		
		$result = self::get_dados($usuario);


		$result['password'] = $nova_senha;

		$this->db->where('user', $usuario);

		$this->db->update('login', $result);

		return TRUE;

	}

	public function cadastro($usuario, $password, $email, $empresa){
		$retorno = self::verify_user($usuario);

		$dados = array(
			'user' => $usuario,
			'password' => $password,
			'email' => $email,
			'empresa' => $empresa
		);
		if($retorno == 2){
			$this->db->insert('login', $dados);
			return 1;
		}else{
			return 2;
		}


	}

	public function get_dados($usuario){
		$this->db->where('user', $usuario);

		$query = $this->db-> get('login');

		$result = $query->row_array();

		return $result;
	}
}

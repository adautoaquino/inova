<?php
defined('BASEPATH') or exit('No direct script access allowed');

class main_pj extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		$this->load->model('projetos/projetos_model');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->helper('url');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Projetos/main_pj');
	}

	public function gerencia_projetos()
	{
		$this->load->view('Projetos/gerencia_projetos');
	}

	public function projetos_rodando()
	{
		$data['projetos'] = $this->projetos_model->get_projetos_rodando();
		$this->load->view('Projetos/projetos_rodando', $data);
	}

	public function detalhar_projeto($codprojeto)
	{
		$data['dados_projeto'] = $this->projetos_model->get_dados_projeto($codprojeto);
		$data['macrofases'] = $this->projetos_model->get_macrofases_projeto($codprojeto);
		$data['microfases'] = $this->projetos_model->get_microfases_projeto($codprojeto);
		$this->load->view('Projetos/detalhamento', $data);
	}

	public function detalhar_projeto_finalizado($codprojeto)
	{
		$data['dados_projeto_finalizado'] = $this->projetos_model->get_dados_projeto($codprojeto);
		$data['macrofases_finalizado'] = $this->projetos_model->get_macrofases_projeto($codprojeto);
		$data['microfases_finalizado'] = $this->projetos_model->get_microfases_projeto($codprojeto);
		$this->load->view('Projetos/detalhamento_finalizado', $data);
	}

	public function detalhar_macrofase($codmacrofase)
	{
		$data['dados'] = $this->projetos_model->get_macrofase($codmacrofase);
		$this->load->view('projetos/editar_macrofase', $data);
	}

	public function detalhar_microfase($codmicrofase)
	{
		$data['dados_microfase'] = $this->projetos_model->get_microfase($codmicrofase);
		$this->load->view('projetos/editar_microfase', $data);
	}

	public function criar_macrofase($codprojeto)
	{
		$nome_macrofase = $this->input->post('nome');
		if ($nome_macrofase == "") {
			$this->load->view('Projetos/detalhamento');
		} else {
			$input = array(
				"nome_macrofase" => $nome_macrofase,
				"descricao"    => $this->input->post('descricao'),
				"responsavel"  => $this->input->post('responsavel'),
				"data_inicio"  => $this->input->post('data_inicio'),
				"data_prevista_termino" => $this->input->post('data_prevista_termino'),
				"codprojeto" => $codprojeto
			);
			$retorno = $this->projetos_model->criar_macrofase($input);
			if ($retorno == 1) {
				echo "<script>alert('Sua macrofase foi adicionada!!');
					window.location.assign('" . base_url() . "index.php/projetos/main_pj/detalhar_projeto/" . $codprojeto . "');</script>
					
					";
			} else {
				echo "<script>alert('Não foi possível criar sua macrofase...');
					window.location.assign('" . base_url() . "index.php/projetos/main_pj/detalhar_projeto/" . $codprojeto . "');</script>
					
					";
			}
		}
	}

	public function criar_microfase($codprojeto)
	{
		$data['macrofases'] = $this->projetos_model->get_macrofases_projeto($codprojeto);
		$data['codprojeto'] = $codprojeto;
		$nome_microfase = $this->input->post('nome');
		if ($nome_microfase == "") {
			$this->load->view('projetos/criar_microfases', $data);
		} else {
			$input = array(
				"nome_microfase" => $nome_microfase,
				"descricao"    => $this->input->post('descricao'),
				"responsavel"  => $this->input->post('responsavel'),
				"data_inicio"  => $this->input->post('data_inicio'),
				"data_prevista_termino" => $this->input->post('data_prevista_termino'),
				"codmacrofase" => $this->input->post('codmacrofase'),
				"codprojeto" => $codprojeto
			);
			$retorno = $this->projetos_model->criar_microfase($input);
			if ($retorno == 1) {
				echo "<script>alert('Sua microfase foi adicionada!!');
					window.location.assign('" . base_url() . "index.php/projetos/main_pj/detalhar_projeto/" . $codprojeto . "');</script>
					
					";
			} else {
				echo "<script>alert('Não foi possível criar sua microfase...');
				window.location.assign('" . base_url() . "index.php/projetos/main_pj/detalhar_projeto/" . $codprojeto . "');</script>
				";
			}
		}
	}

	public function criar_projetos()
	{
		$nome_projeto = $this->input->post('nome');
		if ($nome_projeto == "") {
			$this->load->view('Projetos/criar_projetos');
		} else {

			// $data_inicio = explode('/', $this->input->post('data_inicio'));
			// $data_inicio = $data_inicio[2].'-'.$data_inicio[1].'-'.$data_inicio[0];
			// $data_inicio = strtotime($data_inicio);

			// $data_termino = explode('/', $this->input->post('data_prevista_termino'));
			// $data_termino = $data_termino[2].'-'.$data_termino[1].'-'.$data_termino[0];
			// $data_inicio = strtotime($data_inicio);

			$input = array(
				"nome_projeto" => $nome_projeto,
				"descricao"    => $this->input->post('descricao'),
				"responsavel"  => $this->input->post('responsavel'),
				"data_inicio"  => $this->input->post('data_inicio'),
				"data_prevista_termino" => $this->input->post('data_prevista_termino')
			);
			$retorno = $this->projetos_model->criar_projetos($input);
			if ($retorno == 1) {
				echo "<script>alert('Seu projeto foi criado com suceso!!');
					window.location.assign('" . base_url() . "index.php/projetos/main_pj/detalhar_projeto');</script>
					
					";
			} else {
				echo "<script>alert('Não foi possível criar seu projeto...');
					window.location.assign('" . base_url() . "index.php/projetos/main_pj/detalhar_projeto');</script>
					
					";
			}
		}
	}

	public function editar_macrofase($codmacrofase)
	{
		$data['codmacrofase'] = $codmacrofase;
		$nome_macrofase = $this->input->post('nome');
		if ($nome_macrofase == "") {
			$this->load->view('Projetos/editar_macrofase', $data);
		} else {
			$input = array(
				"nome_macrofase" => $nome_macrofase,
				"descricao"    => $this->input->post('descricao'),
				"responsavel"  => $this->input->post('responsavel'),
				"data_inicio"  => $this->input->post('data_inicio'),
				"data_prevista_termino" => $this->input->post('data_prevista_termino'),
				"codmacrofase" => $codmacrofase
			);
			$retorno = $this->projetos_model->editar_macrofase($input);
			if ($retorno == 1) {
				echo "<script>alert('Sua macrofase foi alterada!!');
					window.location.assign('../../main_pj/detalhar_projeto');</script>
					
					";
			} else {
				echo "<script>alert('Não foi possível alterar sua macrofase...');
					window.location.assign('../../main_pj/detalhar_projeto');</script>
					
					";
			}
		}
	}

	public function deletar_macrofase($codmacrofase)
	{
		$this->load->model('Projetos_model');
		$this->projetos_model->deletar_macrofase($codmacrofase);
		echo "<script>alert('Sua macrofase foi deletada!');
					window.location.assign('../../main_pj/detalhar_projeto');</script>
			
			";
	}

	public function editar_microfase($codmicrofase)
	{
		$data['codmicrofase'] = $codmicrofase;
		$nome_microfase = $this->input->post('nome');
		if ($nome_microfase == "") {
			$this->load->view('Projetos/editar_microfase', $data);
		} else {
			$input = array(
				"nome_microfase" => $nome_microfase,
				"descricao"    => $this->input->post('descricao'),
				"responsavel"  => $this->input->post('responsavel'),
				"data_inicio"  => $this->input->post('data_inicio'),
				"data_prevista_termino" => $this->input->post('data_prevista_termino'),
				"codmicrofase" => $codmicrofase
			);
			$retorno = $this->projetos_model->editar_microfase($input);
			if ($retorno == 1) {
				echo "<script>alert('Sua microfase foi alterada!!');
					window.location.assign('../../main_pj/detalhar_projeto');</script>
					
					";
			} else {
				echo "<script>alert('Não foi possível alterar sua microfase...');
					window.location.assign('../../main_pj/detalhar_projeto');</script>
					
					";
			}
		}
	}

	public function deletar_microfase($codmicrofase)
	{
		$this->load->model('Projetos_model');
		$this->projetos_model->deletar_microfase($codmicrofase);
		echo "<script>alert('Sua microfase foi deletada!');
					window.location.assign('" . base_url() . "index.php/projetos/main_pj/detalhar_projeto');</script>
			
			";
	}

	public function finalizar_macrofase($codmacrofase)
	{
		$return = $this->projetos_model->finalizar_macrofase($codmacrofase);
		if ($return == 1) {
			echo "<script>alert('Sua macrofase foi finalizado com suceso!!');
			window.location.assign('" . base_url() . "index.php/projetos/main_pj/detalhar_projeto');</script>
			";
		} else {
			echo "<script>alert('Não foi possível finalizar sua macrofase...');
			window.location.assign('" . base_url() . "index.php/projetos/main_pj/detalhar_projeto');</script>
			";
		}
	}

	public function finalizar_microfase($codmicrofase)
	{
		$return = $this->projetos_model->finalizar_microfase($codmicrofase);
		if ($return == 1) {
			echo "<script>alert('Sua microfase foi finalizado com suceso!!');
			window.location.assign('" . base_url() . "index.php/projetos/main_pj/detalhar_projeto');</script>
			";
		} else {
			echo "<script>alert('Não foi possível finalizar sua microfase...');
			window.location.assign('" . base_url() . "index.php/projetos/main_pj/detalhar_projeto');</script>
			";
		}
	}

	public function finalizar_projeto($codprojeto)
	{
		$return = $this->projetos_model->finalizar_projeto($codprojeto);
		if ($return == 1) {
			echo "<script>alert('Seu projeto foi finalizado com suceso!!');
			window.location.assign('" . base_url() . "index.php/projetos/main_pj/gerencia_projetos');</script>
			";
		} else {
			echo "<script>alert('Não foi possível finalizar seu projeto...');
			window.location.assign('" . base_url() . "index.php/projetos/main_pj/gerencia_projetos');</script>
			";
		}
	}

	public function projetos_finalizados()
	{
		$data['projetos'] = $this->projetos_model->get_projetos_finalizados();
		$this->load->view('Projetos/projetos_finalizados', $data);
	}
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class main_pe extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('pe/pe_model');
        $this->load->library('session');
        $this->load->library('email');
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
        // Requisição tá sendo feita aqui :)
        $data['dados_canvas'] = $this->pe_model->get_canvas();
        $this->load->view('pe/main_pe', $data);
    }

    public function gpe()
	{
		$this->load->view('pe/gpe');
	}


/////////////////////////////////CRIAR//////////////////////////////////////////////////

    public function criar_parceria(){
        $parceria = $this->input->post('parceria');
        if ($parceria == ""){
            $this->load->view('pe/main_pe');
        } else {
            $input = array(
                "conteudo" => $parceria,
                "flag" => $this->input->post('flag')
            );
        }
        $retorno = $this->pe_model->criar_parceria($input);
        if ($retorno == 1) {
            echo "<script> alert('Parceria chave adicionada!!');
            window.location.assign('" . base_url() . "index.php/pe/main_pe');</script>
			";
        } else{
            echo "<script> alert('Não foi possível adicionar a paceria chave...');
            window.location.assign('" . base_url() . "index.php/pe/main_pe');</script>
			";
        }
    }
    
    public function criar_atividades(){
        $atividades = $this->input->post('atividades');
        if ($atividades == ""){
            $this->load->view('pe/main_pe');
        } else {
            $input = array(
                "conteudo" => $atividades,
                "flag" => $this->input->post('flag')
            );
        }
        $retorno = $this->pe_model->criar_atividades($input);
        if ($retorno == 1) {
            echo "<script> alert('Atividade chave adicionada!!');
            window.location.assign('" . base_url() . "index.php/pe/main_pe');</script>
			";
        } else{
            echo "<script> alert('Não foi possível adicionar a atividade chave...');
            window.location.assign('" . base_url() . "index.php/pe/main_pe');</script>
			";
        }
        
    }

    public function criar_recursos(){
        $recursos = $this->input->post('recursos');
        if ($recursos == ""){
            $this->load->view('pe/main_pe');
        } else {
            $input = array(
                "conteudo" => $recursos,
                "flag" => $this->input->post('flag')
            );
        }
        $retorno = $this->pe_model->criar_recursos($input);
        if ($retorno == 1) {
            echo "<script> alert('Recurso chave adicionado!!');
            window.location.assign('" . base_url() . "index.php/pe/main_pe');</script>
			";
        } else{
            echo "<script> alert('Não foi possível adicionar o recurso chave...');
            window.location.assign('" . base_url() . "index.php/pe/main_pe');</script>
			";
        }
        
    }

    public function criar_proposta(){
        $proposta = $this->input->post('proposta');
        if ($proposta == ""){
            $this->load->view('pe/main_pe');
        } else {
            $input = array(
                "conteudo" => $proposta,
                "flag" => $this->input->post('flag')
            );
        }
        $retorno = $this->pe_model->criar_proposta($input);
        if ($retorno == 1) {
            echo "<script> alert('Proposta de valor adicionada!!');
            window.location.assign('" . base_url() . "index.php/pe/main_pe');</script>
			";
        } else{
            echo "<script> alert('Não foi possível adicionar a proposta de valor...');
            window.location.assign('" . base_url() . "index.php/pe/main_pe');</script>
			";
        }
        
    }

    public function criar_relacionamento(){
        $relacionamento = $this->input->post('relacionamento');
        if ($relacionamento == ""){
            $this->load->view('pe/main_pe');
        } else {
            $input = array(
                "conteudo" => $relacionamento,
                "flag" => $this->input->post('flag')
            );
        }
        $retorno = $this->pe_model->criar_relacionamento($input);
        if ($retorno == 1) {
            echo "<script> alert('Relacionamento com o cliente adicionado!!');
            window.location.assign('" . base_url() . "index.php/pe/main_pe');</script>
			";
        } else{
            echo "<script> alert('Não foi possível adicionar o relacionamento com o cliente...');
            window.location.assign('" . base_url() . "index.php/pe/main_pe');</script>
			";
        }
        
    }

    public function criar_segmento(){
        $segmento = $this->input->post('segmento');
        if ($segmento == ""){
            $this->load->view('pe/main_pe');
        } else {
            $input = array(
                "conteudo" => $segmento,
                "flag" => $this->input->post('flag')
            );
        }
        $retorno = $this->pe_model->criar_segmento($input);
        if ($retorno == 1) {
            echo "<script> alert('Segmento de cliente adicionado!!');
            window.location.assign('" . base_url() . "index.php/pe/main_pe');</script>
			";
        } else{
            echo "<script> alert('Não foi possível adicionar o segmento de cliente...');
            window.location.assign('" . base_url() . "index.php/pe/main_pe');</script>
			";
        }
        
    }

    public function criar_canais(){
        $canais = $this->input->post('canais');
        if ($canais == ""){
            $this->load->view('pe/main_pe');
        } else {
            $input = array(
                "conteudo" => $canais,
                "flag" => $this->input->post('flag')
            );
        }
        $retorno = $this->pe_model->criar_canais($input);
        if ($retorno == 1) {
            echo "<script> alert('Canal de distribuição adicionado!!');
            window.location.assign('" . base_url() . "index.php/pe/main_pe');</script>
			";
        } else{
            echo "<script> alert('Não foi possível adicionar o canal de distribuição...');
            window.location.assign('" . base_url() . "index.php/pe/main_pe');</script>
			";
        }
        
    }

    public function criar_estrutura(){
        $estrutura = $this->input->post('estrutura');
        if ($estrutura == "") {
            $this->load->view('pe/main_pe');
        } else {
            $input = array(
                "conteudo" => $estrutura,
                "flag" => $this->input->post('flag')
            );
        }
        $retorno = $this->pe_model->criar_estrutura($input);
        if ($retorno == 1) {
            echo "<script> alert('Estrutura de custos adicionada!!');
            window.location.assign('" . base_url() . "index.php/pe/main_pe');</script>
            ";
        } else {
            echo "<script> alert('Não foi possível adicionar a estrutura de custos...');
            window.location.assign('" . base_url() . "index.php/pe/main_pe');</script>
            ";
        }
    }

    public function criar_fontes(){
        $fontes = $this->input->post('fontes');
        if ($fontes == "") {
            $this->load->view('pe/main_pe');
        } else {
            $input = array (
                "conteudo" => $fontes,
                "flag" => $this->input->post('flag')                
            );
        }
        $retorno = $this->pe_model->criar_fontes($input);
        if ($retorno == 1) {
            echo "<script> alert('Fonte de receita adicionada!!');
            window.location.assign('" . base_url() . "index.php/pe/main_pe');</script>
            ";
        } else {
            echo "<script> alert('Não foi possível adicionar a fonte de receita...');
            window.location.assign('" . base_url() . "index.php/pe/main_pe');</script>
            ";
        }
    }

}



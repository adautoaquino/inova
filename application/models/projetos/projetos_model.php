<?php

class Projetos_model extends CI_Model {
	
	public function __construct() {
		
		parent::__construct();
		$this->load->database();
	}
	
    public function get_primary_key(){
        $this->db->select('codprojeto');
        $this->db->order_by('codprojeto', 'DESC');
        $query=$this->db->get('projetos');
        $result = $query->row()->codprojeto;
        return $result;
        // echo"<pre>";
        // print_r($result);
        // echo "</pre>";
        // exit;
    }

	public function criar_projetos($input){
        $primary_key = self::get_primary_key();
        $input['codprojeto'] = $primary_key + 1;
        $input['ativo'] = 1;
		$this -> db-> insert("projetos", $input);
		return 1;
    }

    public function get_macrofases_projeto($codprojeto){
        $this->db->where('codprojeto', $codprojeto);
        $query=$this->db->get('macrofases');
        return $query->result_array();    
    }

    public function get_microfases_projeto($codprojeto){
        $this->db->where('codprojeto', $codprojeto);
        $query=$this->db->get('microfases');
        return $query->result_array();    
    }

    public function get_dados_projeto($codprojeto){
        $this->db->where('codprojeto', $codprojeto);
        $query=$this->db->get('projetos');
        return $query->row_array();
    }

    public function get_projetos_rodando(){
       $this->db->where('ativo', 1);
       $query = $this->db->get('projetos');
       $result = $query->result_array();
       return $result;
    }
}

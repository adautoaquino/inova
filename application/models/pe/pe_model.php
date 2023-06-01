<?php

class Pe_model extends CI_Model
{

    public function __construct()
    {

        parent::__construct();
        $this->load->database();
    }
/////////////////////////////////CRIAR//////////////////////////////////////////////////
    public function criar_parceria($input){
        $this->db->insert("canvas", $input);
        return 1;
    }

    public function criar_atividades($input){
        $this->db->insert("canvas", $input);
        return 1;
    }
    
    public function criar_recursos($input){
        $this->db->insert("canvas", $input);
        return 1;
    }

    public function criar_proposta($input){
        $this->db->insert("canvas", $input);
        return 1;
    }

    public function criar_relacionamento($input){
        $this->db->insert("canvas", $input);
        return 1;
    }

    public function criar_segmento($input){
        $this->db->insert("canvas", $input);
        return 1;
    }

    public function criar_canais($input){
        $this->db->insert("canvas", $input);
        return 1;
    }

    public function criar_estrutura($input){
        $this->db->insert("canvas", $input);
        return 1;
    }

    public function criar_fontes($input){
        $this->db->insert("canvas", $input);
        return 1;
    }

/////////////////////////////////REQUISIÇÃO//////////////////////////////////////////////////

    public function get_canvas(){
        $query = $this->db->get("canvas");
        $result = $query->result_array();
        return $result;
    }

/////////////////////////////////DELETAR//////////////////////////////////////////////////

    public function deletar_canva($codcanva){
        $this->db->delete('canvas', ["codcanva" => $codcanva]);
        return 1;
    }
}
    
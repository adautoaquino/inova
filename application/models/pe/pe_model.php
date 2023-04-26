<?php

class Projetos_model extends CI_Model
{

    public function __construct()
    {

        parent::__construct();
        $this->load->database();
    }
/////////////////////////////////CRIAR//////////////////////////////////////////////////
    public function criar_parceiro($input){
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
        $this->db->insert($input);
        return 1;
    }

/////////////////////////////////REQUISIÇÃO//////////////////////////////////////////////////
    public function get_canvas(){
        $query = $this->db->get("canvas");
        $result = $query->row_array();
        return $result;
    }
/////////////////////////////////DELETAR//////////////////////////////////////////////////
}
    
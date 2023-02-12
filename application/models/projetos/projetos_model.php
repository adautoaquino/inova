<?php

class Projetos_model extends CI_Model
{

    public function __construct()
    {

        parent::__construct();
        $this->load->database();
    }

    public function criar_projetos($input)
    {
        // echo "<pre>";
        //     print_r($input);
        // echo "</pre>";
        // exit;
        $input['ativo'] = 1;
        $this->db->insert("projetos", $input);
        return 1;
    }

    public function criar_macrofase($input)
    {
        $input['ativo'] = 1;
        $this->db->insert("macrofases", $input);
        return 1;
    }

    public function get_primary_key2()
    {
        $this->db->select('codmicrofase');
        $this->db->order_by('codmicrofase', 'DESC');
        $query = $this->db->get('microfases');
        $result = $query->row()->codmicrofase;
        return $result;
    }

    public function criar_microfase($input)
    {
        $primary_key = self::get_primary_key2();
        $input['codmicrofase'] = $primary_key + 1;
        $input['ativo'] = 1;
        $this->db->insert("microfases", $input);
        return 1;
    }

    public function editar_projeto($codprojeto, $input){
        $this->db->where('codprojeto', $codprojeto);
        $query = $this->db->update('projetos', $input);
        if($query){
            return 1;
        }else{
            return 2;
        }
    }

    public function get_macrofases_projeto($codprojeto)
    {
        $this->db->where('codprojeto', $codprojeto);
        $query = $this->db->get('macrofases');
        return $query->result_array();
    }

    public function get_microfases_projeto($codprojeto)
    {
        $this->db->where('codprojeto', $codprojeto);
        $query = $this->db->get('microfases');
        return $query->result_array();
    }

    public function get_dados_projeto($codprojeto)
    {
        $this->db->where('codprojeto', $codprojeto);
        $query = $this->db->get('projetos');
        return $query->row_array();
    }

    public function get_projetos_rodando()
    {
        $this->db->where('ativo', 1);
        $query = $this->db->get('projetos');
        $result = $query->result_array();
        return $result;
    }

    public function get_macrofase($codmacrofase)
    {
        return $this->db->get_where('macrofases', array(
            "codmacrofase" => $codmacrofase
        ))->row_array();
    }

    public function get_microfase($codmicrofase)
    {
        return $this->db->get_where('microfases', array(
            "codmicrofase" => $codmicrofase
        ))->row_array();
    }

    public function editar_macrofase($input)
    {
        $this->db->set('nome_macrofase', $input['nome_macrofase']);
        $this->db->set('descricao', $input['descricao']);
        $this->db->set('responsavel', $input['responsavel']);
        $this->db->set('data_inicio', $input['data_inicio']);
        $this->db->set('data_prevista_termino', $input['data_prevista_termino']);
        $this->db->where('codmacrofase', $input['codmacrofase']);
        $this->db->update('macrofases');
        return 1;
    }

    public function deletar_macrofase($codmacrofase)
    {
        $this->db->delete('macrofases', ['codmacrofase' => $codmacrofase]);
    }

    public function editar_microfase($input)
    {
        $this->db->set('nome_microfase', $input['nome_microfase']);
        $this->db->set('descricao', $input['descricao']);
        $this->db->set('responsavel', $input['responsavel']);
        $this->db->set('data_inicio', $input['data_inicio']);
        $this->db->set('data_prevista_termino', $input['data_prevista_termino']);
        $this->db->where('codmicrofase', $input['codmicrofase']);
        $this->db->update('microfases');
        return 1;
    }

    public function deletar_microfase($codmicrofase)
    {
        $this->db->delete('microfases', ['codmicrofase' => $codmicrofase]);
    }

    public function finalizar_projeto($codprojeto)
    {
        $this->db->where('codprojeto', $codprojeto);
        $query = $this->db->get('projetos');
        $result = $query->row_array();

        $this->db->where('codprojeto', $codprojeto);
        $result["ativo"] = 0;
        $query2 = $this->db->update("projetos", $result);

        if ($query2) {
            return 1;
        } else {
            return 0;
        }
    }

    public function get_projetos_finalizados()
    {
        $this->db->where('ativo', 0);
        $query = $this->db->get('projetos');
        $result = $query->result_array();
        return $result;
    }

    public function finalizar_macrofase($codmacrofase)
    {
        $this->db->where('codmacrofase', $codmacrofase);
        $query = $this->db->get('macrofases');
        $result = $query->row_array();

        $this->db->where('codmacrofase', $codmacrofase);
        $result["ativo"] = 0;
        $query2 = $this->db->update("macrofases", $result);

        if ($query2) {
            return 1;
        } else {
            return 0;
        }
    }

    public function finalizar_microfase($codmicrofase)
    {
        $this->db->where('codmicrofase', $codmicrofase);
        $query = $this->db->get('microfases');
        $result = $query->row_array();

        $this->db->where('codmicrofase', $codmicrofase);
        $result["ativo"] = 0;
        $query2 = $this->db->update("microfases", $result);

        if ($query2) {
            return 1;
        } else {
            return 0;
        }
    }

    public function get_projeto($codprojeto){
        $this->db->where('codprojeto', $codprojeto);
        $query = $this->db->get('projetos');
        return $query->row_array();
    }
}

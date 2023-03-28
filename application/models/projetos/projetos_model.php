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

    public function criar_microfase($input)
    {
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
        $this->db->order_by('prioridade_macrofase', 'DESC');
        $this->db->where('codprojeto', $codprojeto);
        $query = $this->db->get('macrofases');
        return $query->result_array();
    }

    public function get_microfases_projeto($codprojeto)
    {
        $this->db->order_by('prioridade_microfase', 'DESC');
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
        $this->db->order_by('prioridade_projeto', 'DESC');
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
        $this->db->set('projetistas_macro', $input['projetistas_macro']);
        $this->db->set('data_inicio', $input['data_inicio']);
        $this->db->set('data_prevista_termino', $input['data_prevista_termino']);
        $this->db->set('prioridade_macrofase', $input['prioridade_macrofase']);
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

    public function get_dados_gerentes_responsaveis(){
        $this->db->where('ativo', 0);
        $query = $this->db->get('projetos');
        $result = $query->result_array();
        $dados = [];
        foreach($result as $item => $result_item){
            if(in_array($result_item['responsavel'], $dados)){
                $dados[$result_item['responsavel']] = $dados[$result_item['responsavel']] + 1;
            }else{
                $dados[$result_item['responsavel']] =1;
            }
        }
    }

    public function get_dados_projetos_rodando(){

        $this->db->where('ativo', 1);
        $query = $this->db->get('projetos');
        $result = $query->result_array();
        $rodando_atrasado = [];
        $rodando_no_prazo =[];
        if(count($result) != 0){
            foreach($result as $item => $result_item){
                $data_final = new DateTime($result_item['data_prevista_termino']);
                $data_agr = new DateTime();
                if ($data_agr > $data_final) {
                    $rodando_atrasado[$item] = $result_item;
                } else {
                    $rodando_no_prazo[$item] = $result_item;
                }
            }
            if(count($rodando_atrasado) != 0){
                $dados['rodando_atrasado'] = count($rodando_atrasado);
            }else{
                $dados['rodando_atrasado'] = 0;
            }
            if(count($rodando_no_prazo) != 0){
                $dados['rodando_no_prazo'] = count($rodando_no_prazo);
            }else{
                $dados['rodando_no_prazo'] = 0;
            }
        }else{
            $dados['rodando_atrasado'] = 0;
            $dados['rodando_no_prazo'] = 0;
        }
        return $dados;
        // echo "<pre>";
        //     print_r($dados);
        // echo "</pre>";
        // exit;
    }
    public function get_dados_projetos_finalizados(){

        $this->db->where('ativo', 0);
        $query = $this->db->get('projetos');
        $result = $query->result_array();
        $finalizado_atrasado = [];
        $finalizado_no_prazo = [];
        foreach($result as $item => $result_item){
            $data_final = new DateTime($result_item['data_finalizacao']);
            $data_agr = new DateTime($result_item['data_prevista_termino']);
            if ($data_agr < $data_final) {
                $finalizado_atrasado[$item] = $result_item;
            } else {
                $finalizado_no_prazo[$item] = $result_item;
            }
        }
        if(count($finalizado_atrasado) != 0){
            $dados['finalizado_atrasado'] = count($finalizado_atrasado);
        }
        if(count($finalizado_no_prazo) != 0){
            $dados['finalizado_no_prazo'] = count($finalizado_no_prazo);
        }
        return $dados;
        // echo "<pre>";
        //     print_r($dados);
        // echo "</pre>";
        // exit;
    }
        
}
    
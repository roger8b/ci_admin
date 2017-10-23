<?php

class Ins_grupo_model extends CI_Model

{
    function __construct()
    {
        parent::__construct();
    }

    // Insert

    function add_dados($tabela, $parametros)
    {
        $msg = array();

        // Verifica se nome já existe no banco

        if ($this->db->get_where($tabela, array(
            'nome' => $parametros['nome']
        ))->row_array()) {
            array_push($msg, '<div class="alert alert-danger" role="alert">Já existe um grupo com este Nome!</div>');
        }

        if (count($msg) == 0) {
            $this->db->insert($tabela, $parametros);
            array_push($msg, '<div class="alert alert-success" role="alert">Grupo registrado com sucesso!</div>');
            return $msg;
        } else
            return $msg;
    }
}

 
 



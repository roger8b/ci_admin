<?php

class Cadastro_model extends CI_Model

{
    function __construct()
    {
        parent::__construct();
    }

    // Insert

    function add_dados($tabela, $parametros)
    {
        $msg = array();

        // Verifica email / cpf / crm jÃ¡ esta cadastrado no banco.

        if ($this->db->get_where($tabela, array(
            'email' => $parametros['email']
        ))->row_array()) {
            array_push($msg, '<div class="alert alert-danger" role="alert">Já existe um usuário com este Email!</div>');
        }
        if ($this->db->get_where($tabela, array(
            'cpf' => $parametros['cpf']
        ))->row_array()) {
            array_push($msg, '<div class="alert alert-danger" role="alert">Já existe um usuário com este CPF!</div>');
        }
        if ($this->db->get_where($tabela, array(
            'crm' => $parametros['crm']
        ))->row_array()) {
            array_push($msg, '<div class="alert alert-danger" role="alert">Já existe um usuário com este CRM!</div>');
        }

        if (count($msg) == 0) {
            $this->db->insert($tabela, $parametros);
            array_push($msg, '<div class="alert alert-success" role="alert">Usuário registrado com sucesso!</div>', '1');
            return $msg;
        } else
            return $msg;
    }

    // Select + Where

    function selec_dado($tabela, $id)
    {
        return $this->db->get_where($tabela, array(
            'user_id' => $id
        ))->row_array();
    }

    // Select All

    function selec_dados($tabela)
    {
        $this->db->order_by('id', 'asc');
        return $this->db->get($tabela)->result_array();
    }
}
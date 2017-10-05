<?php
class Inicio_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    //Insert
    function add_dados($tabela, $parametros) {
        //Verifica email / cpf / crm já esta cadastrado no banco.
        if ($this->db->get_where($tabela, array('email' => $parametros['email']))->row_array()) {
            return array('tipo' => 'alert alert-danger', 'msg' => 'Já existe um usuário com este email!');
        } else if ($this->db->get_where($tabela, array('cpf' => $parametros['cpf']))->row_array()) {
            return array('tipo' => 'alert alert-danger', 'msg' => 'Já existe um usuário com este CPF!');
        } else if ($this->db->get_where($tabela, array('crm' => $parametros['crm']))->row_array()) {
            return array('tipo' => 'alert alert-danger', 'msg' => 'Já existe um usuário com este CRM!');
        } else {
            $this->db->insert($tabela, $parametros);
            return array('tipo' => 'alert alert-success', 'msg' => 'Usuário registrado com sucesso!');
        }
    }

    //Select + Where
    function selec_dado($tabela, $id) {
        return $this->db->get_where($tabela, array('user_id' => $id))->row_array();
    }

    function verificar_usuario($email, $senha) {
        $this->db->where('email', $email);
        $this->db->where('senha', md5($senha));
        $query = $this->db->get('user');
        return $query->result();
    }

}
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Inicio_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_admin()
    {
        $email = "admin@admin.com";
        $senha = "e698f2679be5ba5c9c0b0031cb5b057c";
        if ($this->db->get_where('user', array('email' => $email))->row_array()) {
            return TRUE;
        } else {

            $parametros = array('id' => 'default',
                'nome' => 'admin',
                'email' => 'admin@admin.com',
                'senha' => 'e698f2679be5ba5c9c0b0031cb5b057c',
                'cpf' => '000',
                'crm' => '000',
                'dt_nasc' => date('Y-m-d'),
                'tipo' => '0',
                'grupo' => '0',
                'status' => '0',
                'dt_criado' => date('Y-m-d'));
            $this->db->insert('user', $parametros);
        }

    }
} ?>
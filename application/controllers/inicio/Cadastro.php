<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('login/User_model');
        $this->load->model('inicio/Cadastro_model');
        $this->load->library('auxiliar');
        $login_status = $this->session->userdata('login');
        if ($login_status == TRUE) {
            $data = array(
                'login' => '',
                'uname' => '',
                'uid' => ''
            );
            $this->session->unset_userdata($data);
            $this->session->sess_destroy();
            redirect('inicio');
        }
    }

    public function index()
    {
        $dados['titulo'] = "Cadastro";
        $dados['_view'] = 'login/formularios/cadastro';
        $dados['pg_header'] = "Cadastro";
        $this->load->view('login/index', $dados);

    }

    public function criar()
    {
        $this->form_validation->set_rules('txt_nome', 'Nome', 'trim|required');
        $this->form_validation->set_rules('txt_email', 'Email', 'trim|valid_email|required');
        $this->form_validation->set_rules('txt_cpf', 'CPF', 'trim|required|callback_valid_cpf');
        $this->form_validation->set_rules('txt_crm', 'CRM', 'trim|numeric|required');
        $this->form_validation->set_rules('txt_dt_nasc', 'Data de Nascimento', 'trim|required|callback_valid_dt_nasc');
        $this->form_validation->set_rules('txt_senha_c', 'Confirma', 'trim|required|min_length[6]|matches[txt_senha]');
        $this->form_validation->set_rules('txt_senha', 'Nova', 'trim|required|min_length[6]');
        $this->form_validation->set_message('valid_cpf', 'Número do CPF inválido!');
        $this->form_validation->set_message('valid_dt_nasc', 'Data de Nascimento inválida!');



        if ($this->form_validation->run() == FALSE) {
            $dados['form_erro'] = validation_errors();
        } else {
            $dados['parametros'] = [
                'id' => 'default',
                'nome' => $this->input->post('txt_nome'),
                'email' => $this->input->post('txt_email'),
                'cpf' => $this->auxiliar->rem_format($this->input->post('txt_cpf')),
                'crm' => $this->input->post('txt_crm'),
                'dt_nasc' => $this->input->post('txt_dt_nasc'),
                'senha' => md5($this->input->post('txt_senha')),
                // Tipo de Conta 0 - Admin / 1 - User.
                'tipo' => 1,
                'grupo' => NULL,
                // Status 0 - Criado / 1 - ativo / 2 - Bloqueado
                'status' => 1,
                'dt_criado' => date('Y-m-d')
            ];

            // Retorno de informação do banco
            $dados['msg_banco'] = $this->Cadastro_model->add_dados('user', $dados['parametros']);
            $dados['status'] = array_pop($dados['msg_banco']);

            // Chamada de função fazer insert no banco
            //$this->Cadastro_model->add_dados('user', $dados['parametros']);
        }

        $dados['titulo'] = "Cadastro";
        $dados['pg_header'] = "Cadastro";
        $dados['_view'] = 'login/formularios/cadastro';
        //$dados['usuario'] = $this->User_model->get_user_by_id($this->session->userdata('uid'));
        $this->load->view('login/index', $dados);

    }

    function valid_cpf($cpf)
    {

        // Verifiva se o numeor digitado contem todos os digitos

        $cpf = str_pad(preg_replace('/[^0-9]/', '', $cpf), 11, '0', STR_PAD_LEFT);

        // Verifica se nenhuma das sequencias abaixo foi digitada, caso seja, retorna falso

        if (strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999') {
            return FALSE;
        } else {

            // Calcula os numeros para verificar se o CPF são verdadeiro

            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf
                        {
                        $c} * (($t + 1) - $c);
                }

                $d = ((10 * $d) % 11) % 10;
                if ($cpf
                    {
                    $c} != $d) {
                    return FALSE;
                }
            }

            return TRUE;
        }
    }

    function valid_dt_nasc($dt)
    {

        // Verifica se a data de entrada são maior ou igual ao dia atual.

        date_default_timezone_set("America/New_York");
        if ($dt >= date("Y-m-d")) {
            return FALSE;
        } else {
            return TRUE;
        }
    }
}


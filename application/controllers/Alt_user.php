<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alt_user extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Alt_user_model');
	}

	public function alterar($user_id) {
		$dados['titulo'] = "Alterar";
		$dados['pg_header'] = "Editar Informações do Usuário";
		$dados['_view'] = 'painel_controle/form_alt_user';
		$dados['tb_user'] = $this->Alt_user_model->selec_dado('user',$user_id);
		$this->load->view('painel_controle/index', $dados);

		// Regras de validação do Formulario de registro de usuário
		$this->form_validation->set_rules('txt_nome', 'Nome', 'trim|required');
		$this->form_validation->set_rules('txt_email', 'Email', 'trim|required');
		$this->form_validation->set_rules('txt_cpf', 'CPF', 'trim|required|callback_valid_cpf');
		$this->form_validation->set_rules('txt_crm', 'CRM', 'trim|required');
		$this->form_validation->set_rules('txt_dt_nasc', 'Data de Nascimento', 'trim|required');
		$this->form_validation->set_rules('txt_senha', 'Senha', 'trim|required|min_length[5]|matches[txt_conf_senha]');
		$this->form_validation->set_rules('txt_conf_senha', 'Confirma Senha', 'trim|required');
		$this->form_validation->set_rules('txt_conta', 'Tipo de Conta', 'trim|required');
		$this->form_validation->set_rules('txt_grupo', 'Grupo de Usuários', 'trim|required');
		$this->form_validation->set_message('valid_cpf', 'Número do CPF inválido!');
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ins_user extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Ins_user_model');
	}

	public function index() {
		$dados['titulo'] = "Cadastro";
		$dados['pg_header'] = "Cadastrar novo usuário";
		$dados['_view'] = 'painel_controle/form_ins_user';
		$this->load->view('painel_controle/index', $dados);
	}

	public function novo_usuario() {
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
		//Caso as informações do formulario estejam corretas organiza e faz insert no banco.
		if ($this->form_validation->run() == FALSE) {
			$dados['form_erro'] = validation_errors();
		} else {
			$dados['parametros'] = array('id' => 'default',
				'nome' => $this->input->post('txt_nome'),
				'email' => $this->input->post('txt_email'),
				'cpf' => $this->input->post('txt_cpf'),
				'crm' => $this->input->post('txt_crm'),
				'dt_nasc' => $this->input->post('txt_dt_nasc'),
				'senha' => md5($this->input->post('txt_senha')),
				'Tipo' => $this->input->post('txt_conta'),
				'grupo' => $this->input->post('txt_grupo'),
			);
			// Retorno de informação do banco
			$dados['msg_banco'] = $this->Ins_user_model->add_dados('user', $dados['parametros']);
			//Chamada de função fazer insert no banco
			$this->Ins_user_model->add_dados('user', $dados['parametros']);
		}
		$dados['titulo'] = "Cadastro";
		$dados['pg_header'] = "Cadastrar novo usuário";
		$dados['_view'] = 'painel_controle/form_ins_user';
		$this->load->view('painel_controle/index', $dados);
	}

	function valid_cpf($cpf) {
		// Verifiva se o número digitado contém todos os digitos
		$cpf = str_pad(preg_replace('/[^0-9]/', '', $cpf), 11, '0', STR_PAD_LEFT);

		// Verifica se nenhuma das sequências abaixo foi digitada, caso seja, retorna falso
		if (strlen($cpf) != 11 ||
			$cpf == '00000000000' ||
			$cpf == '11111111111' ||
			$cpf == '22222222222' ||
			$cpf == '33333333333' ||
			$cpf == '44444444444' ||
			$cpf == '55555555555' ||
			$cpf == '66666666666' ||
			$cpf == '77777777777' ||
			$cpf == '88888888888' ||
			$cpf == '99999999999') {
			return FALSE;
		} else {
			// Calcula os números para verificar se o CPF é verdadeiro
			for ($t = 9; $t < 11; $t++) {
				for ($d = 0, $c = 0; $c < $t; $c++) {
					$d += $cpf{$c} * (($t + 1) - $c);
				}

				$d = ((10 * $d) % 11) % 10;
				if ($cpf{$c} != $d) {
					return FALSE;

				}
			}
			return TRUE;
		}

	}
}

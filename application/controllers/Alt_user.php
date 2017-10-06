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
		$dados['tb_grupo'] = $this->Alt_user_model->selec_dados('grupo');
		$this->load->view('painel_controle/index', $dados);

		
	}

}

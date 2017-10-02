<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lista_usuarios extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Lista_usuarios_model');
	}

	public function index() {
		$dados['titulo'] = "Usuários";
		$dados['pg_header'] = "Usuarios do Sistema";
		$dados['_view'] = 'painel_controle/lista_usuarios';
		$dados['tb_user'] = $this->Lista_usuarios_model->selec_dados('user');
		$this->load->view('painel_controle/index', $dados);
	}

}

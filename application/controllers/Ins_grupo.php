<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ins_grupo extends CI_Controller

{
 function __construct()
 {
  parent::__construct();
  $this->load->helper('form');
  $this->load->library('form_validation');
  $this->load->model('Ins_grupo_model');
  $this->load->library('auxiliar');
 }

 public

 function index()
 {
  $dados['titulo'] = "Cadastro";
  $dados['pg_header'] = "Cadastrar Grupo";
  $dados['_view'] = 'painel_controle/formularios/form_ins_grupo';
  $dados['tb_grupo'] = $this->Ins_grupo_model->selec_dados('grupo');
  $this->load->view('painel_controle/index', $dados);
 }

 public

 function ins_n_grupo()
 {

  // Regras de validação do Formulario de registro de frupo

  $this->form_validation->set_rules('txt_nome', 'Nome', 'trim|required');

  // Caso as informações do formulario estejam corretas organiza e faz insert no banco.

  if ($this->form_validation->run() == FALSE)
  {
   $dados['form_erro'] = validation_errors();
  }
  else
  {
   $dados['parametros'] = array(
    'id' => 'default',
    'nome' => $this->input->post('txt_nome') ,

    // Status  / 0 - inativo / 1 - ativo

    'status' => 1,
    'dt_criado' => date('Y-m-d') ,
    'dt_desativado' => NULL,
   );

   // Retorno de informação do banco

   $dados['msg_banco'] = $this->Ins_grupo_model->add_dados('grupo', $dados['parametros']);

   // Chamada de função fazer insert no banco

   $this->Ins_grupo_model->add_dados('grupo', $dados['parametros']);
  }

  $dados['titulo'] = "Cadastro";
  $dados['pg_header'] = "Cadastrar novo usuário";
  $dados['_view'] = 'painel_controle/formularios/form_ins_grupo';
  $dados['tb_grupo'] = $this->Ins_grupo_model->selec_dados('grupo');
  $dados['txt_grupo'] = $this->input->post('txt_grupo');
  $this->load->view('painel_controle/index', $dados);
 }
}
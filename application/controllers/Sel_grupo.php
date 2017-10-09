<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sel_grupo extends CI_Controller

{
 function __construct()
 {
  parent::__construct();
  $this->load->helper('form');
  $this->load->library('form_validation');
  $this->load->model('Sel_grupo_model');
 }

 public

 function index()
 {
  $dados['titulo'] = "Usuários";
  $dados['pg_header'] = "Usuarios do Sistema";
  $dados['_view'] = 'painel_controle/tabelas/lista_grupos';
  $dados['tb_user'] = $this->Sel_grupo_model->selec_dados('grupo');
  $this->load->view('painel_controle/index', $dados);
 }
}

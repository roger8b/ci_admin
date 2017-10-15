<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Painel_controle extends CI_Controller

{
 public

 function __construct(){
 	parent:: __construct();
 	$this->load->model('User_model');
 }

 function index()
 {
  $dados['titulo'] = "Painel de Controle";
  $dados['pg_header'] = "";
  $dados['usuario'] = $this->User_model->get_user_by_id($this->session->userdata('uid'));
  $this->load->view('painel_controle/index', $dados);
 }
}

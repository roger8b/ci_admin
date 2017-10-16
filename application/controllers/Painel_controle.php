<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Painel_controle extends CI_Controller

{
 public

 function __construct()
 {
 	parent:: __construct();
 	$this->load->model('User_model');
 }

 function index()
  {
   $dados['titulo'] = "Painel de Controle";
   $dados['pg_header'] = "Painel de Controle";
   $dados['usuario'] = $this->User_model->get_user_by_id($this->session->userdata('uid'));
   $dados['acesso'] = $this->acesso();	
   $this->load->view('painel_controle/index', $dados);
  }

 function acesso()
  {
  	$user = $this->User_model->get_user_by_id($this->session->userdata('uid'));
  	if ($user[0]->tipo == 0)
  	 {
  	  return "visible";
  	 }
  	  else
  	 {
  	  return "hidden";
  	 }
  }
}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Painel_controle extends CI_Controller

{
 public

 function index()
 {
  $dados['titulo'] = "Painel de Controle";
  $dados['pg_header'] = "";
  $this->load->view('painel_controle/index', $dados);
 }
}

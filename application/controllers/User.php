
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller

{
  public

  function __construct()
  {
    parent::__construct();
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->model('User_model');
  }

  public

  function index()
  {
    $dados['titulo'] = "Login";
    $this->load->view('login/index', $dados);
  }

  public

  function login()
  {

    // Regras de validação do formulario login

    $this->form_validation->set_rules('txt_email', 'Email', 'trim|required');
    $this->form_validation->set_rules('txt_senha', 'Senha', 'trim|required');
    if ($this->form_validation->run() == FALSE)
    {
      $dados['form_erro'] = validation_errors();
    }
    else
    {

      // Recebe dados do formulario

      $email = $this->input->post("txt_email");
      $senha = $this->input->post("txt_senha");

      // Verifica credenciais de usuario

      $uresult = $this->User_model->get_user($email, $senha);
      if (count($uresult) > 0)
      {

        // Verifica se o statu do usuario

        if ($uresult[0]->status == 2)
        {
          $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Usuário Bloqueado entre em contato com o administrador do sistema</div>');
        }
        else
        {

          // Inicia sessão

          $sess_data = array(
            'login' => TRUE,
            'uname' => $uresult[0]->nome,
            'uid' => $uresult[0]->id
          );
          $this->session->set_userdata($sess_data);
          redirect("painel_controle/index");
        }
      }
      else
      {
        $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Nome do Usuário ou Senha Invalidos</div>');
      }

      $dados['titulo'] = "Login";
      $this->load->view('login/index', $dados);
    }
  }

  function logout()
  {
    $data = array(
      'login' => '',
      'uname' => '',
      'uid' => ''
    );
    $this->session->unset_userdata($data);
    $this->session->sess_destroy();
    redirect('/');
  }
}

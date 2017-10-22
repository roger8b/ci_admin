<?php
class Alt_grupo_model extends CI_Model

{
 function __construct()
 {
  parent::__construct();
 }

 // Select + Where

 function selec_dado($tabela, $id)
 {
  return $this->db->get_where($tabela, array(
   'id' => $id
  ))->row_array();
 }

 // Select All

 function selec_dados($tabela)
 {
  $this->db->order_by('id', 'asc');
  return $this->db->get($tabela)->result_array();
 }

 // Update

 function update_dados($tabela, $id, $parametros)
 {
  $consulta = $this->db->get_where($tabela, array(
   'id' => $id  
  ))->row_array();

  $msg = array();

  // Verifica duplicidade no banco
  if($consulta['nome'] != $parametros['nome']){
    if($this->db->get_where($tabela, array('nome' => $parametros['nome']))->row_array()){
     array_push($msg,'<div class="alert alert-danger" role="alert">Já existe um Grupo com este nome!</div>' );
    }
  }
  if(count($msg) == 0){
    $this->db->where('id', $id);
    $this->db->update($tabela, $parametros);
    array_push($msg,'<div class="alert alert-danger" role="alert">Dados alterados com sucesso!!!</div>' );
    return $msg;
  }
  else{
    return $msg;
  }
}

}
<?php
class Alt_user_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    //Select + Where
    function selec_dado($tabela, $id) {
        return $this->db->get_where($tabela, array('id' => $id))->row_array();
    }
    //Select All
	function selec_dados($tabela) {
		$this->db->order_by('id', 'asc');
		return $this->db->get($tabela)->result_array();
	}

}

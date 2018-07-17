<?php

Class Busca_model extends CI_Model{

	public function usuarios(){
		return $this->db->get('usuarios')->result_array();
	}


	public function buscar($busca){
		
		if(empty($busca))
       		return array();

		$busca = $this->input->post('busca');

		$this->db->like('nome', $busca);
		$query = $this->db->get('usuarios');
		return $query->result_array();

	}


}
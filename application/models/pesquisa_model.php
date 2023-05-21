<?php

class Pesquisa_model extends CI_Model {

    public function pesquisarUsuarios($nome){
        $this->db->like('nome',"$nome");
        $contatos = $this->db->get('contatos');
        return $contatos->result_array();
    }

}
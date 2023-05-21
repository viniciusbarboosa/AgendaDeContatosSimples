<?php

class Usuarios_model extends CI_Model {

    public function listarUsuarios(){
        $contatos = $this->db->get('contatos');
        return $contatos->result_array();
    }

}
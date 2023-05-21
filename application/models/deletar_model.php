<?php

class Deletar_model extends CI_Model {

    public function deletar($id){
        $this->db->where("id",$id);
        $this->db->delete("contatos");
    }
}
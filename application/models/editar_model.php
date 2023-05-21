<?php

class Editar_model extends CI_Model {

    public function usuarioEditado($id){
        $this->db->where("id",$id);
        $usuario=$this->db->get("contatos");
        return $usuario->row_array();
    }

    public function editar($id,$mandarProBanco){
        $this->db->where("id",$id);
        $this->db->update("contatos",$mandarProBanco);
        
    }
}
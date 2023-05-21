<?php

class Adicionar_model extends CI_Model {

    public function adicionar($mandarProBanco){
        $this->db->insert("contatos",$mandarProBanco);
    }
}
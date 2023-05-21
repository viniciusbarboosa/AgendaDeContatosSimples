<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adicionar extends CI_Controller {

	public function index()
	{
		$this->load->view('pages/Adicionar');
	}

    public function salvar(){
        $nome=$_POST['nome'];
        $email=$_POST['email'];
        $numero=$_POST['numero'];

		$mandarProBanco = [
			"nome"=>$nome,
			"email"=>$email,
			"numero"=>$numero
		];
		
		$this->load->model("adicionar_model");
		$this->adicionar_model->adicionar($mandarProBanco);

		$this ->session-> set_flashdata ('alerta' ,  'Adicionado Com Sucesso');
		redirect("Home");
    }
}
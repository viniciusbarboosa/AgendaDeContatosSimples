<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editar extends CI_Controller {
	
	public function index(){
	
	}

	public function editando($id){
		$this->load->model('editar_model');
		$usuario = $this->editar_model->usuarioEditado($id);
		$data['usuario']=$usuario;
		$this->load->view('pages/Editar',$data);
	}

	public function editar($id){
		$nome=$_POST['nome'];
        $email=$_POST['email'];
        $numero=$_POST['numero'];

		$mandarProBanco = [
			"nome"=>$nome,
			"email"=>$email,
			"numero"=>$numero
		];

		$this->load->model('editar_model');
		$this->editar_model->editar($id,$mandarProBanco);

		$this ->session-> set_flashdata ('alerta' ,  'Editado Com Sucesso');
		redirect("Home");
	}
}

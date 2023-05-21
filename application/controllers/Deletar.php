<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deletar extends CI_Controller {

	public function index()
	{

	}

	public function delete($id){
		$this->load->model("deletar_model");
		$this->deletar_model->deletar($id);

		$this ->session-> set_flashdata ('alerta' ,  'Deletado Com Sucesso');
		redirect('Home');
	}
}

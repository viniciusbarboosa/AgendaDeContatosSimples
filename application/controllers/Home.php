<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('usuarios_model');
		$data['contatos'] = $this->usuarios_model->listarUsuarios();

		if(!empty($this->session->flashdata('alerta'))){
				$data['alerta'] = $this->session->flashdata('alerta'); 
			}

		$this->load->view('pages/Home',$data);
	}

	public function pesquisa(){
		$pesquisa = $_POST['busca'];
		$data['pesquisa'] = $pesquisa;


		$this->load->model('pesquisa_model');
		$data['contatos'] = $this->pesquisa_model->pesquisarUsuarios($pesquisa);
		
		$this->load->view('pages/Pesquisa',$data);

	}
}

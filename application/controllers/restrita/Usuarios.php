<?php

defined('BASEPATH') OR exit('Ação não permitida');

class Usuarios extends CI_Controller{


	public function __construct(){
		parent::__construct();

			// Sessão Válida?	
	}
		//pegar os usuarios
	public function index(){

			
		$data = array(
		
			'usuarios' => $this->ion_auth->users()->result(), // pegar todos os usuários
		);

//		echo '<pre>';
//		print_r($data['usuarios']);
//		exit;


		$this->load->view('restrita/layout/header', $data);
		$this->load->view('restrita/usuarios/index');
		$this->load->view('restrita/layout/footer');




	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Model_User");
	}

	public function index(){
		$data["titulo"] = 'Home';
		$data["queryfilas"]= $this->Model_User->filas();
		$data["query"]= $this->Model_User->getUsers();
		$this->load->view("User/template/header",$data);
		$this->load->view("User/home/index");
		$this->load->view("User/template/footer");

	}

	public function formUser(){
		$data["boton"] = 'Guardar';
		$data["titulo"] = 'Modulo Usuario';
        $data ["op"]='nuevo';
		$this->load->view("User/template/header",$data);
		$this->load->view("User/forms/moduleuser",$data);
		$this->load->view("User/template/footer");
	}

	public function guardar()
	{
        $this->form_validation->set_rules('nNombre','name','required');
		$op = $this->input->post('op');
		$id= $this->input->post('nid');
		$nombre= $this->input->post('nNombre');
		$imagen = $this->input->post('nImagen');

		$data = array(
              'Name' =>$nombre,
              'Imagen'=>$imagen
			);
        if ($this->form_validation->run() == FALSE) {
        	
        	     redirect(base_url(). 'home/formUser');
        }
        else {

        	if ($op == "nuevo") {
        		$this->Model_User->insertar($data);
        
        }else {

        	$this->Model_User->update($id,$data);
 

        }
	     redirect(base_url(). 'home');


        }
        

	}

	public function editar($id)
	{
		$data["boton"] = 'Editar';
		$data["titulo"] = 'Editar';
		$data["op"]= 'editar';
		$data["query"]= $this->Model_User->edit($id);
	    $this->load->view("User/template/header");
		$this->load->view("User/forms/moduleuser",$data);
		$this->load->view("User/template/footer");

	}

	public function eliminar($id)
	{
		$this->Model_User->borrar($id);
		redirect(base_url(). 'home');
	}


}
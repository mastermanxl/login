<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


  function __construct() {
	  parent::__construct();
	  $this->load->model('Model_Login');
	  
	  
  }


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		//echo "prueba";
		$data['pantalla']="login/index";

		//$data['qempledos']=$this->Model_Empleado->verEmpleado();
		$this->load->view('template_login',$data);
	}
	
	
	public function insert()
	{
		$datos=$this->input->post();
		
		$f=$this->Model_Empleado->addEmpleado($datos);
		
		if ($f) redirect('');else
				{
			$data['pantalla']="usuarios/no_record";
			$this->load->view('template',$data);
		}			
		
		
	}
	
	
	public function update()
	{
		$datos=$this->input->post();
		
		$f=$this->Model_Empleado->updateEmpleado($datos);
		
		if ($f) redirect('');else
				{
			$data['pantalla']="usuarios/no_record";
			$this->load->view('template',$data);
		}			
		
		
	}	
	
	
	
	public function elimina($id=NULL)
	{
		if ($id!=NULL) {		
		  
					$f=$this->Model_Empleado->deleteEmpleado($id);
		
					if ($f) redirect(''); else
							{
						$data['pantalla']="usuarios/no_record";
						$this->load->view('template',$data);
					}			
					  
		  
		} else {
			$data['pantalla']="usuarios/no_record";
			$this->load->view('template',$data);
		}
		
	}	
	
	
	public function ingresar()
	{
		$datos=$this->input->post();
		
		$f=$this->Model_Login->loginUsuario($datos);
					
		
		
					if ($f) {
						//redirect(''); 
						/*
						$data['pantalla']="usuarios/editar";
						$data['userdata']=$f;
						
						$this->load->view('template',$data);
						*/
						echo "ok";
					}else
					 {
						 /*
						$data['pantalla']="usuarios/no_record";
						$this->load->view('template',$data); */
						echo "error";
						
					}
		
	}
	
	
	public function editar($id=NULL)
	{
		if ($id!=NULL) {		
		  
					$f=$this->Model_Empleado->cargaEmpleado($id);
					
		
		
					if ($f) {
						//redirect(''); 
						
						$data['pantalla']="usuarios/editar";
						$data['userdata']=$f;
						
						$this->load->view('template',$data);
						
					}else
							{
						$data['pantalla']="usuarios/no_record";
						$this->load->view('template',$data);
					}			
					  
		  
		} else {
			$data['pantalla']="usuarios/no_record";
			$this->load->view('template',$data);
		}
		
	}	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}

<?php

class Model_Login extends CI_Model {


 public function __construct()
 {
     parent::__construct();
     //Do your magic here
     $this->load->database();
 }
 

 
 	public function loginUsuario($datos){
			
			$this->db->where('email',$datos['email']);					
			$this->db->where('clave',$datos['clave']);								
			$rs=$this->db->get('empleados');
			
			if ($rs->num_rows()>0) return $rs->row(); else
			return false;
			
		}
		
 
 
 
 
        public function verEmpleado(){

            $query=$this->db->query("Select * from empleados");
            return $query->result();

        }
		
		
		
		public function cargaEmpleado($id){

            $query=$this->db->query("Select * from empleados where id='".$id."'");
            return $query->result();

			///return ($this->db->affected_rows() != 1) ? false : $query->result();
        }
		
		
		
		public function addEmpleado($datos){
			
			
			//Comprueba nombre repetido
			$query = $this->db->get_where('empleados', array('email' => $datos['email']));
            		
			if ($query->num_rows() > 0) {
                return 0;
            }
			
			
			
			$array=array('id'=>'','nombre'=>$datos['nombre'],'email'=>$datos['email'],'clave'=>$datos['clave']);
						
			$this->db->insert('empleados',$array);
			
			return ($this->db->affected_rows() != 1) ? false : true;
			
		}

		
		public function updateEmpleado($datos){
			
		
			
			
			$array=array('id'=>$datos['reference'],'nombre'=>$datos['nombre']);
						
						
			$this->db->where('id',$datos['reference']);					
			$this->db->update('empleados',$array);
			
			return ($this->db->affected_rows() != 1) ? false : true;
			
		}
		
		
		
		
		
		public function deleteEmpleado($id){
			
			
			$this->db->where('id',$id);
			$this->db->delete('empleados');
			
			return ($this->db->affected_rows() != 1) ? false : true;
			
		}



}

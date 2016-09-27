<?php

class Model_User extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}

	public function filas(){
		$queryfilas = $this->db->get('usuarios');
		return $queryfilas->num_rows();
	}

	public function getUsers()
	{
		$query = $this->db->query("select * from usuarios");
		return $query;

	}
	public function insertar($data){

		$this->db->insert('usuarios',$data);

	}

	public function borrar($id)
	{
		$this->db->where('Id',$id);
		$this->db->delete('usuarios');
	}

	public function edit($id)
	{
		$this->db->where('Id',$id);
		return $this->db->get('usuarios');

	}

	public function update($id,$data)
	{
		 $this->db->where('Id',$id);
		 $this->db->update('usuarios',$data);
	}
}





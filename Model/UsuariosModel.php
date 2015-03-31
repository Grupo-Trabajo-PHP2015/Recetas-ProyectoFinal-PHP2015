<?php 


class UsuariosModel
{
	private $Cedula;
	private $Nombre;
	private $Email;
	private $Usuario;
	private $Password;
	private $Roles_idRol;
	private $db;
	private $idRol;
	private $Rol;
	
	function __construct()
	{
		$this->db = Database::getInstance();
	}

	public function __GET($atributo){
		return $this->$atributo;
	}

	public function __SET($valor, $atributo){
		$this->$atributo = $valor;
	}


	public function read2(){

		$sql = 'SELECT idRol, Rol FROM roles ';
		$sth = $this->db->prepare($sql);
		$sth->execute();
		return $sth->fetchAll(PDO::FETCH_ASSOC);	

	}

	public function create(){

		$sql = 'INSERT INTO usuarios (Cedula,Nombre,Email,Usuario,Password,Roles_idRol)  VALUES (:Cedula, :Nombre, :Email, :Usuario, :Password, :Roles_idRol)';
		$sth = $this->db->prepare($sql);
		$sth->execute(array(':Cedula' => $this->__GET("Cedula"),
					':Nombre'=> $this->__GET("Nombre"), 
					':Email'=>  $this->__GET("Email"),
					':Usuario'=>  $this->__GET("Usuario"),
					':Password'=>  $this->__GET("Password"),
					':Roles_idRol'=>  $this->__GET("Roles_idRol")));
		return $sth;
		}

	public function read(){
		$sql = 'SELECT u.Cedula, u.Nombre,u.Email,u.Usuario,u.Password,r.Rol FROM usuarios u 
		join roles r on u.Roles_idRol=r.idRol';
		$sth = $this->db->prepare($sql);
		$sth->execute();
		return $sth->fetchAll(PDO::FETCH_ASSOC);	
	}


	public function update(){
		$sql = 'UPDATE usuarios SET Nombre= :Nombre , Email= :Email, Usuario= :Usuario, Password= :Password , Roles_idRol= :Roles_idRol  WHERE Cedula = :Cedula';
		$sth = $this->db->prepare($sql);
		$sth->execute(array(':Cedula' => $this->__GET("Cedula"),
					':Nombre'=> $this->__GET("Nombre"), 
					':Email'=>  $this->__GET("Email"),
					':Usuario'=>  $this->__GET("Usuario"),
					':Password'=>  $this->__GET("Password"),
					':Roles_idRol'=>  $this->__GET("Roles_idRol")));
		return $sth;
	}

	public function delete(){
		$sql = 'DELETE FROM usuarios WHERE Cedula = :Cedula';
		$sth = $this->db->prepare($sql);
		$sth->execute(array(':Cedula' =>  $this->__GET("Cedula")));
		return $sth;
	}

	public function find(){
		$sql = 'SELECT Cedula,Nombre,Email,Usuario,Password,Roles_idRol FROM usuarios WHERE Cedula = :Cedula';
		$sth = $this->db->prepare($sql);
		$sth->execute(array(':Cedula' =>  $this->__GET("Cedula")));
		return $sth->fetchAll();
	}
}

?>

	
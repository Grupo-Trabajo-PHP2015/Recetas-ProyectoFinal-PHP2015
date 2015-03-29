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
		$sql = 'SELECT Cedula,Nombre,Email,Usuario,Password,Roles_idRol FROM usuarios';
		$sth = $this->db->prepare($sql);
		$sth->execute();
		return $sth->fetchAll(PDO::FETCH_ASSOC);	
	}

	// public function update(){
	// 	$sql = 'UPDATE productos SET nombre= :nombre , cantidad = :cantidad, precio= :precio WHERE idproducto = :idproducto';
	// 	$sth = $this->db->prepare($sql);
	// 	$sth->execute(array(':idproducto' => $this->__GET("idproducto"),
	// 				':nombre'=> $this->__GET("nombre"), 
	// 				':cantidad'=>  $this->__GET("cantidad"),
	// 				':precio'=>  $this->__GET("precio")));
	// 	return $sth;
	// }

	// public function delete(){
	// 	$sql = 'DELETE FROM productos WHERE idproducto = :idproducto';
	// 	$sth = $this->db->prepare($sql);
	// 	$sth->execute(array(':idproducto' =>  $this->__GET("idproducto")));
	// 	return $sth;
	// }

	// public function find(){
	// 	$sql = 'SELECT idproducto, nombre, cantidad, precio FROM productos WHERE idproducto = :idproducto';
	// 	$sth = $this->db->prepare($sql);
	// 	$sth->execute(array(':idproducto' =>  $this->__GET("idproducto")));
	// 	return $sth->fetchAll();
	// }
}

?>

	
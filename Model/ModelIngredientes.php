<?php

class  Ingredientes {

    private $codigo;
    private $nombre;
    private $precio;
    private $db; 
    
    function __construct() {
        $this->db = DataBase::getInstance();
    }
    
    public function __GET($atributo) {
        return $this->$atributo;
    }

    public function __SET($atributo, $valor) {
        $this->$atributo = $valor;
    }
    
    public function Guardar() {
        
        $sql =" INSERT INTO almacen VALUES ( :codigo , :nombre , :precio )";
        $sth = $this->db->prepare($sql);
        $sth->execute(array(':codigo'=>$this->__Get('codigo'),':nombre'=>$this->__Get('nombre'),':precio'=>$this->__Get('precio')) );
        return $sth;
    }
    
    
    public function Modificar() {
        
        $sql =" UPDATE almacen SET nombre = :nombre , precio = :precio  WHERE codigo = :codigo";
        $sth = $this->db->prepare($sql);
        $sth->execute(array(':codigo'=>$this->__Get('codigo'),':nombre'=>$this->__Get('nombre'),':precio'=>$this->__Get('precio')  ) );
        return $sth;
    }
    
    public function Listar() {
        
        $sql =" SELECT * FROM almacen";
        $sth = $this->db->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function Eliminar() {
        $sql =" DELETE FROM almacen WHERE codigo = :codigo";
        $sth = $this->db->prepare($sql);
        $sth->execute(array(':codigo'=>$this->__Get('codigo') ) );
        return $sth;
    }
    
    function Buscar(){
    
    $sql = 'SELECT codigo, nombre, precio FROM almacen WHERE codigo = :codigo';
    $sth = $this->db->prepare($sql);
    $sth->execute(array(':codigo' =>  $this->__GET("codigo")));
    return $sth->fetchAll();
}
    
    
}

?>
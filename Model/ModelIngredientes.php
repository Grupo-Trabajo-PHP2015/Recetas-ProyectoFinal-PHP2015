<?php

class  Ingredientes {

    private $codigo;
    private $nombre;
    private $url;
    private $descripcion;
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
        
        $sql =" INSERT INTO ingredientes VALUES ( :id , :nombre , :url , :descripcion)";
        $sth = $this->db->prepare($sql);
        $sth->execute(array(':id'=>$this->__Get('id'),':nombre'=>$this->__Get('nombre'),':url'=>$this->__Get('url'),':descripcion'=>$this->__Get('descripcion') ) );
        return $sth;
    }
    
    
    public function Modificar() {
        
        $sql =" UPDATE ingredientes SET nombre = :nombre , url = :descripcion  WHERE id = :id";
        $sth = $this->db->prepare($sql);
        $sth->execute(array(':id'=>$this->__Get('id'),':nombre'=>$this->__Get('nombre'),':url'=>$this->__Get('url'),':descripcion'=>$this->__Get('descripcion')  ) );
        return $sth;
    }
    
    public function Listar() {
        
        $sql =" SELECT * FROM ingredientes";
        $sth = $this->db->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function Eliminar() {
        $sql =" DELETE FROM ingredientes WHERE id = :id";
        $sth = $this->db->prepare($sql);
        $sth->execute(array(':id'=>$this->__Get('id') ) );
        return $sth;
    }
    
    function Buscar(){
    
    $sql = 'SELECT id, nombre, url,descripcion FROM ingredientes WHERE id = :id';
    $sth = $this->db->prepare($sql);
    $sth->execute(array(':id' =>  $this->__GET("id")));
    return $sth->fetchAll();
}
    
    
}

?>
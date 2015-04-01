<?php

class  Clasificacion {
   
    private $idClasificacion;
    private $Clasificacion;
     
    
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
        
        $sql =" INSERT INTO clasificaciones VALUES ( :idClasificacion , :Clasificacion )";
        $sth = $this->db->prepare($sql);
        $sth->execute(array(':idClasificacion'=>$this->__Get('idClasificacion'),':Clasificacion'=>$this->__Get('Clasificacion') ) );
        return $sth;
    }
    
    public function Modificar() {
        
        $sql =" UPDATE clasificaciones SET Clasificacion = :Clasificacion WHERE  idClasificacion = :idClasificacion";
        $sth = $this->db->prepare($sql);
        $sth->execute(array(':idClasificacion'=>$this->__Get('idClasificacion'),':Clasificacion'=>$this->__Get('Clasificacion')  ) );
        return $sth;
    }
    
    public function Listar() {
        
        $sql =" SELECT * FROM clasificaciones";
        $sth = $this->db->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function Eliminar() {
        $sql =" DELETE FROM clasificaciones WHERE idClasificacion = :idClasificacion";
        $sth = $this->db->prepare($sql);
        $sth->execute(array(':idClasificacion'=>$this->__Get('idClasificacion') ) );
        return $sth;
    }
    
    function Buscar(){
    
    $sql = 'SELECT idClasificacion , Clasificacion  FROM clasificaciones WHERE  idClasificacion = :idClasificacion';
    $sth = $this->db->prepare($sql);
    $sth->execute(array(':idClasificacion' =>  $this->__GET("idClasificacion")));
    return $sth->fetchAll();
}
    
 public function Select() {

        $sql = 'SELECT idClasificacion , Clasificacion FROM clasificaciones ';
        $sth = $this->db->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    
}

?>
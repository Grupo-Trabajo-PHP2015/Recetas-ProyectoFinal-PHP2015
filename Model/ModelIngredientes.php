<?php

class  Ingredientes {
   
    private $idIngrediente;
    private $Nombre;
    private $Desripcion;
    private $Url;
    private $Tipo_ingredientes_idTipo_ingrediente;
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


    public function consulta1() {
        
        $sql =" SELECT r.Nombre, i.Nombre, x.Cantidad 
        FROM recetas r join recetas_has_ingredientes x 
        on r.idReceta=x.recetas_idReceta join ingredientes i
        on x.ingredientes_idIngrediente= i.idIngrediente group by r.Nombre";
        $sth = $this->db->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    
    
    public function Guardar() {
        
        $sql =" INSERT INTO ingredientes VALUES ( :idIngrediente , :Nombre , :Desripcion , :Url , :Tipo_ingredientes_idTipo_ingrediente )";
        $sth = $this->db->prepare($sql);
        $sth->execute(array(':idIngrediente'=>$this->__Get('idIngrediente'),':Nombre'=>$this->__Get('Nombre'),':Desripcion'=>$this->__Get('Desripcion') ,':Url'=>$this->__Get('Url'),':Tipo_ingredientes_idTipo_ingrediente'=>$this->__Get('Tipo_ingredientes_idTipo_ingrediente') ) );
        return $sth;
    }
    
    public function Modificar() {
        
        $sql =" UPDATE ingredientes SET Nombre = :Nombre , Desripcion = :Desripcion  WHERE idIngrediente = :idIngrediente";
        $sth = $this->db->prepare($sql);
        $sth->execute(array(':idIngrediente'=>$this->__Get('idIngrediente'),':Nombre'=>$this->__Get('Nombre'),':Desripcion'=>$this->__Get('Desripcion')  ) );
        return $sth;
    }
    
    public function Listar() {
        
        $sql =" SELECT * FROM ingredientes";
        $sth = $this->db->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function Eliminar() {
        $sql =" DELETE FROM ingredientes WHERE idIngrediente = :idIngrediente";
        $sth = $this->db->prepare($sql);
        $sth->execute(array(':idIngrediente'=>$this->__Get('idIngrediente') ) );
        return $sth;
    }
    
    function Buscar(){
    
    $sql = 'SELECT idIngrediente , Nombre, Desripcion, Url  FROM ingredientes WHERE idIngrediente = :idIngrediente';
    $sth = $this->db->prepare($sql);
    $sth->execute(array(':idIngrediente' =>  $this->__GET("idIngrediente")));
    return $sth->fetchAll();
}
    
    
}

?>
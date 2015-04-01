<?php

class  RecetasIngredientes {
   
    private $Recetas_idReceta;
    private $Ingredientes_idIngrediente;
    private $Cantidad;
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
        
        $sql =" INSERT INTO recetas_has_ingredientes VALUES ( :Recetas_idReceta , :Ingredientes_idIngrediente , :Cantidad  )";
        $sth = $this->db->prepare($sql);
        $sth->execute(array(':Recetas_idReceta'=>$this->__Get('Recetas_idReceta'),':Ingredientes_idIngrediente'=>$this->__Get('Ingredientes_idIngrediente'),':Cantidad'=>$this->__Get('Cantidad') ) );
        return $sth;
    }
    
    public function Modificar() {
        
        $sql =" UPDATE recetas_has_ingredientes SET Nombre = :Nombre , Desripcion = :Desripcion  WHERE idIngrediente = :idIngrediente";
        $sth = $this->db->prepare($sql);
        $sth->execute(array(':idIngrediente'=>$this->__Get('idIngrediente'),':Nombre'=>$this->__Get('Nombre'),':Desripcion'=>$this->__Get('Desripcion')  ) );
        return $sth;
    }
   
//    public function Listar() {
//        
//        $sql =" SELECT * FROM recetas_has_ingredientes";
//        $sth = $this-> db->prepare($sql);
//        $sth->execute();
//        return $sth->fetchAll(PDO::FETCH_ASSOC);
//    }
    
    public function Eliminar() {
        $sql =" DELETE FROM recetas_has_ingredientes WHERE idIngrediente = :idIngrediente";
        $sth = $this->db->prepare($sql);
        $sth->execute(array(':idIngrediente'=>$this->__Get('idIngrediente') ) );
        return $sth;
    }
    
    function Buscar(){
    
    $sql = 'SELECT idIngrediente , Nombre, Desripcion, Url  FROM recetas_has_ingredientestes WHERE idIngrediente = :idIngrediente';
    $sth = $this->db->prepare($sql);
    $sth->execute(array(':idIngrediente' =>  $this->__GET("idIngrediente")));
    return $sth->fetchAll();
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
    
    
}

?>
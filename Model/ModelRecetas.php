<?php

class Recetas {

    private $idReceta;
    private $Titulo;
    private $Descripcion;
    private $Porciones;
    private $Usuarios_Cedula;
    private $Clasificaciones_idClasificacion;
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

        $sql = " INSERT INTO recetas  (`idReceta`, `Usuarios_Cedula`, `Titulo`, `Porciones`, `Descripcion`, `Clasificaciones_idClasificacion`) VALUES ( :idReceta , :Usuarios_Cedula , :Titulo , :Porciones , :Descripcion  ,:Clasificaciones_idClasificacion)";
        $sth = $this->db->prepare($sql);
        $sth->execute(array(':idReceta' => $this->__Get('idReceta'), ':Usuarios_Cedula' => $this->__Get('Usuarios_Cedula'), ':Titulo' => $this->__Get('Titulo'), ':Porciones' => $this->__Get('Porciones'), ':Descripcion' => $this->__Get('Descripcion'),':Clasificaciones_idClasificacion' => $this->__Get('Clasificaciones_idClasificacion')));
        return $sth;
    }

    public function Modificar() {

        $sql = " UPDATE recetas SET Titulo = :Titulo , Descripcion = :Descripcion , Porciones = :Porciones WHERE idReceta = :idReceta";
        $sth = $this->db->prepare($sql);
        $sth->execute(array(':idReceta' => $this->__Get('idReceta'), ':Titulo' => $this->__Get('Titulo'), ':Porciones' => $this->__Get('Porciones'), ':Descripcion' => $this->__Get('Descripcion')));
        return $sth;
    }

    public function Listar() {

        $sql = " SELECT * FROM recetas";
        $sth = $this->db->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function Eliminar() {
        $sql = " DELETE FROM recetas WHERE idReceta = :idReceta";
        $sth = $this->db->prepare($sql);
        $sth->execute(array(':idReceta' => $this->__Get('idReceta')));
        return $sth;
    }

    function Buscar() {

        $sql = 'SELECT idReceta ,Titulo , Porciones  , Descripcion  FROM recetas WHERE idReceta = :idReceta';
        $sth = $this->db->prepare($sql);
        $sth->execute(array(':idReceta' => $this->__GET("idReceta")));
        return $sth->fetchAll();
    }

    public function Mostrar() {

        $sql = " SELECT u.Nombre, r.idReceta ,r.Titulo, r.Porciones, r.Descripcion, r.Fecha_publicacion, c.Clasificacion FROM recetas r join usuarios u 
        on r.Usuarios_Cedula=u.Cedula join clasificaciones c 
        on r.Clasificaciones_idClasificacion=c.idClasificacion";
        $sth = $this->db->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>
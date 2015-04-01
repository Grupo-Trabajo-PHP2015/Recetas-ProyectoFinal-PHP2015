<?php

class TipoIngrediente {

    private $idTipo_ingrediente;
    private $Tipo;

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

        $sql = " INSERT INTO tipo_ingredientes VALUES ( :idTipo_ingrediente , :Tipo )";
        $sth = $this->db->prepare($sql);
        $sth->execute(array(':idTipo_ingrediente' => $this->__Get('idTipo_ingrediente'), ':Tipo' => $this->__Get('Tipo')));
        return $sth;
    }

    public function Modificar() {

        $sql = " UPDATE tipo_ingredientes SET Tipo = :Tipo WHERE  idTipo_ingrediente = :idTipo_ingrediente";
        $sth = $this->db->prepare($sql);
        $sth->execute(array(':idTipo_ingrediente' => $this->__Get('idTipo_ingrediente'), ':Tipo' => $this->__Get('Tipo')));
        return $sth;
    }

    public function Listar() {

        $sql = " SELECT * FROM tipo_ingredientes";
        $sth = $this->db->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function Eliminar() {
        $sql = " DELETE FROM tipo_ingredientes WHERE idTipo_ingrediente = :idTipo_ingrediente";
        $sth = $this->db->prepare($sql);
        $sth->execute(array(':idTipo_ingrediente' => $this->__Get('idTipo_ingrediente')));
        return $sth;
    }

    function Buscar() {

        $sql = 'SELECT idTipo_ingrediente , Tipo  FROM tipo_ingredientes WHERE  idTipo_ingrediente = :idTipo_ingrediente';
        $sth = $this->db->prepare($sql);
        $sth->execute(array(':idTipo_ingrediente' => $this->__GET("idTipo_ingrediente")));
        return $sth->fetchAll();
    }

    public function Select() {

        $sql = 'SELECT idTipo_ingrediente , Tipo FROM tipo_ingredientes ';
        $sth = $this->db->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>
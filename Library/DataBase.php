<?php

class DataBase {
    
    private static $_conexion;
    private $_rows;
    private $_numRows;
    private $_affectedRows;
    
    private function DataBase() {}

    public function __GET($atributo){
        return $this->$atributo;
    }

    public static function getInstance(){
        
        $dsn = DRIVER.":host=".SERVER.":".PORT.";dbname=".DBNAME;
        
        if (!isset(self::$_conexion)) {
            
            self::$_conexion = new PDO($dsn, USER, PASSWORD, array(PDO::ATTR_PERSISTENT=>TRUE));
            self::$_conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$_conexion;
    }
    
    //Ejecuta los INSERT, UPDATE, DELETE
    public function Exec($sql) {
        return self::$_conexion->exec($sql);
    }

    //Ejecuta los SELECT
    public function Query($sql) {
        return self::$_conexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    // Devuelve el ultimo ID generado por medio de un INSERT o UPDATE
    public function LastId() {
        return self::$_conexion->lastInsertId();
    }


    // Asegurar los datos de entrada a la base de datos
    public function SecureInput($value) {
        return (strip_tags($value));
    }

    //se encarga de preparar una consulta y ejecutarla. Metodo magico para bd
    public function prepared($sql, $parameters = null, $typeQuery = "query")
    {   
        $_stmt = self::$_conexion->prepare($sql);
        
        if ($parameters != null) {
            $_stmt->execute($parameters);
        }else
        {
            $_stmt->execute();
        }
        
        if (strtolower($typeQuery) == "execute") {
            $this->_affectedRows = $_stmt->rowCount();
        }else{
            $this->_rows = $_stmt->fetchAll(PDO::FETCH_ASSOC);
            $this->_numRows = $_stmt->rowCount();
        }
    }

    public function preparedBind($sql, $parameters, $typeQuery = "query")
    {   
        //Los tipos de datos que soporta PDO se pueden encontrar en el siguiente enlace
        //http://php.net/manual/es/pdo.constants.php

        $_stmt = self::$_conexion->prepare($sql);

        foreach ($parameters as $parameter) {
            if ($parameter[2] == null) {
                $_stmt->bindValue($parameter[0], $parameter[1]);
            }else
            {
                $_stmt->bindValue($parameter[0], $parameter[1], $parameter[2]);
            }
        }
        $_stmt->execute();

        if (strtolower($typeQuery) == "execute") {
            $this->_affectedRows = $_stmt->rowCount();
        }else{
            $this->_rows = $_stmt->fetchAll(PDO::FETCH_ASSOC);
            $this->_numRows = $_stmt->rowCount();
        }
    }

    public function _clone() { 
        trigger_error('este objeto no se puede clonar', E_USER_ERROR);
    }
    
}

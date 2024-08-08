<?php
include_once 'conexion.php';
class usuario{
    var $objetos;
    public $acceso = null;
    public function __construct()
    {
        $db = new conexion();
        $this->acceso = $db->pdo;
    }
    function logearse($dni, $pass){
        $sql = "SELECT * FROM usuario INNER JOIN tipo_usuario on prod_tipo_usuario = id_tipo_usuario where dni=:dni and contrasena=:pass";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':dni'=>$dni, ':pass'=>$pass));
        $this->objetos = $query->fetchAll();
        return $this->objetos;
    }
}
?>
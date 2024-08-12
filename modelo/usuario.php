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
        $sql = "SELECT * FROM usuario INNER JOIN tipo_usuario on prod_tipo_usuario = id_tipo_usuario where dni_us=:dni and contrasena_us=:pass";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':dni'=>$dni, ':pass'=>$pass));
        $this->objetos = $query->fetchAll();
        return $this->objetos;
    }



    function obtener_datos($id){
        $sql = "SELECT * FROM usuario JOIN tipo_usuario on prod_tipo_usuario = id_tipo_usuario and id_usuario=:id";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id'=>$id));
        $this->objetos = $query->fetchAll();
        return $this->objetos;
    }

    function editar($id_usuario,$telefono,$residencia,$correo,$sexo,$adicional){
        $sql="UPDATE usuario SET telefono_us=:telefono, residencia_us=:residencia, correo_us=:correo, sexo_us=:sexo, adicional_us=:adicional where id_usuario=:id";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':id'=>$id_usuario,'telefono'=>$telefono, 'residencia'=>$residencia, 'correo'=>$correo, 'sexo'=>$sexo, 'adicional'=>$adicional));

    }
}
?>
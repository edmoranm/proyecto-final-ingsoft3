<?php

// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);
require_once 'conexion.php';

class Materia extends Conexion{
    public $mat_id;
    public $mat_nombre;
    public $mat_situacion;


    public function __construct($args = [])
    {
        $this->mat_id = $args['mat_id'] ?? null;
        $this->mat_nombre = $args['mat_nombre'] ?? '';
        $this->mat_situacion = $args['mat_situacion'] ?? null;

    }

      // METODO PARA INSERTAR
      public function guardar(){
        $sql = "INSERT into materias (mat_nombre) values ('$this->mat_nombre')";
        $resultado = $this->ejecutar($sql);
        return $resultado; 
    }

      // METODO PARA CONSULTAR

      public static function buscarTodos(...$columnas){
        $cols = count($columnas) > 0 ? implode(',', $columnas) : '*';
        $sql = "SELECT $cols FROM materias where mat_situacion = 1 ";
        $resultado = self::servir($sql);
        return $resultado;
    }


    public function buscar(...$columnas){
        $cols = count($columnas) > 0 ? implode(',', $columnas) : '*';
        $sql = "SELECT $cols FROM materias where mat_situacion = 1 ";


        if($this->mat_nombre != ''){
            $sql .= " AND mat_nombre like '%$this->mat_nombre%' ";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }
    public function modificar(){
        $sql = "UPDATE materias SET mat_nombre = '$this->mat_nombre' WHERE mat_id = $this->mat_id ";
        $resultado = $this->ejecutar($sql);
        return $resultado;
    }    

    public function buscarId($id){
        $sql = " SELECT * FROM materias WHERE mat_situacion = 1 AND mat_id = '$id' ";
        $resultado = array_shift(self::servir($sql)) ;

        return $resultado;
    }

   
    public function eliminar(){
        // $sql = "DELETE FROM clientes WHERE cli_id = $this->cli_id ";

        // echo $sql;
        $sql = "UPDATE materias SET mat_situacion = 0 WHERE mat_id = '$this->mat_id' ";
        $resultado = $this->ejecutar($sql);
        return $resultado; 
    }
}
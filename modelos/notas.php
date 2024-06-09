<?php

// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);
require 'conexion.php';

class Notas extends Conexion{
    public $not_id;
    public $not_materia;
    public $not_puntos;
    public $not_alumnos;
    public $not_resultado;
    public $not_situacion;


    public function __construct($args = [])
    {
        $this->not_id = $args['not_id'] ?? null;
        $this->not_materia = $args['not_materia'] ?? '';
        $this->not_puntos = $args['not_puntos'] ?? '';
        $this->not_alumnos = $args['not_alumnos'] ?? '';
        $this->not_resultado = $args['not_resultado'] ?? '';
        $this->not_situacion = $args['not_situacion'] ?? null;

    }

      // METODO PARA INSERTAR
      public function guardar(){
        $sql = "INSERT into notas (not_materia) values ('$this->not_materia')";
        $resultado = $this->ejecutar($sql);
        return $resultado; 
    }

      // METODO PARA CONSULTAR

      public static function buscarTodos(...$columnas){
        $cols = count($columnas) > 0 ? implode(',', $columnas) : '*';
        $sql = "SELECT $cols FROM notas where not_situacion = 1 ";
        $resultado = self::servir($sql);
        return $resultado;
    }


    public function buscar(...$columnas){
        $cols = count($columnas) > 0 ? implode(',', $columnas) : '*';
        $sql = "SELECT $cols FROM notas where not_situacion = 1 ";


        if($this->not_materia != ''){
            $sql .= " AND not_materia like '%$this->not_materia%' ";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }
    public function modificar(){
        $sql = "UPDATE notas SET not_materia = '$this->not_materia' WHERE not_id = $this->not_id ";
        $resultado = $this->ejecutar($sql);
        return $resultado;
    }    

    public function buscarId($id){
        $sql = " SELECT * FROM notas WHERE not_situacion = 1 AND not_id = '$id' ";
        $resultado = array_shift(self::servir($sql)) ;

        return $resultado;
    }

   
    public function eliminar(){
        // $sql = "DELETE FROM clientes WHERE cli_id = $this->cli_id ";

        // echo $sql;
        $sql = "UPDATE notas SET not_situacion = 0 WHERE not_id = '$this->not_id' ";
        $resultado = $this->ejecutar($sql);
        return $resultado; 
    }
}
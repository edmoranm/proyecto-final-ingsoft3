<?php
require_once 'conexion.php';
    
    class Materia extends Conexion{
        public $mat_id;
        public $mat_nombre;
        public $mat_situacion;
    
        public function __construct($args = [] )
        {
            $this->mat_id = $args['id_materias'] ?? null;
            $this->mat_nombre = $args['mat_nombre'] ?? '';
            $this->detalle_situacion = $args['detalle_situacion'] ?? '1';
        }
    
        public function guardar(){
            $sql = "INSERT INTO materias(mat_nombre) VALUES ('$this->mat_nombre')";
            $resultado = self::ejecutar($sql);
            return $resultado;
        }
    
        public function buscar(){
            $sql = "SELECT * FROM materias WHERE detalle_situacion = 1";
    
            if($this->id_materias != null){
                $sql .= " AND id_materias = '$this->id_materias'";
            }
    
            $resultado = self::servir($sql);
            return $resultado;
        }
    
        public function modificar(){
            $sql = "UPDATE materias SET mat_nombre = '$this->mat_nombre' WHERE id_materias = $this->id_materias";
            
            $resultado = self::ejecutar($sql);
            return $resultado;
        }
    
        public function eliminar() {
            $sql = "UPDATE materias SET detalle_situacion = '0' WHERE id_materias = $this->id_materias";
            
            $resultado = self::ejecutar($sql);
            return $resultado;
        }
    }
<?php
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

require_once 'conexion.php';

class Notas extends Conexion
{
    public $not_id;
    public $not_alumno;
    public $not_materia;
    public $not_puntos;
    public $not_resultado;
    public $not_situacion;

    public function __construct($args = [])
    {
        $this->not_id = $args['not_id'] ?? null;
        $this->not_alumno = $args['not_alumno'] ?? '';
        $this->not_materia = $args['not_materia'] ?? '';
        $this->not_puntos = $args['not_puntos'] ?? '';
        $this->not_resultado = $args['not_resultado'] ?? '';
        $this->not_situacion = $args['not_situacion'] ?? null;
    }

    public function guardar()
    {
        $sql = "INSERT INTO notas(not_alumno, not_materia, not_puntos, not_resultado) VALUES ($this->not_alumno, $this->not_materia, $this->not_puntos, '$this->not_resultado')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar($not_id)
    {
        // $cols = count($columnas) > 0 ? implode(",", $columnas) :"*";
        $sql = "SELECT * FROM notas
        INNER JOIN materias on not_materia = mat_id WHERE not_situacion = '1' AND not_alumno = $not_id";
        $resultado = self::servir($sql);
        return $resultado;
    }

    public function buscarInfo($not_id)
    {
        $sql = "SELECT * FROM alumnos WHERE alum_situacion = '1' AND alum_id = $not_id";
        $resultado = self::servir($sql);
        return $resultado;
    }


    public function modificar()
    {
        $sql = "UPDATE notas SET not_puntos = $this->not_puntos, not_resultado = '$this->not_resultado' WHERE not_id = $this->not_id";

        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function eliminar()
    {
        $sql = "UPDATE notas SET not_situacion = '0' WHERE not_id = $this->not_id";

        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function promedio($not_id)
    {
        $sql = "SELECT AVG(not_puntos) as promedio FROM notas WHERE not_alumno = $not_id AND not_situacion = '1'";

        $resultado = self::servir($sql);
        return $resultado;
    }
}

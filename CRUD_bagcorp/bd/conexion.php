<?php
class Conexion{
    public static function Conectar() { //constructor al parecer por que esta declarado como publico

        define('servidor', 'localhost');
        define('nombre_bd', 'bagcorp');
        define('usuario', 'root');
        define('password', '');
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);//objeto conexion
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
}

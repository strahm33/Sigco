<?php

class Conexion
{

    public static function getConexion(){
        $conn = null;
        try {
            $conn = new PDO("mysql:host=localhost;dbname=sigco", "sigco2015", "sigco2015*", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
            $conn->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex  ){
            echo 'ERROR: '.$ex->getMessage();
        }
        return $conn;
    }

}
<?php

class LugaresDao
{

    public function listarTodas(){
        $cnn = Conexion::getConexion();

        try{
            $listarCiudades = 'Select * from Lugares';
            $query = $cnn->prepare($listarCiudades);
            $query->execute();
            return $query->fetchAll();
        } catch (Exception $ex) {
            echo 'Error :'.$ex->getMessage();
        }
        $cnn=null;
    }

}
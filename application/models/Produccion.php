<?php

    class Produccion extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        //Funcion para insertar un servicio
        function insertar($datos){
            return $this->db->insert("produccion", $datos);

        }
        //Funcion para consultar servicios
        function obtenerTodos(){
            $listadoProduccion=
            $this->db->get("produccion");
            
            if($listadoProduccion
                ->num_rows()>0){//Si hay datos
                    return $listadoProduccion->result();
            }else{//No hay datos
                return false;
            }

        }
        //Borrar servicio
        function borrar($cod_pro){
            $this->db->where("cod_pro",$cod_pro);
            return $this->db->delete("produccion"); 
        }
        //Funcion consultar
        function obtenerPorId($cod_pro){
            $this->db->where("cod_pro",$cod_pro);
            $produccion=$this->db->get("produccion");
            if ($produccion->num_rows()>0){
                return $produccion->row();
            } 
            return false;
        }
        //Funcion para actualizar
        function actualizar($cod_pro,$datos){
            $this->db->where("cod_pro",$cod_pro);
            return $this->db->update('produccion',$datos);
        }
    }//Cierre de la clase
?>
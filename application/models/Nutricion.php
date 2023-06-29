<?php

    class Nutricion extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        //Funcion para insertar un servicio
        function insertar($datos){
            return $this->db->insert("nutricion", $datos);

        }
        //Funcion para consultar servicios
        function obtenerTodos(){
            $listadoNutriciones=
            $this->db->get("nutricion");
            
            if($listadoNutriciones
                ->num_rows()>0){//Si hay datos
                    return $listadoNutriciones->result();
            }else{//No hay datos
                return false;
            }

        }
        //Borrar servicio
        function borrar($id_nut){
            $this->db->where("id_nut",$id_nut);
            return $this->db->delete("nutricion"); 
        }
        //Funcion consultar
        function obtenerPorId($id_nut){
            $this->db->where("id_nut",$id_nut);
            $nutricion=$this->db->get("nutricion");
            if ($nutricion->num_rows()>0){
                return $nutricion->row();
            } 
            return false;
        }
        //Funcion para actualizar
        function actualizar($id_nut,$datos){
            $this->db->where("id_nut",$id_nut);
            return $this->db->update('nutricion',$datos);
        }
    }//Cierre de la clase
?>
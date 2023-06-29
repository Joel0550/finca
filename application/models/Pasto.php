<?php

    class Pasto extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        //Funcion para insertar un servicio
        function insertar($datos){
            return $this->db->insert("pasto", $datos);

        }
        //Funcion para consultar servicios
        function obtenerTodos(){
            $listadoPastos=
            $this->db->get("pasto");
            
            if($listadoPastos
                ->num_rows()>0){//Si hay datos
                    return $listadoPastos->result();
            }else{//No hay datos
                return false;
            }

        }
        //Borrar servicio
        function borrar($id_pas){
            $this->db->where("id_pas",$id_pas);
            return $this->db->delete("pasto"); 
        }
        //Funcion consultar
        function obtenerPorId($id_pas){
            $this->db->where("id_pas",$id_pas);
            $pasto=$this->db->get("pasto");
            if ($pasto->num_rows()>0){
                return $pasto->row();
            } 
            return false;
        }
        //Funcion para actualizar
        function actualizar($id_pas,$datos){
            $this->db->where("id_pas",$id_pas);
            return $this->db->update('pasto',$datos);
        }
    }//Cierre de la clase
?>
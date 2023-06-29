<?php

    class Enfermedad extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        //Funcion para insertar un servicio
        function insertar($datos){
            return $this->db->insert("enfermedad", $datos);

        }
        //Funcion para consultar servicios
        function obtenerTodos(){
            $listadoEnfermedad=
            $this->db->get("enfermedad");
            
            if($listadoEnfermedad
                ->num_rows()>0){//Si hay datos
                    return $listadoEnfermedad->result();
            }else{//No hay datos
                return false;
            }

        }
        //Borrar servicio
        function borrar($id_enf){
            $this->db->where("id_enf",$id_enf);
            return $this->db->delete("enfermedad"); 
        }
        //Funcion consultar
        function obtenerPorId($id_enf){
            $this->db->where("id_enf",$id_enf);
            $enfermedad=$this->db->get("enfermedad");
            if ($enfermedad->num_rows()>0){
                return $enfermedad->row();
            } 
            return false;
        }
        //Funcion para actualizar
        function actualizar($id_enf,$datos){
            $this->db->where("id_enf",$id_enf);
            return $this->db->update('enfermedad',$datos);
        }
    }//Cierre de la clase
?>
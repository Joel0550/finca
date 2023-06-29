<?php

    class Pasteurizacion extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        //Funcion para insertar un servicio
        function insertar($datos){
            return $this->db->insert("pasteurizacion", $datos);

        }
        //Funcion para consultar servicios
        function obtenerTodos(){
            $listadoPasteurizacion=
            $this->db->get("pasteurizacion");
            
            if($listadoPasteurizacion
                ->num_rows()>0){//Si hay datos
                    return $listadoPasteurizacion->result();
            }else{//No hay datos
                return false;
            }

        }
        //Borrar servicio
        function borrar($id_pat){
            $this->db->where("id_pat",$id_pat);
            return $this->db->delete("pasteurizacion"); 
        }
        //Funcion consultar
        function obtenerPorId($id_pat){
            $this->db->where("id_pat",$id_pat);
            $pasteurizacion=$this->db->get("pasteurizacion");
            if ($pasteurizacion->num_rows()>0){
                return $pasteurizacion->row();
            } 
            return false;
        }
        //Funcion para actualizar
        function actualizar($id_pat,$datos){
            $this->db->where("id_pat",$id_pat);
            return $this->db->update('pasteurizacion',$datos);
        }
    }//Cierre de la clase
?>
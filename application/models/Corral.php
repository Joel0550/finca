<?php

    class Corral extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        //Funcion para insertar un servicio
        function insertar($datos){
            return $this->db->insert("corral", $datos);

        }
        //Funcion para consultar servicios
        function obtenerTodos(){
            $listadoCorrales=
            $this->db->get("corral");
            
            if($listadoCorrales
                ->num_rows()>0){//Si hay datos
                    return $listadoCorrales->result();
            }else{//No hay datos
                return false;
            }

        }
        //Borrar servicio
        function borrar($id_cor){
            $this->db->where("id_cor",$id_cor);
            return $this->db->delete("corral"); 
        }
        //Funcion consultar
        function obtenerPorId($id_cor){
            $this->db->where("id_cor",$id_cor);
            $corral=$this->db->get("corral");
            if ($corral->num_rows()>0){
                return $corral->row();
            } 
            return false;
        }
        //Funcion para actualizar
        function actualizar($id_cor,$datos){
            $this->db->where("id_cor",$id_cor);
            return $this->db->update('corral',$datos);
        }
    }//Cierre de la clase
?>
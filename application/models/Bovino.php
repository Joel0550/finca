<?php

    class Bovino extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        //Funcion para insertar un servicio
        function insertar($datos){
            return $this->db->insert("bovino", $datos);

        }
        //Funcion para consultar servicios
        function obtenerTodos(){
            $listadoBovinos=
            $this->db->get("bovino");
            
            if($listadoBovinos
                ->num_rows()>0){//Si hay datos
                    return $listadoBovinos->result();
            }else{//No hay datos
                return false;
            }

        }
        //Borrar servicio
        function borrar($cod_ing){
            $this->db->where("cod_ing",$cod_ing);
            return $this->db->delete("bovino"); 
        }
        //Funcion consultar
        function obtenerPorId($cod_ing){
            $this->db->where("cod_ing",$cod_ing);
            $bovino=$this->db->get("bovino");
            if ($bovino->num_rows()>0){
                return $bovino->row();
            } 
            return false;
        }
        //Funcion para actualizar
        function actualizar($cod_ing,$datos){
            $this->db->where("cod_ing",$cod_ing);
            return $this->db->update('bovino',$datos);
        }
    }//Cierre de la clase
?>
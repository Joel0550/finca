<?php

    class Parto extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        //Funcion para insertar un servicio
        function insertar($datos){
            return $this->db->insert("parto", $datos);

        }
        //Funcion para consultar servicios
        function obtenerTodos(){
            $listadoPartos=
            $this->db->get("parto");
            
            if($listadoPartos
                ->num_rows()>0){//Si hay datos
                    return $listadoPartos->result();
            }else{//No hay datos
                return false;
            }

        }
        //Borrar servicio
        function borrar($cod_par){
            $this->db->where("cod_par",$cod_par);
            return $this->db->delete("parto"); 
        }
        //Funcion consultar
        function obtenerPorId($cod_par){
            $this->db->where("cod_par",$cod_par);
            $parto=$this->db->get("parto");
            if ($parto->num_rows()>0){
                return $parto->row();
            } 
            return false;
        }
        //Funcion para actualizar
        function actualizar($cod_par,$datos){
            $this->db->where("cod_par",$cod_par);
            return $this->db->update('parto',$datos);
        }
    }//Cierre de la clase
?>
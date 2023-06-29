<?php

    class Cria extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        //Funcion para insertar un servicio
        function insertar($datos){
            return $this->db->insert("cria", $datos);

        }
        //Funcion para consultar servicios
        function obtenerTodos(){
            $listadoCrias=
            $this->db->get("cria");
            
            if($listadoCrias
                ->num_rows()>0){//Si hay datos
                    return $listadoCrias->result();
            }else{//No hay datos
                return false;
            }

        }
        //Borrar servicio
        function borrar($cod_cri){
            $this->db->where("cod_cri",$cod_cri);
            return $this->db->delete("cria"); 
        }
        //Funcion consultar
        function obtenerPorId($cod_cri){
            $this->db->where("cod_cri",$cod_cri);
            $cria=$this->db->get("cria");
            if ($cria->num_rows()>0){
                return $cria->row();
            } 
            return false;
        }
        //Funcion para actualizar
        function actualizar($cod_cri,$datos){
            $this->db->where("cod_cri",$cod_cri);
            return $this->db->update('cria',$datos);
        }
    }//Cierre de la clase
?>
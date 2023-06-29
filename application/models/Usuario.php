<?php
    class Usuario extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }

        function obtenerPorEmailPassword($email, $password)
        {
            $this->db->where("email_usu", $email);
            $this->db->where("password_usu", $password);
            $usuario = $this->db->get("usuario");
            if ($usuario->num_rows() > 0) {
                return $usuario->row();
            }
            return false;
        }
    }//Cierre de la clase

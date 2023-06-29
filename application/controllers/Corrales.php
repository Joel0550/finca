<?php
class Corrales extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //Cargar Modelo
        $this->load->model('Corral');
    }
    //Funcion que renderiza la vista index                                        
    public function index()
    {
        $data['corrales'] = $this->Corral->obtenerTodos();
        // print_r($data);
        $this->load->view('header');
        $this->load->view('corrales/index', $data);
        $this->load->view('footer');
    }

    public function nuevo()
    {
        $this->load->view('header');
        $this->load->view('corrales/nuevo');
        $this->load->view('footer');
    }

    public function guardar(){
        $datosNuevoCorral = array("id_cor" => $this->input->post('id_cor'),
            "num_cor" => $this->input->post('num_cor'),
            "fec_cor" => $this->input->post('fec_cor'),
            "pro_cor" => $this->input->post('pro_cor'),
            "obs_cor" => $this->input->post('obs_cor')
        );

        if ($this->Corral->insertar($datosNuevoCorral)) {
            $this->session->set_flashdata(
                "confirmacion",
                "Ingreso al corral guardado exitosamente"
            );
        } else {
            $this->session->set_flashdata(
                "error",
                "Error al guardar intente otra vez"
            );
        }
        redirect('corrales/index');
    }
    //funcion para eliminar instructores
    public function eliminar($id_cor)
    {
        if ($this->session->userdata("conectado")
            ->perfil_usu != "ADMINISTRADOR"){
                $this->session->set_flashdata(
                    "error",
                    "No tiene permisos para eliminar"
                );
                redirect('corrales/index');    
        }
        if ($this->Corral->borrar($id_cor)) {
            $this->session->set_flashdata(
                "confirmacion",
                "Corral eleminado exitosamente"
            );
        } else {$this->session->set_flashdata(
                "error",
                "Error al eliminar intente otra vez"
            );
        }
        redirect('corrales/index');    
    }
    //function reenderizar vista editor
    public function editar($id_cor)
    {
        $data["corralEditar"] =
            $this->Corral->obtenerPorId($id_cor);
        $this->load->view('header');
        $this->load->view('corrales/editar', $data);
        $this->load->view('footer');
    }
    // Proceso de actualizacion
    public function procesarActualizacion(){
        $datosEditados = array(
            "id_cor" => $this->input->post('id_cor'),
            "num_cor" => $this->input->post('num_cor'),
            "fec_cor" => $this->input->post('fec_cor'),
            "pro_cor" => $this->input->post('pro_cor'),
            "obs_cor" => $this->input->post('obs_cor')
        );
        $id_cor = $this->input->post("id_cor");
        if ($this->Corral->actualizar($id_cor, $datosEditados)) {
            $this->session->set_flashdata(
                "confirmacion",
                "Corral actualizado exitosamente"
            );
        } else {
            $this->session->set_flashdata(
                "error",
                "Error al actualizar intente otra vez"
            );
        }
        redirect("corrales/index");
    }
} // Cierre de la clase
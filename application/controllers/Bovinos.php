<?php
class Bovinos extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //Cargar Modelo
        $this->load->model('Bovino');
    }
    //Funcion que renderiza la vista index                                        
    public function index()
    {
        $data['bovinos'] = $this->Bovino->obtenerTodos();
        // print_r($data);
        $this->load->view('header');
        $this->load->view('bovinos/index', $data);
        $this->load->view('footer');
    }

    public function nuevo()
    {
        $this->load->view('header');
        $this->load->view('bovinos/nuevo');
        $this->load->view('footer');
    }

    public function guardar(){
        $datosNuevoBovino = array("cod_ing" => $this->input->post('cod_ing'),
            "nom_ing" => $this->input->post('nom_ing'),
            "raza_ing" => $this->input->post('raza_ing'),
            "sexo_ing" => $this->input->post('sexo_ing'),
            "edad_ing" => $this->input->post('edad_ing'),
            "fec_ing" => $this->input->post('fec_ing'),
            "obs_ing" => $this->input->post('obs_ing'),
            "precio_ing" => $this->input->post('precio_ing')
        );

        if ($this->Bovino->insertar($datosNuevoBovino)) {
            $this->session->set_flashdata(
                "confirmacion",
                "Ingreso de Bovino guardado exitosamente"
            );
        } else {
            $this->session->set_flashdata(
                "error",
                "Error al guardar intente otra vez"
            );
        }
        redirect('bovinos/index');
    }
    //funcion para eliminar instructores
    public function eliminar($cod_ing)
    {
        if ($this->session->userdata("conectado")
            ->perfil_usu != "ADMINISTRADOR"){
                $this->session->set_flashdata(
                    "error",
                    "No tiene permisos para eliminar"
                );
                redirect('bovinos/index');    
        }
        if ($this->Bovino->borrar($cod_ing)) {
            $this->session->set_flashdata(
                "confirmacion",
                "Bovino eleminado exitosamente"
            );
        } else {$this->session->set_flashdata(
                "error",
                "Error al eliminar intente otra vez"
            );
        }
        redirect('bovinos/index');    
    }
    //function reenderizar vista editor
    public function editar($cod_ing)
    {
        $data["bovinoEditar"] =
            $this->Bovino->obtenerPorId($cod_ing);
        $this->load->view('header');
        $this->load->view('bovinos/editar', $data);
        $this->load->view('footer');
    }
    // Proceso de actualizacion
    public function procesarActualizacion(){
        $datosEditados = array(
            "cod_ing" => $this->input->post('cod_ing'),
            "nom_ing" => $this->input->post('nom_ing'),
            "raza_ing" => $this->input->post('raza_ing'),
            "sexo_ing" => $this->input->post('sexo_ing'),
            "edad_ing" => $this->input->post('edad_ing'),
            "fec_ing" => $this->input->post('fec_ing'),
            "obs_ing" => $this->input->post('obs_ing'),
            "precio_ing" => $this->input->post('precio_ing')
        );
        $cod_ing = $this->input->post("cod_ing");
        if ($this->Bovino->actualizar($cod_ing, $datosEditados)) {
            $this->session->set_flashdata(
                "confirmacion",
                "Bovino actualizado exitosamente"
            );
        } else {
            $this->session->set_flashdata(
                "error",
                "Error al actualizar intente otra vez"
            );
        }
        redirect("bovinos/index");
    }
} // Cierre de la clase
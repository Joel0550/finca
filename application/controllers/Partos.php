<?php
class Partos extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //Cargar Modelo
        $this->load->model('Parto');
    }
    //Funcion que renderiza la vista index                                        
    public function index()
    {
        $data['partos'] = $this->Parto->obtenerTodos();
        // print_r($data);
        $this->load->view('header');
        $this->load->view('partos/index', $data);
        $this->load->view('footer');
    }

    public function nuevo()
    {
        $this->load->view('header');
        $this->load->view('partos/nuevo');
        $this->load->view('footer');
    }

    public function guardar()
    {
        $datosNuevoParto = array(
            "cod_par" => $this->input->post('cod_par'),
            "num_par" => $this->input->post('num_par'),
            "fecha_par" => $this->input->post('fecha_par')
        );
        if ($this->Parto->insertar($datosNuevoParto)) {
            $this->session->set_flashdata(
                "confirmacion",
                "Ingreso de Parto guardado exitosamente"
            );
        } else {
            $this->session->set_flashdata(
                "error",
                "Error al guardar intente otra vez"
            );
        }
        redirect('partos/index');
    }
    //funcion para eliminar instructores
    public function eliminar($cod_par)
    {
        if ($this->session->userdata("conectado")
            ->perfil_usu != "ADMINISTRADOR"){
                $this->session->set_flashdata(
                    "error",
                    "No tiene permisos para eliminar"
                );
                redirect('enfermedades/index');    
        }
        if ($this->Parto->borrar($cod_par)) {
            $this->session->set_flashdata(
                "confirmacion",
                "Parto eleminado exitosamente"
            );
        } else {$this->session->set_flashdata(
                "error",
                "Error al eliminar intente otra vez"
            );
        }
        redirect('partos/index');
    }
    //function reenderizar vista editor
    public function editar($cod_par)
    {
        $data["partoEditar"] =
            $this->Parto->obtenerPorId($cod_par);
        $this->load->view('header');
        $this->load->view('partos/editar', $data);
        $this->load->view('footer');
    }
    // Proceso de actualizacion
    public function procesarActualizacion(){
        $datosEditados = array(
            "cod_par" => $this->input->post('cod_par'),
            "num_par" => $this->input->post('num_par'),
            "fecha_par" => $this->input->post('fecha_par')
        );
        $cod_par = $this->input->post("cod_par");
        if ($this->Parto->actualizar($cod_par, $datosEditados)) {
            $this->session->set_flashdata(
                "confirmacion",
                "Parto actualizado exitosamente"
            );
        } else {$this->session->set_flashdata(
                "error",
                "Error al actualizar intente otra vez"
            );
        }
        redirect("partos/index");
    }
} // Cierre de la clase
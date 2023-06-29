<?php
class Enfermedades extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //Cargar Modelo
        $this->load->model('Enfermedad');
    }
    //Funcion que renderiza la vista index                                        
    public function index()
    {
        $data['enfermedades'] = $this->Enfermedad->obtenerTodos();
        // print_r($data);
        $this->load->view('header');
        $this->load->view('enfermedades/index', $data);
        $this->load->view('footer');
    }

    public function nuevo()
    {
        $this->load->view('header');
        $this->load->view('enfermedades/nuevo');
        $this->load->view('footer');
    }

    public function guardar()
    {
        $datosNuevoEnfermedad = array(
            "id_enf" => $this->input->post('id_enf'),
            "fecha_enf" => $this->input->post('fecha_enf'),
            "diag_enf" => $this->input->post('diag_enf'),
            "tra_enf" => $this->input->post('tra_enf'),
            "obs_enf" => $this->input->post('obs_enf')
        );
        if ($this->Enfermedad->insertar($datosNuevoEnfermedad)) {
            $this->session->set_flashdata(
                "confirmacion",
                "Ingreso de Enfermedad guardado exitosamente"
            );
        } else {
            $this->session->set_flashdata(
                "error",
                "Error al guardar intente otra vez"
            );
        }
        redirect('enfermedades/index');
    }
    //funcion para eliminar instructores
    public function eliminar($id_enf)
    {
        if ($this->session->userdata("conectado")
            ->perfil_usu != "ADMINISTRADOR"){
                $this->session->set_flashdata(
                    "error",
                    "No tiene permisos para eliminar"
                );
                redirect('enfermedades/index');    
        }
        if ($this->Enfermedad->borrar($id_enf)) {
            $this->session->set_flashdata(
                "confirmacion",
                "Enfermedad eleminado exitosamente"
            );
        } else {$this->session->set_flashdata(
                "error",
                "Error al eliminar intente otra vez"
            );
        }
        redirect('enfermedades/index');

    }
    //function reenderizar vista editor
    public function editar($id_enf)
    {
        $data["enfermedadEditar"] =
            $this->Enfermedad->obtenerPorId($id_enf);
        $this->load->view('header');
        $this->load->view('enfermedades/editar', $data);
        $this->load->view('footer');
    }
    // Proceso de actualizacion
    public function procesarActualizacion(){
        $datosEditados = array(
            "id_enf" => $this->input->post('id_enf'),
            "fecha_enf" => $this->input->post('fecha_enf'),
            "diag_enf" => $this->input->post('diag_enf'),
            "tra_enf" => $this->input->post('tra_enf'),
            "obs_enf" => $this->input->post('obs_enf')
        );
        $id_enf = $this->input->post("id_enf");
        if ($this->Enfermedad->actualizar($id_enf, $datosEditados)) {
            $this->session->set_flashdata(
                "confirmacion",
                "Enfermedad actualizado exitosamente"
            );
        } else {$this->session->set_flashdata(
                "error",
                "Error al actualizar intente otra vez"
            );
        }
        redirect("enfermedades/index");
    }
} // Cierre de la clase
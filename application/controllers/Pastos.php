<?php
class Pastos extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //Cargar Modelo
        $this->load->model('Pasto');
    }
    //Funcion que renderiza la vista index                                        
    public function index()
    {
        $data['pastos'] = $this->Pasto->obtenerTodos();
        // print_r($data);
        $this->load->view('header');
        $this->load->view('pastos/index', $data);
        $this->load->view('footer');
    }

    public function nuevo()
    {
        $this->load->view('header');
        $this->load->view('pastos/nuevo');
        $this->load->view('footer');
    }

    public function guardar()
    {
        $datosNuevoPasto = array(
            "id_pas" => $this->input->post('id_pas'),
            "nom_pas" => $this->input->post('nom_pas'),
            "predio_pas" => $this->input->post('predio_pas'),
            "cantidad_pas" => $this->input->post('cantidad_pas'),
            "fecha_pas" => $this->input->post('fecha_pas')
        );
        if ($this->Pasto->insertar($datosNuevoPasto)) {
            $this->session->set_flashdata(
                "confirmacion",
                "Ingreso de Pasto guardado exitosamente"
            );
        } else {
            $this->session->set_flashdata(
                "error",
                "Error al guardar intente otra vez"
            );
        }
        redirect('pastos/index');
    }
    //funcion para eliminar instructores
    public function eliminar($id_pas)
    {
        if ($this->session->userdata("conectado")
            ->perfil_usu != "ADMINISTRADOR"){
            $this->session->set_flashdata(
                "error",
                "No tiene permisos para eliminar"
            );
            redirect('pastos/index');
        }
        if ($this->Pasto->borrar($id_pas)) {
            $this->session->set_flashdata(
                "confirmacion",
                "Pastos eleminado exitosamente"
            );
        } else {$this->session->set_flashdata(
                "error",
                "Error al eliminar intente otra vez"
            );
        }
        redirect('pastos/index');
    }
    //function reenderizar vista editor
    public function editar($id_pas)
    {
        $data["pastoEditar"] =
            $this->Pasto->obtenerPorId($id_pas);
        $this->load->view('header');
        $this->load->view('pastos/editar', $data);
        $this->load->view('footer');
    }
    // Proceso de actualizacion
    public function procesarActualizacion()
    {
        $datosEditados = array(
            "id_pas" => $this->input->post('id_pas'),
            "nom_pas" => $this->input->post('nom_pas'),
            "predio_pas" => $this->input->post('predio_pas'),
            "cantidad_pas" => $this->input->post('cantidad_pas'),
            "fecha_pas" => $this->input->post('fecha_pas')
        );
        $id_pas = $this->input->post("id_pas");
        if ($this->Pasto->actualizar($id_pas, $datosEditados)) {
            $this->session->set_flashdata(
                "confirmacion",
                "Pasto actualizado exitosamente"
            );
        } else {$this->session->set_flashdata(
                "error",
                "Error al actualizar intente otra vez"
            );
        }
        redirect("pastos/index");
    }
} // Cierre de la clase
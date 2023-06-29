<?php
class Crias extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //Cargar Modelo
        $this->load->model('Cria');
    }
    //Funcion que renderiza la vista index                                        
    public function index()
    {
        $data['crias'] = $this->Cria->obtenerTodos();
        // print_r($data);
        $this->load->view('header');
        $this->load->view('crias/index', $data);
        $this->load->view('footer');
    }

    public function nuevo()
    {
        $this->load->view('header');
        $this->load->view('crias/nuevo');
        $this->load->view('footer');
    }

    public function guardar(){
        $datosNuevoCria = array("cod_cri" => $this->input->post('cod_cri'),
            "nom_cri" => $this->input->post('nom_cri'),
            "sexo_cri" => $this->input->post('sexo_cri'),
            "fecha_cri" => $this->input->post('fecha_cri'),
            "peso_cri" => $this->input->post('peso_cri')
        );
        if ($this->Cria->insertar($datosNuevoCria)) {
            $this->session->set_flashdata(
                "confirmacion",
                "Ingreso de la Cria guardado exitosamente"
            );
        } else {
            $this->session->set_flashdata(
                "error",
                "Error al guardar intente otra vez"
            );
        }
        redirect('crias/index');
    }
    //funcion para eliminar instructores
    public function eliminar($cod_cri)
    {
        if ($this->session->userdata("conectado")
            ->perfil_usu != "ADMINISTRADOR"){
                $this->session->set_flashdata(
                    "error",
                    "No tiene permisos para eliminar"
                );
                redirect('crias/index');    
        }
        if ($this->Cria->borrar($cod_cri)) {
            $this->session->set_flashdata(
                "confirmacion",
                "Cria eleminado exitosamente"
            );
        } else {$this->session->set_flashdata(
            "error",
            "Error al eliminar intente otra vez"
            );
        }
        redirect('crias/index');
    }
    //function reenderizar vista editor
    public function editar($cod_cri)
    {
        $data["criaEditar"] =
            $this->Cria->obtenerPorId($cod_cri);
        $this->load->view('header');
        $this->load->view('crias/editar', $data);
        $this->load->view('footer');
    }
    // Proceso de actualizacion
    public function procesarActualizacion(){
        $datosEditados = array(
            "cod_cri" => $this->input->post('cod_cri'),
            "nom_cri" => $this->input->post('nom_cri'),
            "sexo_cri" => $this->input->post('sexo_cri'),
            "fecha_cri" => $this->input->post('fecha_cri'),
            "peso_cri" => $this->input->post('peso_cri')
        );
        $cod_cri = $this->input->post("cod_cri");
        if ($this->Cria->actualizar($cod_cri, $datosEditados)) {
            $this->session->set_flashdata(
                "confirmacion",
                "Cria actualizado exitosamente"
            );
        } else {
            $this->session->set_flashdata(
                "error",
                "Error al actualizar intente otra vez"
            );
        }
        redirect("crias/index");
    }
} // Cierre de la clase
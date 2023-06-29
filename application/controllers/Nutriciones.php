<?php
class Nutriciones extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //Cargar Modelo
        $this->load->model('Nutricion');
    }
    //Funcion que renderiza la vista index                                        
    public function index()
    {
        $data['nutriciones'] = $this->Nutricion->obtenerTodos();
        // print_r($data);
        $this->load->view('header');
        $this->load->view('nutriciones/index', $data);
        $this->load->view('footer');
    }

    public function nuevo()
    {
        $this->load->view('header');
        $this->load->view('nutriciones/nuevo');
        $this->load->view('footer');
    }

    public function guardar(){
        $datosNuevoNutricion = array("id_nut" => $this->input->post('id_nut'),
            "nom_nut" => $this->input->post('nom_nut'),
            "porcentaje_nut" => $this->input->post('porcentaje_nut'),
            "tipo_nut" => $this->input->post('tipo_nut'),
            "det_nut" => $this->input->post('det_nut')
        );

        if ($this->Nutricion->insertar($datosNuevoNutricion)) {
            $this->session->set_flashdata(
                "confirmacion",
                "Ingreso de Nutricion guardado exitosamente"
            );
        } else {
            $this->session->set_flashdata(
                "error",
                "Error al guardar intente otra vez"
            );
        }
        redirect('nutriciones/index');
    }
    //funcion para eliminar instructores
    public function eliminar($id_nut)
    {
        if ($this->session->userdata("conectado")
            ->perfil_usu != "ADMINISTRADOR"){
                $this->session->set_flashdata(
                    "error",
                    "No tiene permisos para eliminar"
                );
                redirect('nutriciones/index');    
        }
        if ($this->Nutricion->borrar($id_nut)) {
            $this->session->set_flashdata(
                "confirmacion",
                "Nutricion eleminado exitosamente"
            );
        } else {$this->session->set_flashdata(
                "error",
                "Error al eliminar intente otra vez"
            );
        }
        redirect('nutriciones/index');    
    }
    //function reenderizar vista editor
    public function editar($id_nut)
    {
        $data["nutricionEditar"] =
            $this->Nutricion->obtenerPorId($id_nut);
        $this->load->view('header');
        $this->load->view('nutriciones/editar', $data);
        $this->load->view('footer');
    }
    // Proceso de actualizacion
    public function procesarActualizacion(){
        $datosEditados = array(
            "id_nut" => $this->input->post('id_nut'),
            "nom_nut" => $this->input->post('nom_nut'),
            "porcentaje_nut" => $this->input->post('porcentaje_nut'),
            "tipo_nut" => $this->input->post('tipo_nut'),
            "det_nut" => $this->input->post('det_nut')
        );
        $id_nut = $this->input->post("id_nut");
        if ($this->Nutricion->actualizar($id_nut, $datosEditados)) {
            $this->session->set_flashdata(
                "confirmacion",
                "Nutricion actualizado exitosamente"
            );
        } else {
            $this->session->set_flashdata(
                "error",
                "Error al actualizar intente otra vez"
            );
        }
        redirect("nutriciones/index");
    }
} // Cierre de la clase
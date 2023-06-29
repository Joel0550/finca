<?php
class Pasteurizaciones extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //Cargar Modelo
        $this->load->model('Pasteurizacion');
    }
    //Funcion que renderiza la vista index                                        
    public function index()
    {
        $data['pasteurizaciones'] = $this->Pasteurizacion->obtenerTodos();
        // print_r($data);
        $this->load->view('header');
        $this->load->view('pasteurizaciones/index', $data);
        $this->load->view('footer');
    }

    public function nuevo()
    {
        $this->load->view('header');
        $this->load->view('pasteurizaciones/nuevo');
        $this->load->view('footer');
    }

    public function guardar(){
        $datosNuevoPasteurizacion = array("id_pat" => $this->input->post('id_pat'),
            "fec_pat" => $this->input->post('fec_pat'),
            "pro_pat" => $this->input->post('pro_pat'),
            "tem_pat" => $this->input->post('tem_pat'),
            "obs_pat" => $this->input->post('obs_pat')
        );

        if ($this->Pasteurizacion->insertar($datosNuevoPasteurizacion)) {
            $this->session->set_flashdata(
                "confirmacion",
                "Pasteurizacion guardado exitosamente"
            );
        } else {
            $this->session->set_flashdata(
                "error",
                "Error al guardar intente otra vez"
            );
        }
        redirect('pasteurizaciones/index');
    }
    //funcion para eliminar instructores
    public function eliminar($id_pat)
    {
        if ($this->session->userdata("conectado")
            ->perfil_usu != "ADMINISTRADOR"){
                $this->session->set_flashdata(
                    "error",
                    "No tiene permisos para eliminar"
                );
                redirect('pasteurizaciones/index');    
        }
        if ($this->Pasteurizacion->borrar($id_pat)) {
            $this->session->set_flashdata(
                "confirmacion",
                "Pasteurizacion eleminado exitosamente"
            );
        } else {$this->session->set_flashdata(
                "error",
                "Error al eliminar intente otra vez"
            );
        }
        redirect('pasteurizaciones/index');    
    }
    //function reenderizar vista editor
    public function editar($id_pat)
    {
        $data["pasteurizacionEditar"] =
            $this->Pasteurizacion->obtenerPorId($id_pat);
        $this->load->view('header');
        $this->load->view('pasteurizaciones/editar', $data);
        $this->load->view('footer');
    }
    // Proceso de actualizacion
    public function procesarActualizacion(){
        $datosEditados = array(
            "id_pat" => $this->input->post('id_pat'),
            "fec_pat" => $this->input->post('fec_pat'),
            "pro_pat" => $this->input->post('pro_pat'),
            "tem_pat" => $this->input->post('tem_pat'),
            "obs_pat" => $this->input->post('obs_pat')

        );
        $id_pat = $this->input->post("id_pat");
        if ($this->Pasteurizacion->actualizar($id_pat, $datosEditados)) {
            $this->session->set_flashdata(
                "confirmacion",
                "Pasteurizacion actualizado exitosamente"
            );
        } else {
            $this->session->set_flashdata(
                "error",
                "Error al actualizar intente otra vez"
            );
        }
        redirect("pasteurizaciones/index");
    }
} // Cierre de la clase
<?php
class Producciones extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //Cargar Modelo
        $this->load->model('Produccion');
    }
    //Funcion que renderiza la vista index                                        
    public function index()
    {
        $data['producciones'] = $this->Produccion->obtenerTodos();
        // print_r($data);
        $this->load->view('header');
        $this->load->view('producciones/index', $data);
        $this->load->view('footer');
    }

    public function nuevo()
    {
        $this->load->view('header');
        $this->load->view('producciones/nuevo');
        $this->load->view('footer');
    }

    public function guardar()
    {
        $datosNuevoProduccion = array(
            "cod_pro" => $this->input->post('cod_pro'),
            "tipo_pro" => $this->input->post('tipo_pro'),
            "estado_pro" => $this->input->post('estado_pro'),
            "fecha_pro" => $this->input->post('fecha_pro')
        );
        if ($this->Produccion->insertar($datosNuevoProduccion)) {
            $this->session->set_flashdata(
                "confirmacion",
                "Ingreso de Produccion guardado exitosamente"
            );
        } else {
            $this->session->set_flashdata(
                "error",
                "Error al guardar intente otra vez"
            );
        }
        redirect('producciones/index');
    }
    //funcion para eliminar instructores
    public function eliminar($cod_pro)
    {   
        if ($this->session->userdata("conectado")
            ->perfil_usu != "ADMINISTRADOR"){
                $this->session->set_flashdata(
                    "error",
                    "No tiene permisos para eliminar"
                );
                redirect('producciones/index');    
        }
        if ($this->Produccion->borrar($cod_pro)) {
            $this->session->set_flashdata(
                "confirmacion",
                "Producciones eleminado exitosamente"
            );
        } else {$this->session->set_flashdata(
                "error",
                "Error al eliminar intente otra vez"
            );
        }
        redirect('producciones/index');
    }
        //function reenderizar vista editor
        public function editar($cod_pro)
        {
            $data["produccionEditar"] =
                $this->Produccion->obtenerPorId($cod_pro);
            $this->load->view('header');
            $this->load->view('producciones/editar', $data);
            $this->load->view('footer');
        }
        // Proceso de actualizacion
        public function procesarActualizacion(){
            $datosEditados = array(
                "cod_pro" => $this->input->post('cod_pro'),
                "tipo_pro" => $this->input->post('tipo_pro'),
                "estado_pro" => $this->input->post('estado_pro'),
                "fecha_pro" => $this->input->post('fecha_pro')
            );
            $cod_pro = $this->input->post("cod_pro");
            if ($this->Produccion->actualizar($cod_pro, $datosEditados)) {
                $this->session->set_flashdata(
                    "confirmacion",
                    "Produccion actualizado exitosamente"
                );
            } else {$this->session->set_flashdata(
                    "error",
                    "Error al actualizar intente otra vez"
                );
            }
            redirect("producciones/index");
        }
} // Cierre de la clase
<?php
class Instructores extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Instructor');
  }
  
  //Funcion que renderiza la vista index                                        
  public function index()
  {
    $data ['instructores']=$this->Instructor->obtenerTodos();
    //print_r($data);
    $this->load->view('header');
    $this->load->view('instructores/index', $data);
    $this->load->view('footer');
  }

  public function nuevo()
  {
    $this->load->view('header');
    $this->load->view('instructores/nuevo');
    $this->load->view('footer');
  }
  public function guardar()
  {
    $datosNuevoInstructor = array(
      "cedula_ins" => $this->input->post('cedula_ins'),
      "primer_apellido_ins" => $this->input->post('primer_apellido_ins'),
      "segundo_apellido_ins" => $this->input->post('segundo_apellido_ins'),
      "nombres_ins" => $this->input->post('nombres_ins'),
      "titulo_ins" => $this->input->post('titulo_ins'),
      "telefono_ins" => $this->input->post('telefono_ins'),
      "direccion_ins" => $this->input->post('direccion_ins')

    );
    if ($this->Instructor->insertar($datosNuevoInstructor)) {
      redirect('instructores/index');
    } else {
      echo "<h1>ERROR PAPI REY";
    }

  }
  public function eliminar($id_ins){
    if($this->Instructor->
    borrar($id_ins)) {
    redirect('instructores/index');
    } else {
      echo "ERROR AL BORRAR :(";
    }
   
  }

  }
  


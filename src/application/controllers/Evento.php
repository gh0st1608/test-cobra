<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evento extends CI_Controller {
    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct();
            
        //llamo al helper url
        $this->load->helper("url"); 
            
        //llamo o incluyo el modelo
        $this->load->model("Event");
            
        //cargo la libreria de sesiones
        //$this->load->library("session");
    }
    //controlador por defecto
    public function index(){
            
        //array asociativo con la llamada al metodo
        //del modelo
        $eventos["ver"]=$this->Event->ver();
        
        //cargo la vista y le paso los datos
        $this->load->view("evento/view",$eventos);
        //$this->load->view('evento/view', array('eventos' => $this->db->get('evento')->result()));
    }

    public function create(){
        $this->load->view("evento/registrar");
    }
 
    //controlador para añadir
    public function add(){
        
        //compruebo si se a enviado submit
        if($this->input->post("submit")){
        //llamo al metodo add
        $add=$this->Event->add(
                $this->input->post("titulo"),
                $this->input->post("descripcion"),
                $this->input->post("fecha_inicio"),
                $this->input->post("fecha_fin")
                );
        }
        $this->load->view("evento/registrar",$add); 
        if($add==true){
            //Sesion de una sola ejecución
            echo 'Evento agregado correctamente';
        }else{
            echo 'Evento agregado incorrectamente';
        }
            
        //redirecciono la pagina a la url por defecto
        redirect(base_url());
    }

 
    //controlador para modificar al que
    //le paso por la url un parametro
    public function mod($id_evento){
        if(is_numeric($id_evento)){
            $datos["mod"]=$this->Event->mod($id_evento);
            $this->load->view("evento/modificar",$datos);
            if($this->input->post("submit")){
                $mod=$this->Evento->mod(
                        $id_evento,
                        $this->input->post("submit"),
                        $this->input->post("titulo"),
                        $this->input->post("descripcion"),
                        $this->input->post("fecha_inicio"),
                        $this->input->post("fecha_fin")
                        );
                if($mod==true){
                    //Sesion de una sola ejecución
                    echo 'Evento modificado correctamente';
                }else{
                    echo 'Evento modificado incorrectamente';
                }
                redirect(base_url());
            }
        }else{
            redirect(base_url());
        }
    }
 
    //Controlador para eliminar
    public function eliminar($id_evento){
        if(is_numeric($id_evento)){
            $eliminar=$this->Event->eliminar($id_evento);
            if($eliminar==true){
                echo 'Evento eliminado correctamente';
            }else{
                echo 'Evento eliminado incorrectamente';
            }
            redirect(base_url());
        }else{
            redirect(base_url());
        }
    }


}
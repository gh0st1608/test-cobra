<?php
//include_once 'conexion.php';
class Event extends CI_Model{

    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct();
         
        //cargamos la base de datos
        $this->load->database();
    }
     
    public function ver(){
        //Hacemos una consulta
        $consulta=$this->db->query("SELECT * FROM evento;");
         
        //Devolvemos el resultado de la consulta
        return $consulta->result();
    }
     
    public function add($titulo,$descripcion,$fecha_inicio,$fecha_fin){
        //$consulta=$this->db->query("SELECT email FROM usuarios WHERE email LIKE '$email'");
        if($consulta->num_rows()==0){
            $consulta=$this->db->query("INSERT INTO evento VALUES(NULL,'$titulo','$descripcion','$fecha_inicio','$fecha_fin');");
            if($consulta==true){
              return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
     
    public function mod($id_evento,$modificar="NULL",$titulo="NULL",$descripcion="NULL",$fecha_inicio="NULL",$fecha_fin="NULL"){
        if($modificar=="NULL"){
            $consulta=$this->db->query("SELECT * FROM evento WHERE id=$id_evento");
            return $consulta->result();
        }else{
          $consulta=$this->db->query("
              UPDATE evento SET titulo='$titulo', descripcion='$descripcion',
              fecha_inicio='$fecha_inicio', fecha_fin='$fecha_fin' WHERE id=$id_evento;
                  ");
          if($consulta==true){
              return true;
          }else{
              return false;
          }
        }
    }
     
    public function eliminar($id_evento){
       $consulta=$this->db->query("DELETE FROM evento WHERE id=$id_evento");
       if($consulta==true){
           return true;
       }else{
           return false;
       }
    }
 

}
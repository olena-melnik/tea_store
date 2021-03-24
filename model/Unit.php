<?php


//підключаємо клас Model
// use model\Model;
require_once 'Model.php';

class Unit extends Model{
    private $id;
    public $name;

    public function find($id){
        $sql="SELECT * FROM `unit` WHERE `id`=:id";
        $data=array(
            'id'=>$id
        );
        if($result=$this->db->select($sql,$data)){
            $this->id=$result[0]['id'];
            $this->name=$result[0]['name'];
            return true;
        }
        return false;
    }

    public function save(){
        $data=array(
            'unitname'=>$this->name
        );
        if(is_null($this->id)){
            $sql="INSERT INTO `unit`(`name`) VALUES (:unitname)";//1                       
        }else{
            $sql="UPDATE `unit` SET `name`=:unitname WHERE `id`=:id";//1
            $data['id']=$this->id;     
        }
        if($result=$this->db->query($sql,$data)){
                return true;
            }
            return false;        
    }
}
?>
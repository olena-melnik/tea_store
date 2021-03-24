<?php
require_once "Model.php";

class Category extends Model{
    public $id;
    public $name;
    public $parent_id;
    public $sort_order;

    public function find($id){
        $sql="SELECT * FROM `category` WHERE `id`=:id";
        $data=array(
            'id'=>$id
        );
        if($result=$this->db->select($sql,$data)){
            $this->id = $id;
            $this->name=$result[0]['name'];
            $this->parent_id=$result[0]['parent_id'];
            $this->sort_order=$result[0]['sort_order'];
            return true;
        }
        return false;
    }

    public function save(){

    }

    
}
?>
<?php
class StatusProduct extends Model{
    public $id;
    public $name;

    public function find($id){
        $sql="SELECT * FROM `status_product` WHERE `id`=:id";
        $data=array(
            'id'=>$this->id
        );
        if($result=$this->db->select($sql,$data)){
            $this->name=$result[0]['name'];
            return true;
        }
        return false;
    }

    public function save(){

    }
}
?>
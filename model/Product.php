<?php
require_once "Model.php";

class Product extends Model{
    private $id;
    public $name;
    public $year;
    public $description;
    public $status_id;

    public $categories;

    public function find($id){
        $sql="SELECT * FROM `product` WHERE `id`=:id";
        $data=array(
            'id'=>$id
        );
        if($result=$this->db->select($sql,$data)){
            $this->id=$result[0]['id'];
            $this->name=$result[0]['name'];
            $this->year=$result[0]['year'];
            $this->description=$result[0]['description'];
            $this->status_id=$result[0]['status_id'];
            $this->categories = $this->getCategories();
            return true;
        }
        return false;
    }

    public function save(){

    }

    public function getCategories(){
        $categories=array();
        $sql="SELECT `category_id` FROM `product_category` WHERE `product_id`=:product_id";
        $data=array(
            'product_id'=>$this->id
        );        
        if($result=$this->db->select($sql,$data)){
            //array(2) { [0]=> array(1) { ["category_id"]=> int(3) } [1]=> array(1) { ["category_id"]=> int(9) } }
            foreach($result as $item){ 
                $category = new Category();   
                $category->find($item['category_id']);
                $categories[]=$category;

            }           
            return $categories;
        }
    }


}
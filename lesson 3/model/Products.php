<?php

namespace app\model;

class Products extends Model {

    public $id;
    public $name;
    public $description;
    public $price;


    public function __construct($name = null, $description = null, $price = null)
    {
        parent::__construct();
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->isNull();
    }
    private function isNull(){
        if (is_null($this->name) || is_null($this->price) || is_null($this->description)){
            return false;
        } else {
             $this->insert();
        }
    }


    public function getTableName() {
        return 'products';
    }



}
<?php

namespace app\model;

use app\interfaces\IModel;
use app\engine\Db;

abstract class Model implements IModel
{
    protected $db;

    public function __construct()
    {
        $this->db = Db::getInstance();
    }

    public function getWere($name, $value) {

    }

    public function getOne($id) {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return $this->db->queryOne($sql, ['id' => $id]);
    }
    public function getAll() {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return $this->db->queryAll($sql);
    }

    protected function insert() {
        $tableName = $this->getTableName();
        $sqlQuery = "SELECT * FROM {$tableName} WHERE name = :name";
        $varQuery = $this->db->queryOne($sqlQuery, ['name' => $this->name]);
        if (is_null($varQuery)){
            $sql = "INSERT INTO {$tableName}(`name`, `description`, `price`) VALUES (:name, :description, :price)";
            $this->db->queryOne($sql,[
                'name'=>$this->name,
                'description'=>$this->description,
                'price'=>$this->price
            ]);
            $result = $this->db->queryOne($sqlQuery, ['name' => $this->name]);
            $this->id = $result['id'];
        }else{
            $this->id = $varQuery['id'];
            $this->update();
        }
    }

    private function update() {
        $tableName = $this->getTableName();
        $sql = "UPDATE {$tableName} SET price = :price WHERE id = :id";
        $this->db->queryOne($sql,['price' => $this->price,'id'=>$this->id]);
    }

    public function delete() {
        $tableName = $this->getTableName();
        $sql = "DELETE FROM {$tableName} WHERE id = :id";
        $this->db->queryOne($sql,['id'=>$this->id]);
    }

}
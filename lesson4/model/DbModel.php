<?php

namespace app\model;


use app\engine\Db;

abstract class DbModel extends Models
{

    public function getWere($name, $value) {

    }

    public static function getOne($id) {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->queryObject($sql, ['id' => $id], static::class);
    }
    public static function getAll() {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return Db::getInstance()->queryAll($sql);
    }
//INSERT INTO `products`(`name`, `description`, `price`) VALUES (:name, :description, :price)
    public function insert() {

        $params = [];
        $colums = [];

        foreach($this as $key => $value) {
            if ($key == "id") continue;
            $params[":{$key}"] = $value;
            $colums[] = "`$key`";
        }
        $colums = implode(", ", $colums);
        $values = implode(", ", array_keys($params));

        $tableName = static::getTableName();

        $sql = "INSERT INTO {$tableName} ({$colums}) VALUES ({$values})";

      //  var_dump($sql, $params);


        Db::getInstance()->execute($sql, $params);

        $this->id = Db::getInstance()->lastInsertId();


    }

    public function update() {
        var_dump($this);
    }

    public function delete() {
        $tableName = static::getTableName();
        $sql = "DELETE FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->execute($sql, ['id' => $this->id]);
    }

    public function save() {
        if (is_null($this->id))
            $this->insert();
        else
            $this->update();

    }

}
<?php
namespace app\model;
use app\engine\Db ;

class Products extends Model {
    public $id;
    public $name;
    public $description;
    public $price;
    public $db;

public function __construct(Db $db)
{
    parent::__construct($db);
}

    public function getTableName() {
        return 'products';
    }


}
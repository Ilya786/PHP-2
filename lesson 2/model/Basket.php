<?php

namespace app\model;

use app\engine\Db;
use app\model\Model;

class Basket extends Model
{
    public $id_user;

    public function __construct(Db $db)
    {
        parent::__construct($db);
    }
    public function getTableName()
    {
        return 'basket';
    }
}
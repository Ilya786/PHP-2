<?php
/**
 * Created by PhpStorm.
 * User: Ilya
 * Date: 16.06.2019
 * Time: 15:25
 */

namespace app\model;


class Review extends DbModel {

    public $name;
    public $review;
    public $product_id;


    public function __construct($name = null, $review = null, $product_id = null)
    {
        $this->name = $name;
        $this->review = $review;
        $this->product_id = $product_id;
    }


    public static function getTableName() {
        return 'reviews';
    }



}
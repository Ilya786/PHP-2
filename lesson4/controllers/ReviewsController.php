<?php
/**
 * Created by PhpStorm.
 * User: Ilya
 * Date: 16.06.2019
 * Time: 15:20
 */

namespace app\controllers;


use app\model\Review;

class ReviewsController extends Controller
{
    public function actionCatalogReviews() {
        $reviews = Review::getAll();
        echo $this->render('catalogReviews', ['reviews' => $reviews]);
    }

    public function actionReview()
    {
        $id = $_GET['id'];
        $reviews = Review::getOne($id);
        echo $this->render('review', ['review' => $reviews]);
    }
}
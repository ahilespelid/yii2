<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Busy;

class BusyController extends Controller{
    public function actionIndex(){
        $query = Busy::find();

        $pagination = new Pagination([
            'defaultPageSize' => 1,
            'totalCount' => $query->count(),
        ]);

        $pages = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'pages' => $pages,
            'pagination' => $pagination,
        ]);
    }
}
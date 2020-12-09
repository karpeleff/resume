<?php

//https://github.com/justcoded/yii2-starter.git

namespace app\modules\resume\controllers;

use yii\web\Controller;

/**
 * Default controller for the `resume` module
 */
class ResumeController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */

     public $layout = 'res';
    public function actionIndex()
    {
        return $this->render('index');
    }


    public function actionTest()
    {
        return $this->render('test');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionNew()
    {
        return $this->render('new_one');
    }




}

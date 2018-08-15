<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\person1;


class SiteController extends Controller
{
    public function actionIndex($id = "", $fname = "", $lname = "", $number = "")
    {  
        
        if($id == "" && $fname == "" && $lname == "" && $number == "")
        {
            $query = person1::find()->orderBy('id')->all();
            return $this->render('index', [
                'persons' => $query,
            ]);
        }
        else if($id != "")
        {
            $query = person1::find()
                ->where(['id' => $id])
                ->all();
            return $this->render('index', [
                'persons' => $query,
            ]);
        }
        else if($fname != "")
        {
            $query = person1::find()
                ->where(['fName' => $fname])
                ->all();
            return $this->render('index', [
                'persons' => $query,
            ]);
        }
        else if($lname != "") 
        {
            $query = person1::find()
                ->where(['lName' => $lname])
                ->all();
            return $this->render('index', [
                'persons' => $query,
            ]);
        }
        else if($number != "")
        {
            $query = person1::find()
                ->where(['number' => $number])
                ->all();
            return $this->render('index', [
                'persons' => $query,
            ]);
        }
    }
}

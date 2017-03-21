<?php

namespace app\controllers;

class FirstController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionPage1() {
        return $this->render('page1');
       
    }
    
    public function actionPage2() {
        $hello = "Panuwat Chaladaur";
        $a = 5;
        return $this->render('page2',[
            'hello'=>$hello,
            'x'=> $a
        ]);
        
    }

    
}
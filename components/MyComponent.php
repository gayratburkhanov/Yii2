<?php
/**
 * Created by PhpStorm.
 * User: atrox
 * Date: 22.05.2018
 * Time: 10:48
 */

namespace app\components;

use yii\base\Component;
use Yii;
use yii\web\Controller;

class MyComponent extends Controller
{
public function Sessions($arr){

    if(!Yii::$app->session->isActive)
    {
        Yii::$app->session->open();


    }

    Yii::$app->session->destroySession("lang");

    Yii::$app->session->set("id",$arr["id"]);
    Yii::$app->session->set("firstname",$arr["firstname"]);
    Yii::$app->session->set("lastname",$arr["lastname"]);
    Yii::$app->session->set("username",$arr["username"]);
    Yii::$app->session->set("password",$arr["password"]);
    Yii::$app->session->set("session_id", Yii::$app->session->getId());
    return true;


}


public function check(){
    if (Yii::$app->session->get("session_id") == Yii::$app->session->getId()){
            return true;
    }else{
        return false;
    }
}
}
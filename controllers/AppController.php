<?php
/**
 * Created by PhpStorm.
 * User: atrox
 * Date: 21.05.2018
 * Time: 12:43
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;

class AppController extends Controller
{
    public function Sessions($arr)
    {

        if (!Yii::$app->session->isActive) {
            Yii::$app->session->open();
        }

        Yii::$app->session->destroySession("id, firstname, lastname, username, password, session_idx");

        Yii::$app->session->set("id", $arr["id"]);
        Yii::$app->session->set("firstname", $arr["firstname"]);
        Yii::$app->session->set("lastname", $arr["lastname"]);
        Yii::$app->session->set("username", $arr["username"]);
        Yii::$app->session->set("password", $arr["password"]);
        Yii::$app->session->set("session_idx", Yii::$app->session->getId());
        return true;
    }


    public function check()
    {


        if (!Yii::$app->session->isActive) {

            Yii::$app->session->open();
        }

        if (Yii::$app->session->get("session_idx") == Yii::$app->session->getId()) {
            return true;
        } else {
            Yii::$app->session->destroy();
            return $this->redirect('login');
        }
    }
    public static function checking()
    {


        if (!Yii::$app->session->isActive) {

            Yii::$app->session->open();
        }

        if (Yii::$app->session->get("session_idx") == Yii::$app->session->getId()) {
            return true;
        } else {
            Yii::$app->session->destroy();
            return false;
        }
    }


    public function close()
    {

        if (!Yii::$app->session->isActive) {
            Yii::$app->session->open();

//            Yii::$app->session->destroy();
        }
        Yii::$app->session->destroy();

        return $this->redirect('login');
    }

}
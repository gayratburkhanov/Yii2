<?php
/**
 * Created by PhpStorm.
 * User: atrox
 * Date: 22.05.2018
 * Time: 14:27
 */

namespace app\controllers;

use app\models\Post;
use Yii;
use app\models\User;

class UserController extends AppController
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        $this->check();
        $user_id = $_SESSION["id"];

//        $users = User::find()->all();
//        User::deleteAll(['<', 'id', 28]);
//        var_dump($users);

        $users =(new \yii\db\Query())
            ->from('user')->all();

        return $this->render('index', compact('users'));
    }

    public function actionView()
    {
        $this->check();
        $request = Yii::$app->request;
        $gete = $request->get();
        $id = $gete['id'];

//        $alls =(new \yii\db\Query())
//            ->from('post')
//            ->where('user_id = :id', [':id' => $id]);

        $alls = Post::find()->asArray()->where(['user_id' => $id])->all();


        return $this->render("view", compact('alls'));

    }

}
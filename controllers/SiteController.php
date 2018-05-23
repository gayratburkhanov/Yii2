<?php

namespace app\controllers;

use app\models\PostSearch;
use app\models\Registration;
use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Post;

class SiteController extends AppController
{


    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->check();
        $user_id = $_SESSION["id"];

        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {

        $request = Yii::$app->request;
        $username = $request->post('username');
        $password = md5($request->post('password'));



//        $check = LoginForm::find()->where(['username' => $username] and ['password' => $password])->one();
//        if ($request->post('submit') and count($check) > 0){
//
//
//                echo"sds";
//
//        }
//
//        $model = new LoginForm();
        if($request->isPost)
        {
            $all =(new \yii\db\Query())
                ->from('user')
                ->where("username = :username",[":username" => $username])
                ->andWhere("password = :password",[":password" => $password])
                ->one();
            $one = $all['username'];
            $two = $all['password'];

            if ($one == $username and $two == $password){
                if($this->Sessions($all)){
                    $this->redirect('index');
                }
            }
            else{
                return $this->render('login');
            }


//            var_dump($all);

        }


    return $this->render('login');




    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        $this->close();
    }
    /**
     * Displays a single Post model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $this->check();
        return $this->render('about');
    }

    /**
     * @return string|Response
     */
    public function actionRegister()
    {
        $request = Yii::$app->request;

        $firstname = $request->post('firstname');
        $lastname = $request->post('lastname');
        $username = $request->post('username');
        $password = md5($request->post('password'));
        $re_password = md5($request->post('re_password'));

        if ($request->post('submit') and $password == $re_password){
            $model = new Registration();
            $model->firstname = $firstname;
            $model->lastname = $lastname;
            $model->username = $username;
            $model->password = $password;
            $model->save();
            $this->redirect('login?reg=success');
        }
        else{
            return $this->render('register');
        }
        return $this->render('register', ['model' => $model]);
    }

    public function actionProfile()
    {
        $this->check();
        $user_id = $_SESSION["id"];

//        $alls = User::find()->asArray()->where(['id' => $user_id])->all();

        $alls =(new \yii\db\Query())
            ->from('user')
            ->where('id = :id', [':id' => $user_id])
            ->one();
        $pass_db = $alls['password'];

        $request = Yii::$app->request;

        $lastname = $request->post('lastname');
        $firstname = $request->post('firstname');
        $username = $request->post('username');

        $CurrentPassword = md5($request->post('CurrentPassword'));
        $NewPassword = md5($request->post('NewPassword'));
        $reNewPassword = md5($request->post('reNewPassword'));

        if ($request->post('profEdit')){
            Yii::$app->db->createCommand()
                ->update('user', ['lastname' => $lastname], ['id' => $user_id])
                ->execute();
            Yii::$app->db->createCommand()
                ->update('user', ['firstname' => $firstname], ['id' => $user_id])
                ->execute();
            Yii::$app->db->createCommand()
                ->update('user', ['username' => $username], ['id' => $user_id])
                ->execute();

            return $this->redirect(['site/profile?event=success']);
        }
        if ($request->post('passEdit')){
                if ($CurrentPassword == $pass_db and $NewPassword == $reNewPassword){
                    Yii::$app->db->createCommand()
                        ->update('user', ['password' => $NewPassword], ['id' => $user_id])
                        ->execute();
                    return $this->redirect(['site/profile?pass=success']);
                }else{
                    return $this->redirect(['site/profile?error=success']);
                }
        }



        return $this->render('profile', compact('alls'));
    }

}

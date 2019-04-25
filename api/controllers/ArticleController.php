<?php

namespace api\controllers;

use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;
use common\models\Article;
use yii\helpers\ArrayHelper;
use yii\filters\auth\QueryParamAuth;
use common\models\Adminuser;
use yii\filters\auth\HttpBasicAuth;
use yii\web\ForbiddenHttpException;
use yii\filters\RateLimiter;

class ArticleController extends ActiveController
{

    public $modelClass = 'common\models\Article';

//    public function behaviors()
//    {
//        $behaviors = parent::behaviors();
//        $behaviors['authenticator'] = [
//            'class' => QueryParamAuth::className(),
//        ];
//        $behaviors['rateLimiter'] = [
//            'class' => RateLimiter::className(),
//            'enableRateLimitHeaders' => true,
//        ];
//        return $behaviors;
//    }
//
//    public function checkAccess($action, $model = null, $params = [])
//    {
//        //对ActiveControllers类中默认实现了的方法进行权限设置
//        if ($action === 'view')
//        {
//            if (\Yii::$app->user->can('ArticleViewer'))
//            {
//                return true;
//            }
//        }
//        if ($action === 'view' || $action === 'update' || $action === 'delete' || $action === 'create' || $action === 'index')
//        {
//            if (\Yii::$app->user->can('ArticleAdmin'))
//            {
//                return true;
//            }
//        }
//        throw new ForbiddenHttpException('对不起，你没有进行该操作的权限。');
//    }
//
//    public function actions()
//    {
//        $actions = parent::actions();
//        unset($actions['index']);
//        return $actions;
//    }
//
//    public function actionIndex()
//    {
//        $modelClass = $this->modelClass;
//        return new ActiveDataProvider([
//            'query' => $modelClass::find()->asArray(),
//            'pagination' => ['pageSize' => 5],
//        ]);
//    }
//
//    public function actionSearch()
//    {
//        if (!\Yii::$app->user->can('ArticleAdmin'))
//        {
//            throw new ForbiddenHttpException('对不起，你没有进行该操作的权限。');
//        }
//        return Article::find()->where(['like', 'title', $_POST['keyword']])->all();
//    }

}

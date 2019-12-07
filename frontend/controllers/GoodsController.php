<?php


namespace frontend\controllers;


use common\models\Goods;
use yii;
class GoodsController extends CommonController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionDetail()
    {
        if(Yii::$app->request->isGet){
            $id=Yii::$app->request->get('id');
            $item=Goods::find()
                ->where(['id'=>$id])
                ->andWhere(['status'=>1])
                ->one();
            if (!isset($item)){
                throw new \yii\web\NotFoundHttpException('The requested page does not exist.');
            }
            Yii::$app->params['data'] = $item;
        }
        return $this->render('index');
    }

}
<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dlc_goods".
 *
 * @property integer $id
 * @property string $name
 * @property integer $goods_type_id
 * @property integer $shop_id
 * @property string $img
 * @property string $describe
 * @property string $content
 * @property string $price
 * @property integer $min_fans
 * @property integer $pay_num
 * @property integer $stock
 * @property integer $status
 * @property integer $ratio
 * @property string $commission
 * @property integer $monthly_sales
 * @property integer $is_ding
 * @property integer $etime
 * @property integer $ctime
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dlc_goods';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_type_id', 'shop_id', 'min_fans', 'pay_num', 'stock', 'status', 'ratio', 'monthly_sales', 'is_ding', 'etime', 'ctime'], 'integer'],
            [['img', 'content', 'ctime'], 'required'],
            [['content'], 'string'],
            [['price', 'commission'], 'number'],
            [['name'], 'string', 'max' => 50],
            [['img'], 'string', 'max' => 225],
            [['describe'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'goods_type_id' => 'Goods Type ID',
            'shop_id' => 'Shop ID',
            'img' => 'Img',
            'describe' => 'Describe',
            'content' => 'Content',
            'price' => 'Price',
            'min_fans' => 'Min Fans',
            'pay_num' => 'Pay Num',
            'stock' => 'Stock',
            'status' => 'Status',
            'ratio' => 'Ratio',
            'commission' => 'Commission',
            'monthly_sales' => 'Monthly Sales',
            'is_ding' => 'Is Ding',
            'etime' => 'Etime',
            'ctime' => 'Ctime',
        ];
    }

    public function getImgUrl(){
            return Upload::getImg($this->img);
    }
    public function getUrl(){
        return \Yii::$app->urlManager->createUrl(
            ['goods/detail','id'=>$this->id]
        );
    }
    public function getContents(){
       return str_replace('src="/public','src="http://shop.zijiehaowu.com/public',$this->content);
    }
}

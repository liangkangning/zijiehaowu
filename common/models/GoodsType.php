<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dlc_goods_type".
 *
 * @property integer $id
 * @property string $name
 * @property integer $sort
 * @property integer $shop_id
 * @property integer $ctime
 */
class GoodsType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dlc_goods_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'ctime'], 'required'],
            [['sort', 'shop_id', 'ctime'], 'integer'],
            [['name'], 'string', 'max' => 11],
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
            'sort' => 'Sort',
            'shop_id' => 'Shop ID',
            'ctime' => 'Ctime',
        ];
    }
}

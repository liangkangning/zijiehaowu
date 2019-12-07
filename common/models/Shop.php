<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "shop".
 *
 * @property integer $id
 * @property string $name
 * @property string $mobile
 * @property integer $aid
 * @property string $password
 * @property integer $ctime
 */
class Shop extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shop';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aid', 'ctime'], 'integer'],
            [['name', 'password'], 'string', 'max' => 50],
            [['mobile'], 'string', 'max' => 20],
            [['mobile'], 'unique'],
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
            'mobile' => 'Mobile',
            'aid' => 'Aid',
            'password' => 'Password',
            'ctime' => 'Ctime',
        ];
    }
}

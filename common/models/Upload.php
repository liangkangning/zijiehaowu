<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dlc_upload".
 *
 * @property integer $id
 * @property string $name
 * @property string $ext
 * @property string $type
 * @property string $savename
 * @property string $savepath
 * @property integer $is_api
 */
class Upload extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dlc_upload';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_api'], 'integer'],
            [['name', 'savename', 'savepath'], 'string', 'max' => 255],
            [['ext'], 'string', 'max' => 8],
            [['type'], 'string', 'max' => 10],
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
            'ext' => 'Ext',
            'type' => 'Type',
            'savename' => 'Savename',
            'savepath' => 'Savepath',
            'is_api' => 'Is Api',
        ];
    }

    static function getImg($value){//通过upload  的id号。获取完整的
        $row = self::findOne($value);
        if ($row['is_api']){
            $img = 'http://shop.zijiehaowu.com/public' .'/uploads/img/'.$row['savepath'].$row['savename'];
        }else{
            $img = 'http://shop.zijiehaowu.com/public' .'/'.$row['savepath'].$row['savename'];
        }

        $img = $row ? $img : '';
        return $img;

    }
}

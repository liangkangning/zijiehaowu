<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dlc_config".
 *
 * @property integer $id
 * @property string $logo
 * @property string $logo_title
 * @property string $site_title
 * @property string $site_keyword
 * @property string $site_describe
 * @property string $record_number
 * @property string $footer_content
 * @property string $email
 * @property string $mobile
 * @property integer $ctime
 */
class Config extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dlc_config';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['logo', 'logo_title', 'site_title', 'site_keyword', 'site_describe', 'record_number', 'ctime'], 'required'],
            [['footer_content'], 'string'],
            [['ctime'], 'integer'],
            [['logo', 'logo_title', 'site_title', 'site_keyword', 'site_describe', 'record_number', 'email', 'mobile'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'logo' => 'Logo',
            'logo_title' => 'Logo Title',
            'site_title' => 'Site Title',
            'site_keyword' => 'Site Keyword',
            'site_describe' => 'Site Describe',
            'record_number' => 'Record Number',
            'footer_content' => 'Footer Content',
            'email' => 'Email',
            'mobile' => 'Mobile',
            'ctime' => 'Ctime',
        ];
    }

    public function getLogo(){
        return Upload::getImg($this->logo);
    }
}


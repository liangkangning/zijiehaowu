<?php

namespace frontend\models;

use common\models\Shop;
use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;
    public $password;
    public $mobile;
    public $repassword;



    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name','password','mobile','repassword'], 'required'],
            [['password','repassword'], 'string', 'min' => 6],
            ['repassword', 'compare', 'compareAttribute' => 'password','message'=>'两次输入的密码不一致！'],
            // email has to be a valid email address
            ['mobile', 'required'],
            ['mobile','match','pattern'=>'/^[1][34578][0-9]{9}$/'],
            ['mobile', 'unique', 'targetClass' => '\common\models\Shop', 'message' => '手机号已被使用'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => '店铺名',
            'mobile' => '手机号码',
            'email' => '邮箱',
            'password' => '密码',
            'repassword' => '重复密码',
            'verifyCode' => '验证码',
        ];
    }

    public function saveShop($post){
        $data = $post['ContactForm'];
        $model = new Shop();
        $model->name = $data['name'];
        $model->password = md5($data['password']);
        $model->mobile = $data['mobile'];
        $model->ctime = time();
        return $model->save();
    }



    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return boolean whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$this->email => $this->name])
            ->setSubject($this->subject)
            ->setTextBody($this->body)
            ->send();
    }
}

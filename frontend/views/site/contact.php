<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = '商家入驻申请';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        申请商家，后台审核通过后，会给您通知！
    </p>

    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'mobile') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'repassword')->passwordInput() ?>


                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('提交', ['class' => 'btn btn-primary', 'name' => '验证码']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
</div>
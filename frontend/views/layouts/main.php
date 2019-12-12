<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Yii::$app->params['seo_title'] ?></title>
    <meta name="keywords" content="<?=Yii::$app->params['keywords']?>">
    <meta name="description" content="<?= Yii::$app->params['describe'] ?>">
    <?php $this->head() ?>
    <link rel="stylesheet/less" type="text/css" href="/css/styles.less" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.10.0-beta/less.min.js" ></script>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <?php $this->beginContent('@app/views/layouts/public/header.php')?>
    <?php $this->endContent()?>

    <div id="breadcrumb">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
        </div>
    </div>

    <?= $content ?>


</div>

<footer class="footer">

        <div class="top row section30 bottom_border">
            <div class="container">
            <div class="pull-left col-md-7">
                <ul>
                    <li class="col-md-4">
                        <div class="title">资讯服务</div>
                        <div class="item"><a href="/about">关于我们</a></div>
                        <div class="item"><a href="/help">公告</a></div>
                        <div class="item"><a href="/help?index=2">常见问题</a></div>
                    </li>
                    <li class="col-md-4">
                        <div class="title">我们的产品</div>
                        <div class="item"><a href="/">字节好物</a></div>
                        <div class="item"><a href="/help">字节助手</a></div>
                    </li>
                    <li class="col-md-4">
                        <div class="title">联系我们</div>
                        <div class="item"><a href="#">邮箱：635442166@qq.com</a></div>
                        <div class="item"><a href="#">固话：020-8888888</a></div>
                    </li>
                </ul>
            </div>
            <div class="pull-right col-md-2">
                <img src="http://cdn.bxiaobao.com/object_image_1567495314043" alt="">
            </div>
        </div>
        </div>
        <div class="bottom row">
            <div class="container">
                <p class="text-center"> 广州字节动不动有限公司 | CopyRight 2017-2019 粤ICP备xxxxx号-1 | 字节好物 www.zijiehaowu.com </p>
            </div>
        </div>


</footer>

<div class="ant-back-top" onclick="returnTop()"><img alt="icon" src="/images/top.png"></div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

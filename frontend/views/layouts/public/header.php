<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
?>

<?php
NavBar::begin([
    'brandLabel' => '您好，欢迎来到字节好物',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-default navbar-fixed-top',
    ],
]);
$menuItems = [
    ['label' => '关于我们', 'url' => ['/about/']],
    ['label' => '商家入驻', 'url' => ['/site/contact']],
];
if (Yii::$app->user->isGuest) {
    $menuItems[] = ['label' => '注册', 'url' => ['/site/signup']];
    $menuItems[] = ['label' => '登陆', 'url' => ['/site/login']];
} else {
    $menuItems[] = '<li>'
        . Html::beginForm(['/site/logout'], 'post')
        . Html::submitButton(
            'Logout (' . Yii::$app->user->identity->username . ')',
            ['class' => 'btn btn-link']
        )
        . Html::endForm()
        . '</li>';
}
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => $menuItems,
]);
NavBar::end();
?>

<header>
    <div class="container">
        <div class="logo col-md-3"><a href="/"><img src="<?= Yii::$app->params['config']->getLogo()?>" alt=""></a></div>
        <div class="search col-md-9">
            <div class="inputBox___XhmF7">
                <span class="ant-input-search ant-input-search-enter-button ant-input-search-large ant-input-group-wrapper ant-input-group-wrapper-lg">
                    <span class="ant-input-wrapper ant-input-group">
                        <input placeholder="请输入商品名称" class="ant-input ant-input-lg" type="text" value=""><span class="ant-input-group-addon">
                            <button type="button" class="ant-btn ant-input-search-button ant-btn-primary ant-btn-lg">
                                <span>搜 索</span></button></span></span></span>
            </div>
        </div>
    </div>

</header>

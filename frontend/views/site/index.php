<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="banner">
    <img src="https://cdn.bxiaobao.com/object_image_1573524190353" alt="">
</div>
<div class="container">
<div class="site-index">
    <div class="imgs section">
        <ul>
            <li class="col-md-4"><div class="item"><a href="#"><img src="/images/index1.png" alt=""></a></div></li>
            <li class="col-md-4"><div class="item">
                    <div class="img"><a href="#"><img src="/images/index2.png" alt=""></a></div>
                    <div class="img"><a href="#"><img src="/images/index3.png" alt=""></a></div>
                </div>
            </li>
            <li class="col-md-4"><div class="item">
                    <div class="img"><a href="#"><img src="/images/index4.png" alt=""></a></div>
                    <div class="img"><a href="#"><img src="/images/index5.png" alt=""></a></div>
                </div>
            </li>
        </ul>
    </div>
    <div class="index_product section">
        <div class="title size3"><div class="pull-left">热门推荐</div><div class="more pull-right"><a href="">更多</a></div></div>
        <div class="list section30">
            <ul>
                <?php foreach (Yii::$app->params['goods_hot'] as $key=>$value):?>
                <li class="col-lg-3">
                    <div class="item">
                        <div class="img"><a href="<?= $value->url?>"><img src=" <?= $value->imgUrl?>" alt=""></a></div>
                        <div class="text">
                            <div class="goods_name"><a href=""><?=$value->name ?></a></div>
                            <div class="price col-md-12"><span>销售价：<b class="size_color_red">¥<?= $value->price?></b></span></div>
                            <div class="fans col-md-12"><span class="pull-left">粉丝数 ≥ <?=$value->min_fans ?></span><span class="pull-right">剩余数量: <?=$value->stock ?></span></div>
                            <div class="commission col-md-12"><span class="pull-left">佣金：<b class="size_color_red"><?=$value->commission ?></b></span><span class="pull-right">佣金比例：<b class="size_color_red"><?=$value->ratio ?>%</b></span></div>
                            <div class="ding col-md-12"><span class="pull-right">支持定向</span></div>
                            <div class="apply pull-right"><a href="<?= $value->url?>">申请样品</a></div>
                        </div>
                    </div>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>
</div>

<div class="getiao section"></div>
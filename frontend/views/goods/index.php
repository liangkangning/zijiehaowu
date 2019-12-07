<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
?>
<div class="goods_detail section container">
   <div class="top">
       <div class="img col-lg-4"><img src="<?= Yii::$app->params['data']['imgUrl']?>" alt=""></div>
       <div class="text col-lg-8">
           <div class="title size2"><?= Yii::$app->params['data']['name']?></div>
           <div class="price back_color section col-md-12">
               <div class="one item"><span class="col-md-4 color_max size3"><strong>¥<?= Yii::$app->params['data']['price']?></strong></span><span class="col-md-4 color_max size3"><strong><?= Yii::$app->params['data']['ratio']?>%</strong></span></div>
               <div class="two item"><span class="col-md-4"><?= Yii::$app->params['data']['price']?></span><span class="col-md-4">预估佣金:<?= Yii::$app->params['data']['commission']?></span></div>
               <div class="tree item"><span class="col-md-4 color_max size4">券后价</span><span class="col-md-4 color_max size4">佣金比例</span></div>
           </div>
           <div class="fans back_color section20 col-md-12">
               <div class="fan item"><span class="col-md-4">领样条件：<b>粉丝数≥<?= Yii::$app->params['data']['min_fans']?></b></span><span class="col-md-8">领样剩余数:<?= Yii::$app->params['data']['commission']?></span></div>
               <div class="time item"><span class="col-md-4">活动剩余天数：<b>5</b></span></div>
           </div>
           <div class="col-md-12">
               <div class="apply section20 size3"><a href="">申请取样</a></div>
           </div>

       </div>
   </div>
    <div class="content section">
        <div class="title"><span></span>商品介绍</div>
         <div class="section20">
             <?=Yii::$app->params['data']['contents'] ?>
         </div>
    </div>
</div>
<div class="getiao section"></div>

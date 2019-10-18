<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 16.10.2016
 */
/* @var $this yii\web\View */
/* @var $widget \skeeks\cms\shopCartItemsWidget\ShopCartItemsListWidget */
/* @var $model \skeeks\cms\shop\models\ShopBasket */
$widget     = $this->context;
?>
<div class="item">
    <div class="cart_img float-left width-100 padding-10 text-left">
        <a href="<?= $model->url; ?>">
            <img src="<?= \skeeks\cms\helpers\Image::getSrc(
                     \Yii::$app->imaging->getImagingUrl($model->image ? $model->image->src : null, new \skeeks\cms\components\imaging\filters\Thumbnail([
                         'h' => 100,
                         'w' => 100,
                     ]))
                 ) ?>" class="sx-lazy"
                 alt="<?= $model->name; ?> title="<?= $model->name; ?> width="80"/>
        </a>
    </div>
    <a href="<?= $model->url; ?>" class="product_name" data-pjax="0">
        <span><?= $model->name; ?></span>
        <? if ($model->shopBasketProps) : ?>
            <? foreach ($model->shopBasketProps as $prop) : ?>
                <small><?= $prop->name; ?>: <?= $prop->value; ?></small>
            <? endforeach; ?>
        <? endif; ?>
    </a>

    <div class="total_price">
        <span><?= \Yii::$app->money->convertAndFormat($model->money->multiply($model->quantity)); ?></span>
    </div>
    <div class="qty">
        <span><?= round($model->quantity); ?></span>
        &times;
        <? if ($model->moneyOriginal->getAmount() == $model->money->getAmount()) : ?>
            <?= \Yii::$app->money->convertAndFormat($model->moneyOriginal); ?>
        <? else : ?>
            <span
                class="line-through nopadding-left"><?= \Yii::$app->money->convertAndFormat($model->moneyOriginal); ?></span>
            <?= \Yii::$app->money->convertAndFormat($model->money); ?>
        <? endif; ?>
    </div>
    <div class="clearfix"></div>
</div>
<!-- /cart item -->
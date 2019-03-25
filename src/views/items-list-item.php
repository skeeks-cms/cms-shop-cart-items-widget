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
    <div class="cart_img pull-left width-100 padding-10 text-left">
        <a href="<?= $model->url; ?>">
            <img src="<?= \skeeks\cms\helpers\Image::getSrc(
                     \Yii::$app->imaging->getImagingUrl($model->image ? $model->image->src : null, new \skeeks\cms\components\imaging\filters\Thumbnail([
                         'h' => 100,
                         'w' => 100,
                         'm' => \Imagine\Image\ManipulatorInterface::THUMBNAIL_INSET,
                     ]))
                 ) ?>" class="sx-lazy"
                 alt="<?= $model->name; ?> title="<?= $model->name; ?> width="80"/>
        </a>
    </div>
    <a href="<?= $model->url; ?>" class="product_name" data-pjax="0">
        <span><?= $model->name; ?></span>
        <? if ($model->product->cmsContentElement->parent_content_element_id && $model->product->cmsContentElement->name != $model->product->cmsContentElement->parentContentElement->name) : ?>
            <small><?= $model->product->cmsContentElement->name; ?></small>
        <? endif; ?>
        <? if ($model->shopBasketProps) : ?>
            <? foreach ($model->shopBasketProps as $prop) : ?>
                <small><?= $prop->name; ?>: <?= $prop->value; ?></small>
            <? endforeach; ?>
        <? endif; ?>
    </a>
    <a href="#" class="remove_item" data-toggle="tooltip"
       onclick="sx.Shop.removeBasket('<?= $model->id; ?>'); return false;"
       title="<?= \Yii::t('skeeks/shop-cart-items-widget', 'Remove this item'); ?>"><i class="fa fa-remove"></i></a>
    <div class="total_price">
        <span><?= $model->money->multiply($model->quantity); ?></span>
    </div>
    <div class="qty">
        <input type="number" value="<?= round($model->quantity); ?>" name="qty"
               class="sx-basket-quantity" maxlength="3" max="999" min="1"
               data-basket_id="<?= $model->id; ?>"/>
        &times;
        <? if ($model->moneyOriginal->getAmount() == $model->money->getAmount()) : ?>
            <?= $model->moneyOriginal; ?>
        <? else : ?>
            <span
                class="line-through nopadding-left"><?= $model->moneyOriginal; ?></span>
            <?= $model->money; ?>
        <? endif; ?>
    </div>
    <div class="clearfix"></div>
</div>
<!-- /cart item -->

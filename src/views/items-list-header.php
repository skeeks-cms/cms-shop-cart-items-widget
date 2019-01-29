<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 16.10.2016
 */
/* @var $this yii\web\View */
/* @var $widget \skeeks\cms\shopCartItemsWidget\ShopCartItemsListWidget */
\skeeks\cms\shopCartItemsWidget\assets\ShopCartItemsListWidgetAsset::register($this);
$widget     = $this->context;
?>
<div class="item head clearfix">
    <span class="cart_img"></span>
    <span class="product_name size-13 bold"><?= \Yii::t('skeeks/shop-cart-items-widget', 'Product'); ?></span>
    <span class="remove_item size-13 bold"></span>
    <span class="total_price size-13 bold"><?= \Yii::t('skeeks/shop-cart-items-widget', 'Total'); ?></span>
    <span class="qty size-13 bold"><?= \Yii::t('skeeks/shop-cart-items-widget', 'Quantity'); ?></span>
</div>

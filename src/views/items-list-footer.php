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
<button onclick="sx.Shop.clearCart(); return false;"
        class="btn btn-default btn-sm margin-top-20 margin-right-10 pull-left sx-btn-clear-cart g-mt-20"><i
        class="fa fa-remove"></i> <?= \Yii::t('skeeks/shop-cart-items-widget', 'Clear cart'); ?>
</button>
<!-- /update cart -->
<div class="clearfix"></div>
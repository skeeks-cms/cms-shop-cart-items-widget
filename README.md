Widget shop cart steps for SkeekS CMS
===================================

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist skeeks/cms-shop-cart-items-widget "*"
```

or add

```
"skeeks/cms-shop-cart-items-widget": "*"
```

Example
----------

```php

<?= \skeeks\cms\shopCartItemsWidget\ShopCartItemsListWidget::widget([
    'dataProvider' => new \yii\data\ActiveDataProvider([
        'query' => \Yii::$app->shop->shopFuser->getShopBaskets()
    ]),
    //'headerView' => '@app/view/.../header',
    //'footerView' => '@app/view/.../footer',
    //'itemView' => '@app/view/.../item',
]); ?>

```


##Links
* [Web site](http://cms.skeeks.com)
* [Author](http://skeeks.com)

___

> [![skeeks!](https://gravatar.com/userimage/74431132/13d04d83218593564422770b616e5622.jpg)](http://skeeks.com)  
<i>SkeekS CMS (Yii2) � quickly, easily and effectively!</i>  
[skeeks.com](http://skeeks.com) | [cms.skeeks.com](http://cms.skeeks.com)


<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 28.12.2016
 */
namespace skeeks\cms\shopCartItemsWidget\assets;
use skeeks\cms\base\AssetBundle;

/**
 * Class ShopCartStepsWidgetAsset
 * @package skeeks\cms\shopCartItemsWidget\assets
 */
class ShopCartItemsListWidgetAsset extends AssetBundle
{
    public $sourcePath = '@skeeks/cms/shopCartItemsWidget/assets/src';

    public $css             = [
        'style.css'
    ];
    public $js              = [];
    public $depends         = [];
}

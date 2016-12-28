<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 28.12.2016
 */
namespace skeeks\cms\shopCartItemsWidget;
use yii\widgets\ListView;

/**
 * Class ShopCartStepsWidget
 *
 * @package skeeks\cms\rpViewWidget
 */
class ShopCartItemsListWidget extends ListView
{
    public function init()
    {
        parent::init();
        self::registerTranslations();
    }

    public $viewFile = 'default';

    public $options = [];
    /**
     * Подготовка данных для шаблона
     * @return $this
     */
    public function run()
    {
        return $this->render($this->viewFile);
    }


    static public $isRegisteredTranslations = false;

    static public function registerTranslations()
    {
        if (self::$isRegisteredTranslations === false)
        {
            \Yii::$app->i18n->translations['skeeks/shop-cart-items-widget'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'sourceLanguage' => 'en',
                'basePath' => '@skeeks/cms/shopCartItemsWidget/messages',
                'fileMap' => [
                    'skeeks/shop-cart-items-widget' => 'main.php',
                ],
            ];
            self::$isRegisteredTranslations = true;
        }
    }


}
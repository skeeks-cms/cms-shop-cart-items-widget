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
 * Class ShopCartItemsListWidget
 * @package skeeks\cms\shopCartItemsWidget
 */
class ShopCartItemsListWidget extends ListView
{
    /**
     * @var string
     */
    public $layout = "{header}\n{items}\n{pager}{footer}";

    public function init()
    {
        parent::init();
        self::registerTranslations();
    }

    public $pagination = [
        'defaultPageSize'   => 1,
        'pageSizeLimit'     => [1, 100]
    ];

    /**
     * @var array
     */
    public $options = [
        'class' => 'cartContent clearfix'
    ];

    public $itemOptions = [
        'tag' => false
    ];

    /**
     * Header list view
     * @var string
     */
    public $headerView  = '@skeeks/cms/shopCartItemsWidget/views/items-list-header';
    /**
     * Footer list view
     * @var string
     */
    public $footerView  = '@skeeks/cms/shopCartItemsWidget/views/items-list-footer';

    /**
     * @var string
     */
    public $itemView        = '@skeeks/cms/shopCartItemsWidget/views/items-list-item';

    /**
     * @param string $name
     * @return bool|string
     */
    public function renderSection($name)
    {
        switch ($name) {
            case '{header}':
                return $this->renderHeader();
            case '{footer}':
                return $this->renderFooter();
            default:
                return parent::renderSection($name);
        }
    }

    /**
     * @return string
     */
    public function renderHeader()
    {
        if ($this->headerView)
        {
            return $this->view->render($this->headerView);
        }

        return '';
    }

    /**
     * @return string
     */
    public function renderFooter()
    {
        if ($this->footerView)
        {
            return $this->view->render($this->footerView);
        }

        return '';
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
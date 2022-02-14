<?php

/**
 * Bugherd plugin for Craft CMS 3.x
 *
 * Easily install Bugherd on your Craft CMS site
 *
 * @link      https://onedesigncompany.com/
 * @copyright Copyright (c) 2022 One Design Company
 */

namespace onedesign\bugherd;

use Craft;
use craft\base\Plugin;
use craft\helpers\App;
use craft\web\View;
use onedesign\bugherd\models\Settings;
use yii\base\Event;

/**
 * Class Bugherd
 * * @author    One Design Company
 *
 * @package   Bugherd
 * @since     1.0.0
 *
 * @property Settings $settings
 *
 */
class Bugherd extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var Bugherd
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '1.0.0';

    /**
     * @var bool
     */
    public $hasCpSettings = true;

    /**
     * @var bool
     */
    public $hasCpSection = false;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Craft::info(
            Craft::t(
                'bugherd',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );

        Event::on(
            View::class,
            \yii\web\View::EVENT_END_BODY,
            function() {
                if (Craft::$app->request->getIsSiteRequest()) {
                    echo services\Bugherd::renderScript();
                }
            }
        );
    }

    // Protected Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    protected function createSettingsModel()
    {
        return new Settings();
    }

    /**
     * @inerhitdoc
     */
    protected function settingsHtml()
    {
        return \Craft::$app->getView()->renderTemplate(
            'bugherd/settings',
            ['settings' => $this->getSettings()]
        );
    }

}

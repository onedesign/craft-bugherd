<?php

namespace onedesign\bugherd\services;

use craft\base\Component;
use craft\helpers\App;
use craft\web\View;

class Bugherd extends Component
{
    public static function renderScript()
    {
        $plugin = \onedesign\bugherd\Bugherd::$plugin;
        $view = \Craft::$app->getView();
        $enabled = App::parseBooleanEnv($plugin->getSettings()->enabled);
        $projectId = App::parseEnv($plugin->getSettings()->projectId);

        if ($enabled && $projectId) {
            return $view->renderTemplate('bugherd/_script', [
                'projectId' => $projectId,
            ], View::TEMPLATE_MODE_CP);
        }
    }

}

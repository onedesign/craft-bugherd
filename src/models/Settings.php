<?php

namespace onedesign\bugherd\models;

use craft\base\Model;

class Settings extends Model
{
    /**
     * Bugherd project ID
     *
     * @var string
     */
    public $projectId = '$BUGHERD_PROJECT_ID';

    /**
     * If Bugherd is enabled
     *
     * @var bool
     */
    public $enabled = '$BUGHERD_ENABLED';

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['projectId', 'enabled'], 'required'],
        ];
    }
}

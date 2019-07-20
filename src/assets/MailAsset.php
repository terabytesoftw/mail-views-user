<?php

/**
 * MailAsset
 *
 * Asset mailer user custom
 **/

namespace terabytesoft\mail\views\user\assets;

use yii\web\AssetBundle;

class MailAsset extends AssetBundle
{
    /**
     * @var array $css
     */
    public $css = [
        'mail.css',
    ];

    /**
     * @var string $sourcePath
     */
    public $sourcePath = __DIR__ . '/css';

    /**
     * init
     */
    public function init(): void
    {
        parent::init();
    }
}

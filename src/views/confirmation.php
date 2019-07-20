<?php

/**
 * @var string $tokenUrl
 */

use terabytesoft\mail\views\user\assets\MailAsset;
use yii\helpers\Html;

MailAsset::register($this);
?>

<?= Html::beginTag('p', ['class' => 'mail-confirmation']) ?>
    <?= \Yii::t('mail.views.user', 'Hello') . ',' ?>
<?= Html::endTag('p') ?>

<?= Html::beginTag('p', ['class' => 'mail-confirmation']) ?>
    <?= \Yii::t('mail.views.user', 'Thank you for signing up on {0}.', [\Yii::$app->name]) .
        \Yii::t('mail.views.user', 'In order to complete your registration, please click the link below.') ?>
<?= Html::endTag('p') ?>

<?= Html::beginTag('p', ['class' => 'mail-confirmation']) ?>
    <?= Html::a(Html::encode($tokenUrl), $tokenUrl) ?>
<?= Html::endTag('p') ?>

<?= Html::beginTag('p', ['class' => 'mail-confirmation']) ?>
    <?= \Yii::t('mail.views.user', 'If you cannot click the link, please try pasting the text into your browser.') ?>
<?= Html::endTag('p') ?>

<?= Html::beginTag('p', ['class' => 'mail-confirmation']) ?>
    <?= \Yii::t('mail.views.user', 'If you did not make this request you can ignore this email.') ?>
<?= Html::endTag('p');

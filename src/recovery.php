<?php

/**
 * @var string $tokenUrl
 */

use terabytesoft\mail\views\user\assets\MailAsset;
use yii\helpers\Html;

MailAsset::register($this);
?>

<?= Html::beginTag('p', ['class' => 'mail-recovery']) ?>
    <?= \Yii::t('mail.views.user', 'Hello') . ',' ?>
<?= Html::endTag('p') ?>

<?= Html::beginTag('p', ['class' => 'mail-recovery']) ?>
    <?php \Yii::t(
        'mail.views.user',
        'We have received a request to reset the password for your account on {0}.',
        [\Yii::$app->name]
    ) .
    \Yii::t('mail.views.user', 'Please click the link below to complete your password reset.') ?>
<?= Html::endTag('p') ?>

<?= Html::beginTag('p', ['class' => 'mail-recovery']) ?>
    <?= Html::a(Html::encode($tokenUrl), $tokenUrl) ?>
<?= Html::endTag('p') ?>

<?= Html::beginTag('p', ['class' => 'mail-recovery']) ?>
    <?= \Yii::t('mail.views.user', 'If you cannot click the link, please try pasting the text into your browser.') ?>
<?= Html::endTag('p') ?>

<?= Html::beginTag('p', ['class' => 'mail-recovery']) ?>
    <?= \Yii::t('mail.views.user', 'If you did not make this request you can ignore this email.') ?>
<?= Html::endTag('p');

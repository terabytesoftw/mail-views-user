<?php

/**
 * @var string $password
 */

use terabytesoft\mail\views\user\assets\MailAsset;
use yii\helpers\Html;

MailAsset::register($this);
?>

<?= Html::beginTag('p', ['class' => 'mail-new_password']) ?>
    <?= \Yii::t('mail.views.user', 'Hello') . ',' ?>
<?= Html::endTag('p') ?>

<?= Html::beginTag('p', ['class' => 'mail-new_password']) ?>
    <?= \Yii::t('mail.views.user', 'Your account on {0} has a new password.', [\Yii::$app->name]) ?>
    <?= \Yii::t('mail.views.user', 'We have generated a password for you:') ?>
    <?= '<b>' . $password . '</b>' ?>
<?= Html::endTag('p') ?>

<?= Html::beginTag('p', ['class' => 'mail-new_password']) ?>
    <?= \Yii::t('mail.views.user', 'If you did not make this request you can ignore this email.') ?>
<?= Html::endTag('p');

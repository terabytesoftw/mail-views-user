<?php

/**
 * @var bool $accountGeneratingPassword
 * @var string $password
 * @var bool $showPassword
 * @var string $token_url
 */

use terabytesoft\mail\views\user\assets\MailAsset;
use yii\helpers\Html;

MailAsset::register($this);
?>

<?= Html::beginTag('p', ['class' => 'mailer-welcome']) ?>
    <?= \Yii::t('mail.views.user', 'Hello') . ',' ?>
<?= Html::endTag('p') ?>

<?= Html::beginTag('p', ['class' => 'mailer-welcome']) ?>
    <?= \Yii::t('mail.views.user', 'Your account on {0} has been created.', [\Yii::$app->name]) ?>
    <?php if ($showPassword || $accountGeneratingPassword) : ?>
        <?= \Yii::t('mail.views.user', 'We have generated a password for you') ?>: <strong><?= $user->password ?></strong>
    <?php endif ?>
<?= Html::endTag('p') ?>

<?php if ($tokenUrl !== null) : ?>
    <?= Html::beginTag('p', ['class' => 'mailer-welcome']) ?>
        <?= \Yii::t('mail.views.user', 'In order to complete your registration, please click the link below.') ?>
    <?= Html::endTag('p') ?>
    <?= Html::beginTag('p', ['class' => 'mailer-welcome']) ?>
        <?= Html::a(Html::encode($tokenUrl), $tokenUrl) ?>
    <?= Html::endTag('p') ?>
    <?= Html::beginTag('p', ['class' => 'mailer-welcome']) ?>
        <?= \Yii::t(
            'mail.views.user',
            'If you cannot click the link, please try pasting the text into your browser.'
        ) ?>
    <?= Html::endTag('p') ?>
<?php endif ?>

<?= Html::beginTag('p', ['class' => 'mailer-welcome']) ?>
    <?= \Yii::t('mail.views.user', 'If you did not make this request you can ignore this email.') ?>
<?= Html::endTag('p');

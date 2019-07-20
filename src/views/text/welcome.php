<?php

/**
 * @var bool $accountGeneratingPassword
 * @var string $password
 * @var bool $showPassword
 * @var string $tokenUrl
 */
?>

<?= \Yii::t('mail.views.user', 'Hello') . ',' ?>
<?= \Yii::t('mail.views.user', 'Your account on {0} has been created.', [\Yii::$app->name]) ?>

<?php if ($showPassword || $accountGeneratingPassword) : ?>
    <?= \Yii::t('mail.views.user', 'We have generated a password for you:') ?>
    <?= '<b>' . $password . '</b>' ?>
<?php endif ?>

<?php if ($token !== null) : ?>
    <?= \Yii::t('mail.views.user', 'In order to complete your registration, please click the link below.') ?>
    <?= '<b>' . $tokenUrl . '</b>' ?>
    <?= \Yii::t('mail.views.user', 'If you cannot click the link, please try pasting the text into your browser.') ?>
<?php endif ?>

<?= \Yii::t('mail.views.user', 'If you did not make this request you can ignore this email.');

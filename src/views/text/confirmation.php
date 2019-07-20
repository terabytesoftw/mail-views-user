<?php

/**
 * @var string $tokenUrl
 */
?>

<?= \Yii::t('mail.views.user', 'Hello') . ',' ?>
<?= \Yii::t('mail.views.user', 'Thank you for signing up on {0}.', [\Yii::$app->name]) .
    \Yii::t('mail.views.user', 'In order to complete your registration, please click the link below.') ?>

<?= '<b>' . $tokenUrl . '</b>' ?>

<?= \Yii::t('mail.views.user', 'If you cannot click the link, please try pasting the text into your browser.') ?>
<?= \Yii::t('mail.views.user', 'If you did not make this request you can ignore this email.');

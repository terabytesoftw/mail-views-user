<?php

/**
 * @var string $tokenUrl
 */
?>

<?= \Yii::t('mail.views.user', 'Hello') . ',' ?>
<?php \Yii::t(
    'mail.views.user',
    'We have received a request to reset the password for your account on {0}.',
    [\Yii::$app->name]
) .
\Yii::t('mail.views.user', 'Please click the link below to complete your password reset.') ?>

<?= '<b>' . $tokenUrl . '</b>' ?>

<?= \Yii::t('mail.views.user', 'If you cannot click the link, please try pasting the text into your browser.') ?>
<?= \Yii::t('mail.views.user', 'If you did not make this request you can ignore this email.');

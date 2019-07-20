<?php

/**
 * @var string $password
 */
?>

<?= \Yii::t('mail.views.user', 'Hello') . ',' ?>
<?= \Yii::t('mail.views.user', 'Your account on {0} has a new password.', [\Yii::$app->name]) ?>
<?= \Yii::t('mail.views.user', 'We have generated a password for you: ') ?>

<?= '<b>' . $password . '</b>' ?>

<? \Yii::t('mail.views.user', 'If you did not make this request you can ignore this email.');

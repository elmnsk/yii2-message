<?php

use yii\helpers\Html;

$action = Yii::$app->controller->action->id;

?>

<?php
if ($action == 'inbox') {
    $caption = '<i class="fa fa-inbox"></i> <strong>' . Yii::t('message', 'Inbox') . '</strong>';
} else {
    $caption = '<i class="fa fa-inbox"></i> ' . Yii::t('message', 'Inbox');
} ?>

<?= Html::a($caption, ['inbox'], ['class' => 'btn btn-success']) ?>

<?php
if ($action == 'sent') {
    $caption = '<i class="fa fa-paper-plane-o"></i> <strong>' . Yii::t('message', 'Sent') . '</strong>';
} else {
    $caption = '<i class="fa fa-paper-plane-o"></i> ' . Yii::t('message', 'Sent');
} ?>

<?= Html::a($caption, ['sent'], ['class' => 'btn btn-success']) ?>

<?php
if ($action == 'drafts' || isset($_GET['hash'])) {
    $caption = '<i class="fa fa-file-text-o"></i> <strong>' . Yii::t('message', 'Manage Drafts') . '</strong>';
} else {
    $caption = '<i class="fa fa-file-text-o"></i> ' . Yii::t('message', 'Manage Drafts');
} ?>

<?= Html::a($caption, ['drafts'], ['class' => 'btn btn-success']) ?>

<?php
if ($action == 'signature') {
    $caption = '<i class="fa fa-pencil-square-o"></i> <strong>' . Yii::t('message', 'Manage Signature') . '</strong>';
} else {
    $caption = '<i class="fa fa-pencil-square-o"></i> ' . Yii::t('message', 'Manage Signature');
} ?>

<?= Html::a($caption, ['signature'], ['class' => 'btn btn-success']) ?>

<?php
if ($action == 'ignorelist') {
    $caption = '<i class="fa fa-ban"></i> <strong>' . Yii::t('message', 'Manage Ignorelist') . '</strong>';
} else {
    $caption = '<i class="fa fa-ban"></i> ' . Yii::t('message', 'Manage Ignorelist');
} ?>

<?= Html::a($caption, ['ignorelist'], ['class' => 'btn btn-success']) ?>


<?php
if ($action == 'compose') {
    $caption = '<i class="fa fa-plus"></i> <strong>' . Yii::t('message', 'Write a message') . '</strong>';
} else {
    $caption = '<i class="fa fa-plus"></i> ' . Yii::t('message', 'Write a message');
} ?>

<?= Html::a($caption, ['compose'], ['class' => 'btn btn-success']) ?>

<?php
if ($action == 'manage-draft' && !isset($_GET['hash'])) {
    $caption = '<i class="fa fa-plus"></i> <strong>' . Yii::t('message', 'Create a draft') . '</strong>';
} else {
    $caption = '<i class="fa fa-plus"></i> ' . Yii::t('message', 'Create a draft');
} ?>

<?= Html::a($caption, ['manage-draft'], ['class' => 'btn btn-success']) ?>

<?php if ($action == 'inbox') { ?>
    <?= Html::a(
        '<i class="fa fa-flag-checkered"></i> ' . Yii::t('message', 'Mark all messages as read'),
        ['mark-all-as-read'], ['class' => 'btn btn-success pull-right']) ?>
<?php } ?>

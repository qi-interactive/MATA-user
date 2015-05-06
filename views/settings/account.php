<?php

/*
 * This file is part of the mata project.
 *
 * (c) mata project <http://github.com/mata>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use yii\helpers\Html;
use matacms\widgets\ActiveForm;

/**
 * @var $this  yii\web\View
 * @var $form  yii\widgets\ActiveForm
 * @var $model mata\user\models\SettingsForm
 */

$this->title = Yii::t('user', 'Account settings');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="account-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin([
        'id' => 'account-form',
        'enableAjaxValidation' => true,
        'enableClientValidation' => false,
    ]); ?>

    <div class="form-row">
        <h4>profile settings</h4>

        <?= $form->field($profileModel, 'name') ?>

        <?= $form->field($profileModel, 'Avatar')->media() ?>

    </div>

    <div class="form-row">
        <h4>account settings</h4>

        <?= $form->field($accountModel, 'email') ?>

        <?= $form->field($accountModel, 'username') ?>

        <?= $form->field($accountModel, 'new_password')->passwordInput() ?>

        <?= $form->field($accountModel, 'current_password')->passwordInput() ?>

    </div>

    <?= $form->submitButton($profileModel) ?>

    <?php ActiveForm::end(); ?>
</div>

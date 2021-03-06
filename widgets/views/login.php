<?php

/*
 * This file is part of the mata project.
 *
 * (c) mata project <http://github.com/mata>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use mata\widgets\ActiveForm;
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var mata\widgets\ActiveForm $form
 * @var mata\user\models\LoginForm $model
 * @var string $action
 */
?>

<?php if (Yii::$app->user->isGuest): ?>

    <?php $form = ActiveForm::begin([
        'id' => 'login-widget-form',
        'fieldConfig' => [
            'template' => "{input}\n{error}"
        ],
        'action' => $action
    ]) ?>

    <?= $form->field($model, 'login')->textInput(['placeholder' => 'Login']) ?>

    <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password']) ?>

    <?= $form->field($model, 'rememberMe')->checkbox() ?>

    <?= Html::submitButton(Yii::t('user', 'Sign in'), ['class' => 'btn btn-primary btn-block']) ?>

    <?php ActiveForm::end(); ?>

<?php else: ?>

    <?= Html::a(Yii::t('user', 'Logout'), ['/user/security/logout'], ['class' => 'btn btn-danger btn-block', 'data-method' => 'post']) ?>

<?php endif ?>
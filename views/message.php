<?php

/*
 * This file is part of the mata project.
 *
 * (c) mata project <http://github.com/mata>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

/**
 * @var $this   yii\web\View
 * @var $title  string
 * @var $module mata\user\Module
 */

$this->title = $title;

?>

<?= $this->render('/_alert', [
    'module' => $module,
]) ?>

<?php

/*
 * This file is part of the mata project.
 *
 * (c) mata project <http://github.com/mata>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace mata\user\clients;

use yii\authclient\clients\GoogleOAuth as BaseGoogle;

/**
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class Google extends BaseGoogle implements ClientInterface
{
    /** @inheritdoc */
    public function getEmail()
    {
        return isset($this->getUserAttributes()['email'])
            ? $this->getUserAttributes()['email']
            : null;
    }

    /** @inheritdoc */
    public function getUsername()
    {
        return;
    }
}

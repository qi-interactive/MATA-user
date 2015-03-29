<?php

/*
 * This file is part of the mata project.
 *
 * (c) mata project <http://github.com/mata/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace mata\user\helpers;

/**
 * Password helper.
 *
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class Profile
{

    public static function getAvatar($profile)
    {   
        return ($profileMedia = $profile->getMediaAvatar()) ? $profileMedia->URI : 'http://placehold.it/62x65';
    }

}

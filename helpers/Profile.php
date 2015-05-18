<?php
 
/**
 * @link http://www.matacms.com/
 * @copyright Copyright (c) 2015 Qi Interactive Limited
 * @license http://www.matacms.com/license/
 */

namespace mata\user\helpers;

/**
 * Password helper.
 */
class Profile
{

    public static function getAvatar($profile)
    {   
        return ($profileMedia = $profile->getMediaAvatar()) ? $profileMedia->URI : 'http://placehold.it/62x65';
    }

}

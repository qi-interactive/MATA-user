MATA Media
==========================================

Media module interfaces with media storages such as AWS S3 to host content like images, videos and files. It is used extensively by many MATA and MATA CMS modules.


Acknowledgement
------------
This module is based on the excellent [Yii2 User by dektrium](https://github.com/dektrium/yii2-user).


Installation
------------

- Add the module using composer:

```json
"mata/mata-user": "~1.0.0"
```

-  Run migrations
```
php yii migrate/up --migrationPath=@vendor/mata/mata-user/migrations
```

Changelog
---------

## 1.0.4-alpha, August 21, 2015

- Fixed password recovery functionality

## 1.0.3-alpha, July 20, 2015

- Removed dependency on matacms

## 1.0.2.1-alpha, June 26, 2015

- Removed 400 error from the login page when user already logged in

## 1.0.2-alpha, June 3, 2015

- Made User model use \yii\db\ActiveQuery


## 1.0.1-alpha, May 2, 2015

- Bug fix


## 1.0.0-alpha, May 18, 2015

- Initial release

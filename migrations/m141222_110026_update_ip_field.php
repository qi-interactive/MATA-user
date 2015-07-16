<?php

/**
 * @link http://www.matacms.com/
 * @copyright Copyright (c) 2015 Qi Interactive Limited
 * @license http://www.matacms.com/license/
 */

use yii\db\Query;
use yii\db\Schema;
use yii\db\Migration;

class m141222_110026_update_ip_field extends Migration
{
    public function up()
    {
        $users = (new Query())->from('{{%user}}')->select('id, registration_ip ip')->all();

        $transaction = Yii::$app->db->beginTransaction();
        try {
            $this->alterColumn('{{%user}}', 'registration_ip', Schema::TYPE_STRING . '(45)');
            foreach ($users as $user) {
                if ($user['ip'] == null) continue;
                Yii::$app->db->createCommand()->update('{{%user}}', [
                    'registration_ip' => long2ip($user['ip'])
                ], 'id = ' . $user['id'])->execute();
            }
            $transaction->commit();
        } catch (Exception $e) {
            $transaction->rollBack();
            throw $e;
        }
    }

    public function down()
    {
        echo "m141222_110026_update_ip_field cannot be reverted.\n";

        return false;
    }
}

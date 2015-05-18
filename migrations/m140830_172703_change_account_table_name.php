<?php
 
/**
 * @link http://www.matacms.com/
 * @copyright Copyright (c) 2015 Qi Interactive Limited
 * @license http://www.matacms.com/license/
 */

use yii\db\Migration;

class m140830_172703_change_account_table_name extends Migration
{
    public function safeUp()
    {
        $this->renameTable('{{%account}}', '{{%social_account}}');
    }

    public function safeDown()
    {
        $this->renameTable('{{%social_account}}', '{{%account}}');
    }
}

<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m190914_022012_todos_table
 */
class m190914_022012_todos_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	    $this->createTable('todos', [
		    'id' => Schema::TYPE_PK,
		    'title' => Schema::TYPE_STRING . ' NOT NULL',
		    'status' => Schema::TYPE_STRING,
	    ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
	    $this->dropTable('todos');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190914_022012_todos_table cannot be reverted.\n";

        return false;
    }
    */
}

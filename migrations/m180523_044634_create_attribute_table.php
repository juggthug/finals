<?php

use yii\db\Migration;

/**
 * Handles the creation of table `attribute`.
 */
class m180523_044634_create_attribute_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('attribute', [
            'id' => $this->primaryKey(),
            'name' => $this->string(20)->notNull(),
            'datatype' => $this->string(20)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('attribute');
    }
}

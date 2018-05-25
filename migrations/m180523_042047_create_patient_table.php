<?php

use yii\db\Migration;

/**
 * Handles the creation of table `patient`.
 */
class m180523_042047_create_patient_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('patient', [
            'id' => $this->primaryKey(),
            'dob' => $this->date(),
            'name' => $this->string(20)->notNull(),
            'gender' => $this->string(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('patient');
    }
}

<?php

use yii\db\Migration;

/**
 * Handles the creation of table `data`.
 */
class m180524_064253_create_data_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('data', [
            'id' => $this->primaryKey(),
            'patient_iD' => $this->integer()->notNull(),
            'date' => $this->date(),
            'attribute_id' => $this->integer()->notNull(),
            'value' => $this->string(20)
        ]);
        $this->createIndex(
            'idx-data-patiend_id',
            'data','patient_id'
        );

        $this->addForeignKey(
            'fk-data-patient',
            'data','patient_id',
            'patient', 'id'
        );

        $this->createIndex(
            'idx-data-attribute_id',
            'data','attribute_id'
        );

        $this->addForeignKey(
            'fk-data-attribute',
            'data','attribute_id',
            'attribute', 'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-data-patient', 'data');
        $this->dropForeignKey('fk-data-attribute', 'data');
        $this->dropIndex('idx-data-patient_id','data');
        $this->dropIndex('idx-data-attribute_id','data');
        $this->dropTable('data');
    }
}

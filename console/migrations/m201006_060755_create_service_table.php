<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%service}}`.
 */
class m201006_060755_create_service_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%service}}', [
            'id' => $this->primaryKey(),
            'title'=>$this->string()->notNull(),
            'description'=>$this->string(255),
            'content'=>$this->text(),
            'img'=>$this->string(),
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%service}}');
    }
}

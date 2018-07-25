<?php

use yii\db\Migration;

/**
 * Handles the creation of table `options`.
 */
class m180725_183124_create_options_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('options', [
            'id' => $this->primaryKey(),
            'siteurl' => $this->string(200),
            'meta_title' => $this->string(200),
            'meta_description' => $this->string(255),
            'meta_keywords' => $this->text(),
            'status' => $this->boolean(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('options');
    }
}
